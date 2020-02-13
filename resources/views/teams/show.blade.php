@extends('master')
@section('title', 'Single Team Page')
@section('body')
    <h1 class="blog-post-title">{{ $team->name }}</h1>
        <p class="blog-post-meta" >The email is: {{ $team->email }}</p>
        <p class="blog-post-meta" >The adress is: {{ $team->address }}</p>
        <p class="blog-post-meta" >The city: {{ $team->city }}</p>
        <p class="blog-post-meta" >Show all <a href="/news/team/{{ $team->id }}">news</a></p>
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
        <form action="/teams/{{$team->id }}" method="post">
            @csrf
            <p style="color:gray" >Add new comment.</p>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" id="content" name="content" placeholder="Your comment">
                    </div>
                </div>
                    <button type="submit" class="btn btn-secondary">Add Comment</button>
        </form>
@endsection
