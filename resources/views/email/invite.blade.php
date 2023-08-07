@component('mail::message')
# Invitation email

This is a automatic invitation email for login on admin panel for web application {{ config('app.name') }}.

@component('mail::button', ['url' => $url])
        Enter
@endcomponent

 Thanks,<br>
    {{ config('app.name') }}
@endcomponent
