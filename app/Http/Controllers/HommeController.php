<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;

class HommeController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all(); // Récupérer tous les candidats
        return view('admin.index', compact('candidates')); // Passer les candidats à la vue
    }
    public function vote(){
        return view('admin.vote');
    }
    public function cultural(){
        return view('cultural-week');
    }
    public function contact(){
        return view('contact');
    }
    public function events(){
        return view('events');
    }
 
}
