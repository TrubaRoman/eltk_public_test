 @setup
//user on web-server
$user = 'ruraeltk';

$timezone = 'Europe/Warsaw';

//path to the directory on web-server
$path = '/var/www/project';

$current = $path . '/current';

//where take your code (git repository)

$repo = 'https://github.com/TrubaRoman/eltk_public_test.git';

$branch = 'deploy';

//Directory and files with chmod 775

$chmods = [
    'storage/logs'
];
$date = new DateTime('now', new DateTimeZone($timezone));
$release = $path.'/releases/'. $date->format('YmdHis');

@endsetup

@servers(['production' => $user . '@51.75.65.191'])

@task('clone',['on' => $on])
    mkdir -p {{$release}}
    echo "#0 mkdir"
    git clone --depth 1 -b {{$branch}} "{{ $repo }}" {{$release}}
    echo "#1 - Repository has been cloned"
@endtask

{{--Runs as fresh installation--}}
@task('composer', ['on' => $on])
    composer self-update
    echo "# Composer self update"
    cd {{ $release }}
    composer install --no-interaction --no-dev --prefer-dist
    echo "#2 -Composer dependencies have been installed"
@endtask

{{--Updates composer then runs a fresh instalation--}}

@task('artisan',['on' => $on])
    cd {{$release}}
	echo "#3.0 cd released"
    ln -nfs {{$path}}/.env .env;
	echo "#3.1 ls-nfs env"
    chgrp -h www-data .env;

    php artisan config:clear

    php artisan migrate
    php artisan clear-compiled --env=production;
    php artisan storage:link
{{--    php artisan optimize --env=production;--}}

    echo "#3 - Production dependencies have been installed"
@endtask

{{--Set permissions for various files and directories--}}



@task('chmod', ['on' => $on])

    chgrp -R www-data {{$release}};
    chmod -R ug+rwx {{$release}};

    @foreach($chmods as $file)
        chmod -R 775 {{$release}}/{{$file}}
        chown -R {{$user}}:www-data {{$release}}/{{$file}}
        echo "Permissions have been set for {{$file}}"
    @endforeach
echo "#4 - Permissins has been set"
@endtask

@task('update_symlinks')
    ln -nfs {{$release}} {{$current}};
    chgrp -h www-data {{$current}};
    echo "#5 -Symlink has been set"
@endtask

@macro('deploy',['on' => 'production'])

    clone
    composer
    artisan
    chmod
    update_symlinks
@endmacro
