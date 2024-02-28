<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        return view('admin.candidates.index', compact('candidates'));
    }

    
    public function create()
    {
        return view('admin.candidates.create');
    }
    public function show($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('admin.candidates.show', compact('candidate'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $candidates = Candidate::where('numero_candidat', $search)->get();
    
        return view('admin.candidates.index', ['candidates' => $candidates]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email',
            'photo' => 'nullable|image',
            'video' => 'nullable|file|mimes:mp4,avi,mov,wmv|max:500480',
            'options' => 'required|string',
            'filiere' => 'required|string',
            'categorie' => 'required|string',
            'facebook' => 'nullable|string',
            'numero' => 'required|string',
            'numero_candidat' => 'required|string',
            'description_de_personnalite' => 'nullable|string',
        ]);
    
        $photoPath = null;
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $photoPath = $request->file('photo')->store('photos', 'public'); // Stocke dans le dossier 'storage/app/public/photos'
        }
    
        $videoPath = null;
        if ($request->hasFile('video') && $request->file('video')->isValid()) {
            $videoPath = $request->file('video')->store('videos', 'public'); // Stocke dans le dossier 'storage/app/public/videos'
        }
    
        Candidate::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'email' => $request->email,
            'photo' => $photoPath,
            'video' => $videoPath,
            'options' => $request->options,
            'filiere' => $request->filiere,
            'categorie' => $request->categorie,
            'facebook' => $request->facebook,
            'numero' => $request->numero,
            'numero_candidat' => $request->numero_candidat,
            'description_de_personnalite' => $request->description_de_personnalite,
        ]);
    
        return redirect()->back()->with('success', 'Le candidat a été ajouté avec succès.');
    }
    

    public function edit($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('admin.candidates.edit', compact('candidate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email',
            'photo' => 'nullable|image',
            'video' => 'nullable|file|mimes:mp4,avi,mov,wmv|max:500480',
            'options' => 'required|string',
            'filiere' => 'required|string',
            'categorie' => 'required|string',
            'facebook' => 'nullable|string',
            'numero' => 'required|string',
            'numero_candidat' => 'required|string',
            'description_de_personnalite' => 'nullable|string',
        ]);

        $candidate = Candidate::findOrFail($id);

        $photoPath = $candidate->photo;
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            Storage::delete($photoPath); // Supprime l'ancienne photo
            $photoPath = $request->file('photo')->store('photos');
        }

        $videoPath = $candidate->video;
        if ($request->hasFile('video') && $request->file('video')->isValid()) {
            Storage::delete($videoPath); // Supprime l'ancienne vidéo
            $videoPath = $request->file('video')->store('videos');
        }

        $candidate->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'email' => $request->email,
            'photo' => $photoPath,
            'video' => $videoPath,
            'options' => $request->options,
            'filiere' => $request->filiere,
            'categorie' => $request->categorie,
            'facebook' => $request->facebook,
            'numero' => $request->numero,
            'numero_candidat' => $request->numero_candidat,
            'description_de_personnalite' => $request->description_de_personnalite,
        ]);

        return redirect()->route('admin.candidates.index')->with('success', 'Le candidat a été modifié avec succès.');
    }

    public function destroy($id)
    {
        $candidate = Candidate::findOrFail($id);
        Storage::delete($candidate->photo); // Supprime la photo
        Storage::delete($candidate->video); // Supprime la vidéo
        $candidate->delete();

        return redirect()->back()->with('success', 'Le candidat a été supprimé avec succès.');
    }
}
