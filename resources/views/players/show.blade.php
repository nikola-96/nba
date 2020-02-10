@extends('master')
@section('title', 'Single Player Page')
@section('body')
    <h1 class="blog-post-title">{{ $player->first_name }} {{ $player->last_name }}</h1>
    <p class="blog-post-meta" >The email is: {{ $player->email }}</p>
        <p class="blog-post-meta" >The team is: <a href="/teams/{{ $player->team->id }}">{{ $player->team->name }}</a></p>
@endsection