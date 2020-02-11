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
        <div class="container"> 
            <p><br><strong>Comments:</strong><br></p>
                @if(count($team->comments)) {{-- ukoliko u bazi postoje komentari ispisace se --}}
                @foreach ($team->comments as $comment)
                    <p>{{$comment->content}}</p>
                @endforeach
            @endif
        </div>
@endsection
