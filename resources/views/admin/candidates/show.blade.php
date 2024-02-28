@extends('base')
@section('title',"detail du candidat")
@section('contenu')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex  align-items-center justify-items-center">
                    <h3 class=" ">{{ __('Détails du candidat') }} 
                     N°{{ $candidate->numero_candidat }}</h3>
                </div>

                <div class="card-body">
                    <h2 class="card-title">{{ $candidate->nom }} {{ $candidate->prenom }}</h2>
                    <p><strong>Nom :</strong> {{ $candidate->nom }}</p>
                    <p><strong>Prénom :</strong> {{ $candidate->prenom }}</p>
                    <p><strong>Âge :</strong> {{ $candidate->age }}</p>
                </div>
    
               
                    
                        

                        <div class="card-body">
                            
                            <h5 class="card-text">Agé de {{ $candidate->age }} ans , Fait la {{ $candidate->options }} / {{ $candidate->filiere }}</h5>

                            <h5>Email : <a href="mailto: {{ $candidate->email }}"> {{ $candidate->email }}</a></h5>
                             <h5>Description personnel : <p>{{ $candidate->description_de_personnalite }}</p></h5>       
                            <h5>Numero : <a href="tel:+228{{ $candidate->numero }}"> {{ $candidate->numero }}</a></h5>
                        </div>
                    
                    <div class="row">
                       
                        <div class="col-md-6 ">
                            <img class="card card-img" src="{{ asset('storage/'.$candidate->photo) }}" style="height:300px" class="card-img-top h-25" alt="{{ $candidate->nom }} {{ $candidate->prenom }}">
                            </div> 
                           <div class="col-md-6 ">
                            
                            <div class="card"><video src="{{ asset('storage/'.$candidate->video) }}" controls>Presentation</video></div>
                            </div> 
                       
                     </div>
             </div>
            </div>
        </div>
    </div>
</div>
@endsection
