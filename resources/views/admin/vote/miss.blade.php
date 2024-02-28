@extends('base')

@section('title', 'miss')

@section('contenu')
<div class=" mt-2">
    <div class="row mt-3 justify-content-center">
        <div class="col-md-10">
            <div class="row">
                @foreach($candidates as $candidate)
                <div class="col-md-4 mb-3 col-sm-6">
                    <div class="card">
                        <h3 class=" text-end card-header">N° {{ $candidate->numero_candidat }}</h3>
                        <div class="d-flex justify-content-center items-align-center" style="height: 535px; overflow: hidden;">
                            <img src="{{ asset('storage/'.$candidate->photo) }}" class="card-img-t" style="width: 100%; object-fit: cover;" alt="Photo du candidat">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">{{ $candidate->nom }} {{ $candidate->prenom }}</h2>
                            <h5 class="card-text">Agé de {{ $candidate->age }} ans, Fait la {{ $candidate->options }} / {{ $candidate->filiere }}</h5>
                            <h5>Email : <a href="mailto:{{ $candidate->email }}">{{ $candidate->email }}</a></h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('pa.vote.store', $candidate->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary w-100 mt-3">Voter</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary mt-3 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        info
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal-dialog modal-dialog-scrollable" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Information de {{ $candidate->nom }} {{ $candidate->prenom }}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5><a href="mailto:{{ $candidate->email }}">{{ $candidate->email }}</a></h5>
                                                    <p>{{ $candidate->description_de_personnalite }}</p>
                                                    <div class="card">
                                                        <video src="{{ asset('storage/'.$candidate->video) }}" controls>Presentation</video>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
