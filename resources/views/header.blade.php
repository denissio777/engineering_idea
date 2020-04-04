<header>
    <div id="navbarHeader">
    <nav class="navbar navbar-light" style="background-color: #D3D3D3;">
        @if(Request::is('home'))
<ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="{{URL::to('profile/'.Auth::id() . '/edit')}}">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Home</a>
        </li>
</ul>
        @else
        <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('home')}}">Home</a>
                </li>
        </ul>
        @endif
    </nav>
    </div>
</header>
