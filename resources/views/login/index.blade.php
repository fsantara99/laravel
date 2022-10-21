@extends('layouts.main')

@section('container')
{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> --}}

    {{-- My Style --}}
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}

    {{-- <title>Web Infokom</title>
  </head>
  <body> --}}

   {{-- @include('partials.navbar') --}}

    {{-- <div class="container mt-4">
      @yield('container')
    </div> --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html> --}}

<section class="vh-100"  style="zoom:80%">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0"></span>
        </div>

        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 20rem;" action="/login" method="post" class="ms-5">
            @csrf

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login</h3>

            <div class="form-outline mb-1">
              <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" placeholder="Email / NIM" autofocus required value="{{ old('email') }}">
              <label class="form-label" for="email"></label>
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              @enderror
            </div>

            <div class="form-outline mb-1">
              <input type="password" name="password" class="form-control form-control-lg" id="password" required placeholder="Password / PIC">
              <label class="form-label" for="password" required></label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>

            <p>Don't have an account? <a href="/register" class="link-info text-decoration-none">Register here</a></p>
            {{-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p> --}}

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://brainpersonalities.com/wp-content/uploads/2021/12/baner-umm.jpeg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left; ">
      </div>
    </div>
  </div>
</section>

@endsection