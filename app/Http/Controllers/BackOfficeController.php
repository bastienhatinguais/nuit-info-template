<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    function afficher(){
        $demandes = Bateau::with("valide", false)->get();
            return view('dashboard', ['demandes' => $demandes]);
    }
}
