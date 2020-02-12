
<ul class="nav py-3">
    <li>  
        <a class="nav-link ml-auto" href="/">Teams</a>
    </li>

    <li>  
        <a class="nav-link ml-auto" href="/news">News</a>
    </li>
    @if(Auth::check())
        <li class="nav-item  ml-auto">
            <a class="nav-link ml-auto" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                Logout
            </a>    
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf               
        </form>
    @endif
        </li>
</ul>

<style>
    .ul {
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
    }
</style>