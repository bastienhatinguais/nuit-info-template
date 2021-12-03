@extends('layouts.app')

@section('content')
<div id="app">
    <div class="grid grid-cols-1 justify-items-center">
        <!-- Barre de recherche -->
        <recherche></recherche>

        <!-- Resultats -->
        <div class="w-200 h-100 mt-5 divide-y-6 space-y-5 divide-blue-500 divide-solid bg-yellow-100">
            <resultat titre="Bateau pirate" type ="Bateau"></resultat>
            <resultat titre="COUCOU" type ="Bateau"></resultat>
            <resultat titre="Bateau pirate" type ="Bateau"></resultat>

        </div>
    </div>
</div>
@endsection