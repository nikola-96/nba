@extends('master')
@section('Title', 'Team News')
@section('body')
    <h1>{{ $team->name }} news</h1>
    @foreach ($news as $singleNews)
        <div>
            <h2>{{ $singleNews->title }}</h2>
            <p>{{ $singleNews->content }}</p>
        </div>
    @endforeach
    <nav>
        <a href="{{ $news->previousPageUrl() }}">Previous</a>
        <a href="{{ $news->nextPageUrl() }}">Next</a>
    </nav>
@endsection