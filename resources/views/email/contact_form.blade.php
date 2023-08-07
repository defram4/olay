@component('mail::message')

    <h4 style="font-size: large">You have new message from the website!</h4>

    @component('mail::button', ['url' => route('admin.inbox', app()->getLocale()) ])
        Go to admin panel
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
