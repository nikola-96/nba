<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            @if(Auth::check())
                <div class="nav-link">You are now log in as: <strong>{{ auth()->user()->name}}</strong></div>
                    <a class="nav-link ml-auto" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        Logout
                    </a>    
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf               
                </form>
            @endif
        </nav>
    </div>
</div>
