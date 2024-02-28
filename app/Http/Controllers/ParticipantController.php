<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    public function index()
    {
        return view('home');
    }
public function miss()
{
    $candidates = Candidate::where('categorie', 'Miss')->get();
    $votesCount = DB::table('votes')
        ->select('candidate_id', DB::raw('COUNT(*) as count'))
        ->groupBy('candidate_id')
        ->get();

    return view('pa.vote.miss', compact('candidates', 'votesCount'));
}
public function misters()
{
    $candidates = Candidate::where('categorie', 'Mister')->get();
    $votesCount = DB::table('votes')
        ->select('candidate_id', DB::raw('COUNT(*) as count'))
        ->groupBy('candidate_id')
        ->get();

    return view('pa.vote.misters', compact('candidates', 'votesCount'));
}
public function store(Request $request, $candidateId)
{
    // Vérifiez si l'utilisateur est connecté
    if (!auth()->check()) {
        return redirect()->back()->with('error', 'Vous devez être connecté pour voter.');
    }

    // Vérifiez si l'utilisateur a déjà voté pour ce candidat
    $existingVote = Vote::where('user_id', auth()->user()->id)
                        ->where('candidate_id', $candidateId)
                        ->first();

    if ($existingVote) {
        return redirect()->back()->with('error', 'Vous avez déjà voté pour ce candidat.');
    }

    // Créez un nouveau vote pour le candidat
    Vote::create([
        'user_id' => auth()->user()->id,
        'candidate_id' => $candidateId,
    ]);

    return redirect()->back()->with('success', 'Votre vote a été enregistré avec succès.');
}

}
