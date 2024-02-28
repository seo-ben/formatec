@extends('layouts.app')
@section('title','inscription')
@section('content')

<section class="vh-100 mb-5" style="background-color: #eb;">
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-0 p-lg-5 text-black">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="d-flex align-items-center justify-content-center mb-3 pb-1">
                                        <span class="h1 fw-bold mb-0 "><img
                                                src="{{ asset('assets/librairie/image/formatac.jfif') }}" alt="logo"></span>
                                    </div>
                                    <h5 class="fw-normal mb-3 pb-3 text-center fw-bold fs-5"
                                        style="letter-spacing: 1px; ">{{ __('Inscrivez-vous') }}</h5>
                                    <div class="mb-3 row">
                                            <input id="name" type="text"
                                                class="form-control border-dark @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                <label for="name" class="col-md-4 col-form-label text-md-start text-dark fw-bold  fs-0">{{ __('Votre Nom') }}</label>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        
                                    </div>
                                    <div class="mb-3 row">
                                        <input id="prenom" type="text"
                                                class="form-control border-dark @error('prenom') is-invalid @enderror" name="prenom"
                                                value="{{ old('prenom') }}" required autocomplete="name" autofocus>
                                                <label for="prenom" class="col-md-4 col-form-label text-md-start text-dark fw-bold  fs-0">{{ __(' Votre Prenom') }}</label>
                                            @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                      
                                    </div>
                                    <div class="mb-3 row">
                                        
                                            <input id="email" type="email"
                                                class="form-control border-dark @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
                                                <label for="email" class="col-md-4 col-form-label text-md-start text-dark fw-bold  fs-0">{{ __('Adress Email') }}</label>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                       
                                    </div>
                                    <div class="mb-3 row">
                                       
                                            <input id="password" type="password"
                                                class="form-control border-dark @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password">
                                                <label for="password"
                                                class="col-md-4 col-form-label text-md-start text-dark fw-bold  fs-0">{{ __('Mots de pass') }}</label>
                                            
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                       
                                    </div>
                                    <div class="mb-3 row">
                                            <input id="password-confirm" type="password" class="form-control border-dark" name="password_confirmation" required autocomplete="new-password">
                                                <label for="password-confirm"class="col-md-4 col-form-label text-md-start text-dark fw-bold  ">{{ __('Confirmé le mots de pass') }}</label>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-12 offset-md-0">
                                            <button type="submit" class="btn btn-primary w-100">
                                                {{ __('S\'inscrire') }}
                                            </button>
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
