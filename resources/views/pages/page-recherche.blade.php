@extends('layouts.app')

@section('content')
<div id="app">
    <div class="grid grid-cols-1 justify-items-center mt-10">
        <!-- Barre de recherche -->
        <recherche></recherche>

        <!-- Resultats -->
        <div class="mt-8 grid grid-cols-2 gap-5 bg-blue-300 px-20 py-5">
            <resultat nom="Bateau" prenom= "pirate" type ="bateau"></resultat>
            <resultat nom="COUCOU" prenom= "pirate" type ="civil"></resultat>
            <resultat nom="Bateau" prenom= "pirate" type ="marin"></resultat>

        </div>
    </div>
</div>
@endsection