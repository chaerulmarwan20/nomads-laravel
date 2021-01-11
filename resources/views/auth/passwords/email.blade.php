@extends('layouts.auth')

@section('title', 'NOMADS Reset Password')

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
            <form method="POST" action="{{ route('password.email') }}">
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
              <button type="submit" class="btn btn-login btn-block">
                {{ __('Send Password Reset Link') }}
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection