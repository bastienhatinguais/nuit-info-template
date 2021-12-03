<?php

namespace App\Http\Controllers;

use App\Models\Bateau;

use Illuminate\Http\Request;

class Recherche extends Controller
{
    function recherche($recherche)
    {

        $bateaux = Bateau::where('nom', 'like', '%' . $recherche . '%')->get();

        return $bateaux->toJson();
    }
}
