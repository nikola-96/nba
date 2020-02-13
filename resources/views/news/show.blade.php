@extends('master')
@section('title', 'Single News Page')
@section('body')
    <h1>{{ $news->title }}</h1>
        <p>{{ $news->content }}</p>
        <p>Author: {{ $news->user->name }} </p>
        @foreach ($news->teams as $team)
            <ul>
                <li>{{ $team->name }}</li>
            </ul>
        @endforeach
@endsection