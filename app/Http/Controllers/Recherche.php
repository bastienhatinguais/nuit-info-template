<?php

namespace App\Http\Controllers;

use App\Models\Marin;
use Illuminate\Http\Request;

class Recherche extends Controller
{
    function recherche($recherche)
    {
        $marins = Marin::all();
        $marins = Marin::where('nom', 'like', '%' . $recherche . '%')->get();
        return $marins->toJson();
    }
}
