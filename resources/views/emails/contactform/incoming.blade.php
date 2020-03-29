@component('mail::message')
    # Wiadomość

<div class="body-message">
    {{$data->body}}
</div>
    ![alt text](/build/images/logo-img.png "Title")

@component('mail::panel')
    ![alt text](/build/images/logo-img.png "Title")
Imię:    **{{ $data->name }}**<br>
Email:   [**{{ $data->email }}**](mailto:{{$data->email}})<br>
Telefon: **{{ $data->phone }}**<br>
Język:   **{{$data->lang}}**<br>
IP:      **{{$data->ip}}**<br>
@component('mail::button', ['url' => 'tel:+'.$data->phone, 'color' => 'site'])
    Oddzwonić
@endcomponent

@endcomponent
@endcomponent
