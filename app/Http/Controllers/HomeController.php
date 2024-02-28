<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function login()
    {
        return view('home');
    }
   /* public function grantAdmin(User $user)
    {
        // Vérifiez si l'utilisateur connecté est un administrateur
        if (auth()->user()->isAdmin()) {
            // Mettez à jour le rôle de l'utilisateur en administrateur
            $user->update(['role' => 'admin']);

            return redirect()->back()->with('success', 'Le rôle de l\'utilisateur a été mis à jour avec succès.');
        }

        return redirect()->back()->with('error', 'Vous n\'avez pas les autorisations nécessaires pour effectuer cette action.');
    }

    */
}
