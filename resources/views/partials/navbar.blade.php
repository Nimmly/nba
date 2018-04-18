<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            @if( Auth()->check())
            <a class="nav-link" href="/">Teams <span class="sr-only">(current)</span></a>
            @endif
          </li>
          <li class="nav-item">
          @if(! Auth()->check())
            <a class="nav-link active" href="/login">Login</a>
          @endif
          </li>
          <li class="nav-item">
          @if(! Auth()->check())
            <a class="nav-link active" href="/register">Register</a>
          @endif
          </li>
          @if(Auth()->check())
          <li class="nav-item">
          <a class="nav-link active" href="#">{{ Auth()->user()->name }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/logout">Logout</a>
          </li>
          @endif
          
        </ul>
        
      </div>
    </nav>

