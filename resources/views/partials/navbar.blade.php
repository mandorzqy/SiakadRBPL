<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title==="Dashboard") ? 'active': '' }}" aria-current="page" href="/dashboard">Dashboard</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                  Logout
                </button>
              </form>
              </li>
            
          </ul>
        </li>
            @else

              <li class="nav-item">
                <a class="nav-link {{ ($title==="Login")? 'active':'' }}" href="/login">Login</a>
              </li>
              @endauth
        </ul>

        
      </div>
    </div>
  </nav>
  