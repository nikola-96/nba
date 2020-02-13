@extends('master')
@section('Title', 'Create New News')
@section('body')
    <form action="/create/news" method="post">
        <p style="color:gray" >Add new news.</p>
        <div class="form-row col-md-5">
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
        </div>
        <div class="form-row col-md-8">
            <input type="text" class="form-control" name="content" id="content" placeholder="content">
        </div>
        <button type="submit" class="btn btn-secondary">Add News</button>
        @csrf
        @if(count($teams))
        <div>
            @foreach ($teams as $team)
            <ul><li>
                    <input type="checkbox" id="teams[]" name="teams[]" value="{{ $team->id }}">
                    {{ $team->name }}
                </li>
            </ul>
            @endforeach
        </div>
        @endif
    </form>
@endsection
