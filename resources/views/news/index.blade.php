@extends('master')
@section('Title', 'News')
@section('body')
    @if(Session::has('message'))
        <p class="alert">{{ Session::get('message') }}</p>
    @endif
    @foreach ($news as $singNews)

        <a href="/news/{{ $singNews->id }}"><h1>{{ $singNews->title }}</h1></a>
            <p>Author: {{ $singNews->user->name }}</p>  
        
    @endforeach
        <nav>
            <a href="{{ $news->previousPageUrl() }}">Previous</a>
            <a href="{{ $news->nextPageUrl() }}">Next</a>
        </nav>
@endsection
