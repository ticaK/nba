
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('teams')}}">Teams</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{route('players')}}">Players</a>
                </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            @if(auth()->check())
              <span style="color:white">{{auth()->user()->name}}</span>
              <a class="btn btn-outline-primary" href="{{ route('logout') }}">Logout</a>
            @else
               <a class="btn btn-outline-primary" href="{{ route('show-register') }}">Sign up</a>

            @endif
          </form>
        </div>
</nav>