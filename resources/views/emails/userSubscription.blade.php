@component('mail::message')
# New User Subscription

A user has subscribed to the {{ $sub_type }} plan. Here are their details:

- Name: {{ $user->name }}
- Email: {{ $user->email }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent