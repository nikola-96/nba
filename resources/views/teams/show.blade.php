@extends('master')
@section('title', 'Single Team Page')
@section('body')
    <h1 class="blog-post-title">{{ $team->name }}</h1>
        <p class="blog-post-meta" >The email is: {{ $team->email }}</p>
        <p class="blog-post-meta" >The adress is: {{ $team->address }}</p>
        <p class="blog-post-meta" >The city: {{ $team->city }}</p>
        <strong><p class="blog-post-meta" >Players:</p></strong>
        <ul>
            @foreach ($team->players as $player)
                <li><a href="/players/{{ $player->id }}">{{ $player->first_name }}</a></li>
            @endforeach
        </ul>

@endsection
