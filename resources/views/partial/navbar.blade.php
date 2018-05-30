
<nav class="navbar navbar-inline navbar-light bg-light">
 <div class="row">
    <a class="navbar-brand">Myapp</a>
        @if(!Auth::check())
          <a class="nav-link ml-auto" href="/login">Login</a>
          <a class="nav-link ml-auto" href="/register">Register</a>
        @else
        <ul class="navbar-nav mr-right">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
            {{Auth::user()->first_name}} {{Auth::user()->last_name}}
            </a>
            <div class="dropdown-menu" aria-labelled-by="navbarDropdown">
              <a class="dropdown-item"   href="{{ route('logout') }}">Logout<a>
            </div>
          </li>
        </ul>
        @endif
</div>
</nav>

