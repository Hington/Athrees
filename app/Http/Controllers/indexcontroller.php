<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function traitement()
    {
        $utilisateur = Utilisateur::create([
            'email'=>request('email')
        ]);
        return back();
    }

    public function formulaire()
    {
        return view ('index');
    }
}
