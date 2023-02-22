
@extends('layouts.app')
@section('content')
<section class="gradient-custom overflow-hidden">
  <div class="container py-1">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 ">
            <div class=" mt-md-4 ">
            <h2 class="fw-bold mb-2 text-center text-uppercase">{{ __('Register') }}</h2>
            <form method="POST" action="{{ route('register') }}">
            @csrf
              <!-- <p class="text-white-50 mb-5">Please enter your login and password!</p> -->
              <div class="form-outline form-white">
             
                <label class="form-label text-end"   for="name" >{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="form-outline form-white mb-4">
              
                <label class="form-label" for="email" >{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div> 
              <div class="form-outline form-white mb-4">
              
                <label class="form-label" for="email" >{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div> 
              <div class="form-outline form-white mb-4">
              
                <label class="form-label" for="password-confirm" >{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
              <button type="submit" class="btn btn-outline-light btn-lg w-100">
              {{ __('Register') }}
                                </button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
