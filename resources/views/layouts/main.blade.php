
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{asset('front/headers.css')}}" rel="stylesheet">

    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>

    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="headers.css" rel="stylesheet">


@auth

@if (Auth::user()->role_id == 2)

<!-- UNTUK ADMIN -->
<header class="bg-primary text-dark">
<div class="container ">

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">

      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="fw-bold nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

      <h5 class="fw-bold">Amazing E-book store</h5>
      </ul>

      <div class="col-md-3 text-end">
       <a href="logout"><button type="button" class="fw-bold btn btn-warning me-2">Logout</button></a>
      </div>
    </header>
  </div>
</header>


<header class="bg-warning text-dark mb-3">
<div class="container ">
<ul class="nav col-12 col-lg-auto ms-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/home_admin" class="nav-link px-2 text-dark">Home</a></li>
          <li><a href="/cart" class="nav-link px-2 text-dark">Cart</a></li>
          <li><a href="/profile/{{auth()->user()->id}}" class="nav-link px-2 text-dark">Profile</a></li>
          <li><a href="/acc_maintain" class="nav-link px-2 text-dark">Account Maintance</a></li>
        </ul>
  </div>
</header>


@else
<!-- UNTUK USER -->
<header class="bg-primary text-dark">
<div class="container ">

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">

      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="fw-bold nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

      <h5 class="fw-bold">Amazing E-book store</h5>
      </ul>

      <div class="col-md-3 text-end">
       <a href="logout"><button type="button" class="fw-bold btn btn-warning me-2">Logout</button></a>
      </div>
    </header>
  </div>
</header>

<header class="bg-warning text-dark mb-3">
<div class="container ">

<ul class="nav col-12 col-lg-auto ms-auto mb-2 justify-content-center mb-md-0 mb-3">
          <li><a href="/home_user" class="nav-link px-2 text-dark">Home</a></li>
          <li><a href="/cart" class="nav-link px-2 text-dark">Cart</a></li>
          <li><a href="/profile/{{auth()->user()->id}}" class="nav-link px-2 text-dark">Profile</a></li>
        </ul>
  </div>
</header>
@endif


@else

<!-- UNTUK GUEST -->
<header class="bg-primary text-dark">
<div class="container ">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="fw-bold nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

      <h5 class="fw-bold">Amazing E-book store</h5>
      </ul>

      <div class="col-md-3 text-end">
       <a href="signup"><button type="button" class="fw-bold btn btn-warning me-2">Sign-up</button></a>
        <a href="login"><button type="button" class="fw-bold btn btn-warning me-2">Login</button></a>
      </div>
    </header>
  </div>

</header>
@endauth


<div class="container">
    @yield('content')
</div>

    <footer class="p-2 bg-primary text-dark">

      <div class="container">
    <div class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <span class="fw-bold">&copy; Amazing E-book 2022</span>
    </div>

    </div>
</footer>
</main>




