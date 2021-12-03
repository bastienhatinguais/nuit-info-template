<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome', ['titre' => "Ceci est le titre"]);
});
*/

Route::get('/resultat-personne', function () {
    return view('pages/resultat-personne', ['prenom' => "untel", 'nom' => "Lemachin",
'nbSauvetage' => "LeNombreDeSauvetage", 'dateNaissance' => "LaDateDeNaissance",
'dateMort' => "LaDateDeMort", 'lieuNaissance' => "LeLieuDeNaissance",
'lieuMort' => "LeLieuDeMort", 'description' => "LaDescription",

'nomParent1' => "NomDuParent1", 'dateNaissance1' => "DateDeNaissance1", 'dateMort1' => "LaDateDeMort1",
'nomParent2' => "NomDuParent2", 'dateNaissance2' => "DateDeNaissance2", 'dateMort2' => "LaDateDeMort2",

'prenomEnfant1' => "PrenomDuEnfant1", 'dateNaissanceE1' => "DateDeNaissanceE1",
'prenomEnfant2' => "PrenomDuEnfant2", 'dateNaissanceE2' => "DateDeNaissanceE2", 

'dateMariage' => "LaDateDeMariage", 'prenomEpouse' => "LePrenomEpouse",

'carriere' => "DescriptifCarrière"]);
});

Route::get('/resultat-bateau', function () {
    return view('pages/resultat-bateau', ['nom' => "LeBateau", 'idBateau' => "LidBateau", 'typeBateau' => "leTypeDuBateau",
'origine'=> "Lorigine", 'dimension' => "LaDimension",
'station' => "NomStation", 'dateCreation' => "LaDateDeCreation", 'ville' => "LaVille",
'description' => "LaDescription"]);
});


Route::get('/home', function () {
    return view('pages/page-recherche');
});