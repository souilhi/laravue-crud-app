@component('mail::message')
# Introduction
Welcom to our Site

The body of your message.

@component('mail::button', ['url' => ''])
Welcome
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
