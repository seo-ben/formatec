@extends('base')
@section('title',"detail du candidat")
@section('contenu')
<div class="container">
<div class="row">
    @foreach($candidates as $candidate)
    <div class="col-md-4 mb-3 col-6">
        <div class="card border-0 position-relative ">
            <div class="d-flex justify-content-center items-align-center">
                <img src="{{ asset('storage/'.$candidate->photo) }}" class="card-img-top rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" alt="Photo du candidat">

            </div>
            <div class="vote-count position-absolute bottom-0 start-50 translate-middle badge bg-secondary">{{ $candidate->votes->count() }} votes</div>
            <div class="card-body text-center">
                <h5 class="card-title">{{ $candidate->nom }} {{ $candidate->prenom }} / {{ $candidate->categorie }}</h5>
                <p class="card-text">{{ $candidate->options }}</p>
            </div>
        </div>
    </div>
@endforeach

</div>


    
</div>


@endsection
