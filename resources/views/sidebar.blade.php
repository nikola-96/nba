<div class="sidebar-module">
    <h4>Teams</h4>
    <ol class="list-unstyled">
        @foreach ($teams as $team)
        <li><a href="/news/team/{{ $team->id }}">{{$team->name}}</a></li>
        @endforeach
    </ol>
</div>

    
