@component('mail::message')
<h1>Hello {{$user->name}}</h1>
Pleasse verified your registration by click on this link. Thank you!
<a href="http://localhost:8000/verified/{{ $user->id }}">Verification link</a>
 
Thanks,<br>
{{ config('app.name') }}
@endcomponent
