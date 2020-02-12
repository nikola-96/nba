@component('mail::message')
# Introduction

Hello {{ $team->name }}, you have a new comment on your owen page.
Go and <a href="http://localhost:8000/teams/{{ $team->id }}">check.</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
