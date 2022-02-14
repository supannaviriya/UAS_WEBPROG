@extends('layouts.main')

@section('content')

<div class="p-3 mt-4 mb-4 text-white rounded bg-light">

<div class="row justify-content-center">

  <div class="col-md-4">


    @if(session()->has('error'))

    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
      {{session('error')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

    <main class="form-signin">

    <div class="container">
      <h1 class="h3 mb-3 fw-normal text-center mt-3 text-dark">Login</h1>
    <form action="/login" method="post">
    @csrf

      <div class="col-sm-12 mt-2 text-dark">
        <label for="email">Email address</label>

        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value={{Cookie::get('email') !== null ? Cookie::get('email') : "" }}>
      @error('email')
      <div class="invalid-feedback">{{$message}}</div>
      @enderror
      </div>

      <div class="col-sm-12 mt-2 text-dark">

        <label for="password">Password</label>

        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
      @error('password')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
      </div>


      <button class="w-100 btn btn-lg btn-warning mt-4 fw-bold" type="submit">Submit</button>

      <small class="d-block text-center mt-3"><a class="text-center mt-3 fs-6" href="/signup">Dont have an account? click here to Sign Up</a></small>

    </form>



    </main>

  </div>
</div>
</div>

@endsection
