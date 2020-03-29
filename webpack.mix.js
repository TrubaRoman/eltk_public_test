const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('public/build')
    .setResourceRoot('/build/')
    .styles([
        "resources/assets/template/css/import-fonts.css",

    "resources/assets/template/css/bootstrap.min.css",
    "resources/assets/template/css/animate.css",
    "resources/assets/template/css/owl.carousel.css",
    "resources/assets/template/css/font-awesome.css",
    "resources/assets/template/css/themify-icons.css",
    "resources/assets/template/css/flaticon.css",
    "resources/assets/template/css/prettyPhoto.css",
    "resources/assets/template/css/shortcodes.css",
    "resources/assets/template/css/main.css",
    "resources/assets/template/css/color-switcher.css",
    "resources/assets/template/css/colors/default-color.css",
    "resources/assets/template/css/responsive.css",
    ],'public/build/css/layout.css')

    .styles(["resources/assets/template/revolution/css/layers.css",
            "resources/assets/template/revolution/css/settings.css"],
            'public/build/revolution/css/slider.css')

    .scripts([

        "resources/assets/template/js/jquery.min.js",
        "resources/assets/template/js/tether.min.js",
        "resources/assets/template,js/bootstrap.min.js",
        "resources/assets/template/js/color-switcher.js",
        "resources/assets/template/js/jquery.easing.js",
        "resources/assets/template/js/jquery-waypoints.js",
        "resources/assets/template/js/jquery-validate.js",
        "resources/assets/template/js/owl.carousel.js",
        "resources/assets/template/js/jquery.prettyPhoto.js",
        "resources/assets/template/js/numinate.min6959.js?ver=4.9.3",
        "resources/assets/template/js/main.js"
    ],'public/build/js/layout.js')



    .scripts([ "resources/assets/template/revolution/js/jquery.themepunch.tools.min.js",
        "resources/assets/template/revolution/js/jquery.themepunch.revolution.min.js",
        "resources/assets/template/revolution/js/slider.js",
        ],'public/build/revolution/js/slider.js')

    .scripts([
        "resources/assets/template/revolution/js/extensions/revolution.extension.actions.min.js",
        "resources/assets/template/revolution/js/extensions/revolution.extension.carousel.min.js",
        "resources/assets/template/revolution/js/extensions/revolution.extension.kenburn.min.js",
        "resources/assets/template/revolution/js/extensions/revolution.extension.layeranimation.min.js",
        "resources/assets/template/revolution/js/extensions/revolution.extension.migration.min.js",
        "resources/assets/template/revolution/js/extensions/revolution.extension.navigation.min.js",
        "resources/assets/template/revolution/js/extensions/revolution.extension.parallax.min.js",
        "resources/assets/template/revolution/js/extensions/revolution.extension.slideanims.min.js",],
        'public/build/revolution/js/extensions/extensions-slider.js')

    .copy('resources/assets/template/fonts','public/build/fonts')
    .copy('resources/assets/template/images','public/build/images')
    .copy('resources/assets/template/revolution/assets','public/build/revolution/assets')
    .copy('resources/assets/template/revolution/css','public/build/revolution/css')
    .copy('resources/assets/template/revolution/fonts','public/build/revolution/fonts')
    .copy('resources/assets/template/Version','public/build/Version')
    .copy('resources/assets/template/youtu.be','public/build/youtu.be')

    // .js('resources/assets/js/app.js', 'public/build/js')



   // .sass('resources/assets/sass/app.scss', 'public/build/css')

    .copy('resources/assets/img','public/build/img')
