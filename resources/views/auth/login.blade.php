@extends('layouts.auth')

@section('title', 'NOMADS Login')

@section('content')
<main class="login-container">
  <div class="container">
    <div class="row page-login d-flex align-items-center">
      <div class="section-left col-12 col-md-6">
        <h1 class="mb-4">We explore the new <br> life much better</h1>
        <img src="{{ url('frontend/images/login_images.png') }}" alt="" class="w-75 d-nonen d-sm-flex">
      </div>
      <div class="section-right col-12 col-md-4 mt-4 mt-md-0">
        <div class="card mb-5 mb-md-0">
          <div class="card-body">
            <div class="text-center">
              <img src="{{ url('frontend/images/logo.png') }}" alt="" class="w-50 mb-4">
            </div>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                  value="{{ old('email') }}" autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                  id="password" autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember"
                  {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Remember Me</label>
              </div>
              <button type="submit" class="btn btn-login btn-block">
                Sign In
              </button>
              @if (Route::has('password.request'))
              <p class="text-center mt-4">
                <a href="{{ route('password.request') }}">Saya lupa password</a>
              </p>
              @endif
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection