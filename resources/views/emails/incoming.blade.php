@component('mail::message')
    # {{$data->subject}}

<div class="body-message">
    {{$data->body}}
</div>


@component('mail::panel')

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
