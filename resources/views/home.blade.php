@extends('layouts.app')
@section('title', '')
@section('content')
<div class="container">
    @php
        $heure = date('H');
        $salutation = '';
        if ($heure < 12) {
            $salutation = 'Bonjour';
        } elseif ($heure < 18) {
            $salutation = 'Bon après-midi';
        } else {
            $salutation = 'Bonsoir';
        }
    @endphp
    @auth
        @if(auth()->user()->role == 'admin')
        <div class="row justify-content-center">
            <div class="col-md-6 bg-primary-subtle w-100 text-center d-flex  align-items-lg-center align-items-center justify-content-center mb-3" style="height: 50vh">
                <div class=" text-center">
                    <div class=" text-white">
                        <h1 class="">Bienvenue</h1>
                    </div>
                    <div class="">
                        <h1 class="" id="salutation">{{ $salutation }} , Mr {{ auth()->user()->name }}!</h1>
                    </div>
                    <div class="mt-2">
                        <h3 class="" id="salutation"><i class="fas fa-crown"></i> Administrateur </h3>
                    </div>
                    
                </div>
            </div>
        </div>
                        
        @elseif(auth()->user()->role == 'participant')
        <div class="row justify-content-center">
            <div class="col-md-6 bg-primary-subtle w-100 text-center d-flex  align-items-lg-center align-items-center justify-content-center mb-3" style="height: 50vh">
                <div class=" text-center">
                    <div class=" text-white">
                        <h1 class="">Bienvenue</h1>
                    </div>
                    <div class="mt-2">
                        <h1 class="" id="salutation">{{ $salutation }} , Mr {{ auth()->user()->name }}!</h1>
                    </div>
                    
                </div>
            </div>
        </div>        
                        
        @endif
    @endauth
    @auth
        @else
        <div class="row justify-content-center">
            <div class="col-md-6 bg-primary-subtle w-100 text-center d-flex  align-items-lg-center align-items-center justify-content-center mb-3" style="height: 50vh">
                <div class=" text-center">
                    
                    <div class="mt-2">
                        <h1 class="" id="salutation">{{ $salutation }}</h1>
                    </div>
                    <div class=" text-white">
                        <h1 class="">Bienvenue à <span style="color: darkorange; text-shadow: 2px 2px 2px rgba(0,0,0,0.5);">FORMATEC</span></h1>
                    </div>
                    
                </div>
            </div>
        </div>   
    @endauth
         
             
    <div class="row mb-5" style="height: 400px">
        <div class="col-12 col-md-6 col-sm-12">
            <h1 class="text-center text-justify">Étudiants de <span style="color: darkorange; text-shadow: 2px 2px 2px rgba(0,0,0,0.5);">FORMATEC</span></h1>
            <h2>Préparez-vous à une semaine de festivités ! La Semaine d'étudiant FORMATEC commence du  04 Mars au 09 Mars et cette année, nous avons un programme encore plus riche et plus varié que jamais</h2>
        </div>
        <div class="col-12 col-md-6 col-sm-12 ">
            <h1 style="text-decoration: orange" class="text-center">Programme</h1>
            <img class="w-100 h-50 card card-body" src="{{ asset('image/1dc63a87-2aba-40bb-a2d9-4bd74ba17042.jfif') }}" alt="programme du semain culturelle a formatec">
        </div>
    </div>
    
    
   <div class="row mt-5 mb-5">
        <div class="col-12 col-md-6 h-50 mt-5">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('image/596ee5fe-4785-4ca2-be78-0c45725db97f.jfif') }}" class="d-block w-100" alt="miss">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('image/32314601-5a09-4843-b5d8-bcc7ab423889.jfif') }}" class="d-block w-100" alt="miss">
                  </div>
                </div>
              </div>
        </div>
        <div class="col-12 col-md-6 mt-5">
        <h2>
            Le moment est venu de célébrer la beauté, le talent et la personnalité des étudiants de <span style="color: darkorange; text-shadow: 2px 2px 2px rgba(0,0,0,0.5);">FORMATEC</span>
            !

            L'élection de Miss et Mister FORMATEC est l'un des événements phares de la Semaine Culturelle. Cette année, elle se tiendra le [date] à [heure] dans l'amphithéâtre de l'école

        </h2>
        @auth
            
        @else
        <div class="d-flex justify-content-center">
            <p><i class="fas fa-hand-point-down"></i> </p>
            <a href="{{ route('login') }}" class="btn btn-primary p-4">
              <i class="fas fa-sign-in-alt"></i> Je me connecte et je vote !
            </a>
          </div>
        @endauth
      
       

   
    </div>
    
   </div>
    

</div>

@endsection
