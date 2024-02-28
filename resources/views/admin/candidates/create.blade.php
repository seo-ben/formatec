@extends('base')
@section('title','Ajouter un candidat')
@section('contenu')
<div class="container mt-2">
    <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter un candidat') }}</div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class=" bg-success"></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.candidates.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mt-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" placeholder="nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" placeholder="prenom" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Âge') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" placeholder="Âge" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required min="17" max="30">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" placeholder="photo du candidat" class="form-control-file form-control @error('photo') is-invalid @enderror" name="photo" accept="image/*">

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Vidéo de présentation') }}</label>

                            <div class="col-md-6">
                                <input id="video" type="file" placeholder="Vidéo de présentation" class="form-control-file form-control @error('video') is-invalid @enderror" name="video" accept="video/*">

                                @error('video')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="options" class="col-md-4 col-form-label text-md-right">{{ __('Options') }}</label>

                            <div class="col-md-6">
                                <input id="options" type="text" placeholder="Lp? du candidat" class="form-control @error('options') is-invalid @enderror" name="options" value="{{ old('options') }}" required>

                                @error('options')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="filiere" class="col-md-4 col-form-label text-md-right">{{ __('Filière') }}</label>

                            <div class="col-md-6">
                                <input id="filiere" type="text" placeholder="Filière du candidat"  class="form-control @error('filiere') is-invalid @enderror" name="filiere" value="{{ old('filiere') }}" required>

                                @error('filiere')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="categorie" class="col-md-4 col-form-label text-md-right">{{ __('Catégorie') }}</label>
                        
                            <div class="col-md-6">
                                <select id="categorie" class="form-control @error('categorie') is-invalid @enderror" name="categorie" required>
                                    <option disabled selected>Categorie</option>
                                    <option value="Miss" {{ old('categorie') == 'Miss' ? 'selected' : '' }}>Miss</option>
                                    <option value="Mister" {{ old('categorie') == 'Mister' ? 'selected' : '' }}>Mister</option>
                                </select>
                        
                                @error('categorie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Numero de telephone') }}</label>
                        
                            <div class="col-md-6">
                                
                                <input id="lien" type="text" placeholder="90000001" class="form-control @error('Numero') is-invalid @enderror" name="numero" value="{{ old('facebook') }}" required>

                                @error('Numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="lien" class="col-md-4 col-form-label text-md-right">{{ __('lien de facebook ou autre') }}</label>
                        
                            <div class="col-md-6">
                               
                                <input id="lien" type="tel" placeholder="http/www" class="form-control @error('lien facebook') is-invalid @enderror" name="facebook" value="{{ old('numero') }}" >

                                @error('lien facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="numero_candidat" class="col-md-4 col-form-label text-md-right">{{ __('Numéro Candidat') }}</label>

                            <div class="col-md-6">
                                <input id="numero_candidat" type="text" placeholder="N°--" class="form-control @error('numero_candidat') is-invalid @enderror" name="numero_candidat" value="{{ old('numero_candidat') }}" required>

                                @error('numero_candidat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="description_de_personnalite" class="col-md-4 col-form-label text-md-right">{{ __('Description de personnalité') }}</label>

                            <div class="col-md-6">
                                <textarea id="description_de_personnalite" placeholder="Description de personnalité" class="form-control @error('description_de_personnalite') is-invalid @enderror" name="description_de_personnalite" >{{ old('description_de_personnalite') }}</textarea>

                                @error('description_de_personnalite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3 mb-0">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="btn btn-primary w-100 float-end">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
