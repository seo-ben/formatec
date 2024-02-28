@extends('base')
@section('title', 'les candidats')
@section('contenu')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class=" card mt-0 mb-2 card-header text-dark text-center fw-bold">{{ __('Liste des candidats') }}</div>

                <div class=" table-responsive ">
                    <form action="{{ route('admin.candidates.search') }}" method="GET" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Rechercher par numéro de candidat">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
                            </div>
                            <a href="{{ route('admin.candidates.index') }}" class="btn btn-primary">
                                <i class="fas fa-sync-alt"></i> 
                            </a>
                        </div>
                    </form>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Categorie</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($candidates as $candidate)
                            <tr>
                                <td>{{ $candidate->numero_candidat }}</td>
                                <td>{{ $candidate->nom }}</td>
                                <td>{{ $candidate->prenom }}</td>
                                <td>{{ $candidate->categorie }}</td>
                                <td>
                                    <a href="{{ route('admin.candidates.show', $candidate->id) }}" class="btn btn-info">Détails</a>
                                    <a href="{{ route('admin.candidates.edit', $candidate->id) }}" class="btn btn-primary">Modifier</a>
                                    <form action="{{ route('admin.candidates.destroy', $candidate->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
