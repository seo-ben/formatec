<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\ParticipantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Middleware\Participant;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Affiche la page d'accueil de l'administration
//Route::get('/admin/index', [CandidateController::class, 'index'])->name('index');
Route::get('/', function () {
    return view('home');
});


Route::get('contact',[HommeController::class , 'contact'])->name('contact');
Route::get('cultural-week',[HommeController::class , 'cultural'])->name('cultural-week');
Route::get('events',[HommeController::class , 'events'])->name('events');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
      
Route::middleware(['auth', 'role:participant'])->group(function () {
    // Routes pour les participants
    // ...
    Route::get('/pa/vote/vote', [VoteController::class, 'index'])->name('vote.index')->middleware('auth');
    Route::get('/pa/vote/miss', [ParticipantController::class, 'miss'])->name('pa.vote.miss')->middleware('auth');
    Route::get('/pavote/misters', [ParticipantController::class, 'misters'])->name('pa.vote.misters')->middleware('auth');
    Route::post('/pa/vote/{candidateId}', [ParticipantController::class, 'store'])->name('pa.vote.store')->middleware('auth');
    Route::get('/home', [App\Http\Controllers\ParticipantController::class, 'index'])->name('home');

});

Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
   // Route::put('/admin/users/{user}/grant-admin', [HommeController::class, 'grantAdmin'])->name('admin.users.grantAdmin');

    
         // Routes admin ici
         Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
         // Affiche la liste des candidats
     Route::get('/admin/candidates/index', [CandidateController::class, 'index'])->name('admin.candidates.index');

     // Affiche le formulaire pour créer un nouveau candidat
     Route::get('/admin/candidates/create', [CandidateController::class, 'create'])->name('admin.candidates.create');

     Route::get('/admin/candidates/search', [CandidateController::class, 'search'])->name('admin.candidates.search');

     // Traite les données du formulaire de création de candidat et enregistre le nouveau candidat
     Route::post('/admin/candidates', [CandidateController::class, 'store'])->name('admin.candidates.store');

     //detail
     Route::get('/admin/candidates/{id}', [CandidateController::class, 'show'])->name('admin.candidates.show');

     // Affiche le formulaire de modification d'un candidat spécifique
     Route::get('/admin/candidates/{id}/edit', [CandidateController::class, 'edit'])->name('admin.candidates.edit');

     // Traite les données du formulaire de modification d'un candidat et met à jour les informations du candidat
     Route::put('/admin/candidates/{id}', [CandidateController::class, 'update'])->name('admin.candidates.update');

     // Supprime un candidat spécifique de la base de données
     Route::delete('/admin/candidates/{id}', [CandidateController::class, 'destroy'])->name('admin.candidates.destroy');

     Route::get('/admin/index',[HommeController::class , 'index'])->name('admin.index');

     //Route::get('/admin/vote',[HommeController::class , 'vote'])->name('admin.vote');

     Route::get('admin/vote/vote', [VoteController::class, 'index'])->name('vote.vote')->middleware('auth');

     Route::get('admin/vote/miss', [VoteController::class, 'miss'])->name('vote.miss')->middleware('auth');

     Route::get('admin/vote/misters', [VoteController::class, 'misters'])->name('vote.misters')->middleware('auth');

     Route::post('admin/vote/{candidateId}', [VoteController::class, 'store'])->name('vote.store')->middleware('auth');
 

    
});