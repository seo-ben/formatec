@extends('base')
@section('title','Dashboard')
@section('contenu')
<div class="container">
    <h1 class="mt-5 mb-4">Tableau de bord administratif</h1>
    <div class="row">
        <div class="col-3 card card-body " style="height: 335px;">

        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-md-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Vue d'ensemble</h5>
                            <p class="card-text">Afficher les statistiques et les informations importantes.</p>
                            <a href="#" class="btn btn-primary">Voir détails</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Gérer les candidats</h5>
                            <p class="card-text">Ajouter, modifier ou supprimer des candidats.</p>
                            <a href="{{ route('admin.candidates.index') }}" class="btn btn-primary">Gérer les candidats</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Gérer les utilisateurs</h5>
                            <p class="card-text">Ajouter, modifier ou supprimer des utilisateurs.</p>
                            <a href="#" class="btn btn-primary">Gérer les utilisateurs</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Gestion des votes</h5>
                            <p class="card-text">Voir et gérer les votes des utilisateurs.</p>
                            <a href="{{ route('admin.vote') }}" class="btn btn-primary">Gestion des votes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Paramètres du site</h5>
                            <p class="card-text">Modifier les paramètres du site.</p>
                            <a href="#" class="btn btn-primary">Paramètres</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
