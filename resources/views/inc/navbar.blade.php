<div class="navbar">
    @guest
    <a style="margin-left: 0%;" href="/"><img src="storage/register-file/house.png" height=30px width=30px alt="Home"></a>
    @else
    <a style="margin-left: 0%;" href="/"><img src="storage/register-file/house.png" height=30px width=30px alt="Home"></a>
    <div class="dropdown">
    <button class="dropbtn"> <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a> 
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Log out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    </div> 
    @endif
</div>