<div class="row">
<div class="col-lg-1 col-centered">My app</div>
</div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    @if (Auth::check())
                        <a class="navbar-brand"> {{Auth::user()->first_name}} {{Auth::user()->last_name}}</a>
                        <a class="nav-link ml-auto" href="{{ route('logout') }}">Logout</a>
                        @endif
                        @if(!Auth::check())
                        <a class="nav-link ml-auto" href="/login">Login</a>
                        <a class="nav-link ml-auto" href="/register">Register</a>
                        @endif 
  
  </div>
</nav>


 
