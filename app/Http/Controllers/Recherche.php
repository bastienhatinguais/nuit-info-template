<?php

namespace App\Http\Controllers;

use App\Models\Bateau;
use App\Models\Civil;
use App\Models\Marin;
use Illuminate\Http\Request;

class Recherche extends Controller
{
    function recherche($recherche)
    {
        $marins = Marin::where('nom', 'like', '%' . $recherche . '%')->orWhere('prenom', 'like', '%' . $recherche . '%')->get();
        $bateaux = Bateau::where('bateaus.nom', 'like', '%' . $recherche . '%')
            ->join('equipages', 'equipages.id', '=', 'bateaus.id')
            ->join('marins', 'marins.id', '=', 'equipages.id')
            ->join('marin_sauvetage_sauve', 'marin_sauvetage_sauve.id', '=', 'marins.id')
            ->join('sauvetages', 'sauvetages.id', '=', 'marin_sauvetage_sauve.id')
            ->get();
        $civils = Civil::where('nom', 'like', '%' . $recherche . '%')->orWhere('prenom', 'like', '%' . $recherche . '%')->get();

        return $marins->toJson();
    }
}
