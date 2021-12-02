<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Recherche extends Controller
{
    function recherche($recherche){
        $marins = Marin:all();
        return $marins->toJson();
    }
}
