@component('mail::message')
# Email verification

Good day!

Please verify your email

@component('mail::button', ['url' => ''])
Verify email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
