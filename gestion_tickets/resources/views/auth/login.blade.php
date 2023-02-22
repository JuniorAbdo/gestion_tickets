

@extends('layouts.app')
@section('content')
<section class="gradient-custom overflow-hidden">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 ">
            <div class=" mt-md-4 ">
            <h2 class="fw-bold mb-2 text-center text-uppercase">{{ __('Login') }}</h2>
            <form method="POST" action="{{ route('login') }}">
            @csrf
              
              <div class="form-outline form-white">
             
                <label class="form-label text-end"   for="email" >{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="form-outline form-white mb-4">
              
                <label class="form-label" for="password" >{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div> 
              <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                 <label class="form-check-label">{{__('Remember Me') }}</label> 
                </div>
                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Motpass oubliée?') }}
                                    </a>  @endif
              </div>
              <button type="submit" class="btn btn-outline-light btn-lg w-100">
                                    {{ __('Login') }}
                                </button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
