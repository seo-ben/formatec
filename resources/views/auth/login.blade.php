@extends('layouts.app')
@section('title','connexion')
@section('content')

<section class="vh-100" style="background-color: #eb;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-0 p-lg-5 text-black">
  
                    <form method="POST" action="{{ route('login') }}">
                        @csrf   
                    <div class="d-flex align-items-center justify-content-center mb-3 pb-1">

                      <span class="h1 fw-bold mb-0  " ><img class="" src="{{ asset('assets/librairie/image/formatac.jfif') }}" alt="logo" ></span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3 text-center fw-bold fs-3" style="letter-spacing: 1px;">{{ __('Connecter vous à votre compte') }}</h5>

                        

                            <div class="form-outline mb-4">
                                <input id="email" type="email"  class="form-control border-dark form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email" class="col-md-4 fw-bold col-form-label text-md-start text-dark text-font-2">{{ __('Address Email ') }}</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
  
                        <div class="form-outline mb-4">
                                              
                            <input id="password" type="password" class="form-control border-dark form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <label for="password" class="col-md-4 fw-bold col-form-label text-md-start text-dark">{{ __('Mots de pass') }}</label>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                    
  
                        <div class="row mb-0">
                            <div class="col-md-12 offset-md-0 d-flex">
                                <button type="submit" class="btn btn-primary w-50 fw-bold ">
                                    {{ __('Connexion') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link fw-bold" href="{{ route('password.request') }}">
                                        {{ __('Mots de pass oublier?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
