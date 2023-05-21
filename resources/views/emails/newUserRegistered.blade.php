@component('mail::message')
# New User Registered

A new user has registered on the site. Here are their details:

- Name: {{ $user->name }}
- Email: {{ $user->email }}

Thanks,<br>
MaestroIA
@endcomponent