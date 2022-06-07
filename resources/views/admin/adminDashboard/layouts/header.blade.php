{{-- <header class="navbar  sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-light" href="#">Siakad</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item">
                <span class='text-white mx-3'>Logout</span>

            </button>
          </form>
          </li>
    </div>
  </header> --}}

  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center mt-5">

      <div class="logo me-auto">
        <h1><a href='/'>SIAKAD</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/biodata">{{auth()->user()->name}}</a></li>
          <li><form action="/logout" method="post">
            @csrf<button style="
            background:none;
            border:none;
            margin:0;
            padding: 10px 0 10px 30px;;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;"
            class="nav-link scrollto" action="/logout">Sign Out</button></form></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

  </header>
</body>
</html>
    
