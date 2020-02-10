@extends('master')
@section('Title', 'Teams')
@section('body')
    @foreach ($teams as $team)
        <a href="/teams/{{ $team->id }}"> <h1 class="blog-post-title">{{ $team->name }}</h1></a>
    @endforeach
@endsection