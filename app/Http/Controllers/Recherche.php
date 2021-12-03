<?php

namespace App\Http\Controllers;

use App\Models\Bateau;
use App\Models\Civil;
use App\Models\Marin;
use App\Models\Sauvetage;
use Illuminate\Http\Request;

class Recherche extends Controller
{
    function recherche($recherche)
    {
        $marins = Marin::where('nom', 'like', '%' . $recherche . '%')
            ->orWhere('prenom', 'like', '%' . $recherche . '%');

        $bateaux = Sauvetage::join('marin_sauvetage_sauve', 'sauvetage_id', '=', 'sauvetages.id')
            ->join('marins', 'marins.id', '=', 'marin_id')
            ->join('equipages', 'marin_id', '=', 'marins.id')
            ->join('bateaus', 'bateaus.id', '=', 'bateau_id')
            ->where('bateaus.nom', 'like', '%' . $recherche . '%');

        $civils = Sauvetage::join('civil_sauvetage', 'sauvetage_id', '=', 'sauvetages.id')
            ->join('civils', 'civils.id', '=', 'civil_id')
            ->where('nom', 'like', '%' . $recherche . '%')
            ->orWhere('prenom', 'like', '%' . $recherche . '%')
            ->union($bateaux);
        return $marins->union($civils)->get()->toJson();
    }
}
