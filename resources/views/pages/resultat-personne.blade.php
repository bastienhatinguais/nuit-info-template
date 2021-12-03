@extends('layouts.app')

@section('content')
<div id="app" class="bg-gradient-to-l from-blue-200">
    <div class="container px-3">
        <p style="text-align: left;"></p>
        <h1 class="font-bold text-3xl" style="text-align: center;">{{$nom}} {{$prenom}}</h1>

        <br />
        <div class=flex>
            <p>
                <a href="/home">
                    <img src="/image/fleche.png" width="40" height="40">
                </a>
            </p>
        </div>
        <!--
        <div class="flex space-x-4">
            <div class="flex-1 bg-blue-500 shadow-lg rounded-md ">1</div>
            <div class="flex-1">2</div>
        </div>
-->
        <br />

        <div class="flex space-x-4">
            <div class="flex-1 relative ...">
                <div class="float-left p-10">
                    <div class="inset-y-0 left-10 box content flex-1 bg-gradient-to-b from-green-400 to-blue-500 shadow-lg rounded-md px-10 py-5">
                        <img src=\image\bateau3.png height="300" width="300" class=mx-auto>
                        <ul class="list-disc px-10 py-5 text-white">

                            <li>Date de naissance : {{$dateNaissance}}</li>
                            <li>Lieu de naissance : {{$lieuNaissance}}</li>
                            <li>Date de mort : {{$dateMort}}</li>
                            <li>Lieu de mort : {{$lieuMort}}</li>

                            <br />
                            <li>Nombre de sauvetage : {{$nbSauvetage}}</li>
                        </ul>
                    </div>
                </div>
                <p><br /><br />
                    Description :
                    <br /><br />
                    {{$description}}
                    ;,gnlijerg tjgkdrugh eriugh iuhgrukgh riughiudgh iurgiruh gdfuhg iurhg urdhgu hgis< kurtgudgh uhgiurzt gir guiqrhgiurehgi sfurh iurgurhgud hiugdhfgu dhg dughri ugh dyug isuuty ujghfjdgh fjhg sfjgh fdkuhgdfhgdfugh idrughdfiugh kughsrugh dufgh rud hfjhugh fjg hjgh ufhg jhd gkudhgjffh kudtheriutghu sghklusrg rh gk ghkudfjgh fu ghfkghd ughdfgshg nlijerg tjgkdrugh eriugh iuhgrukgh riugh iudgh iurgiruh gdfuhg iurhg urdhgu hgis< kurtgudgh uhgiurzt gir guiqrhgiur ehgi sfurh iurgurhgud hiugdhfgu dhg dughriuhgrdugh dyug isuuty ujghfjdgh fj jgh fdkuhgdfhgdfugh idrughdfiugh kughsrugh dufg dufgh rud hfjhugh fjg hjgh ufhg jhd gkudhgjffh kudtheriutghu sghklusrg rh gk ghkudfjgh fu ghfkghd ughdfgshg nlijerg tjgkdrugh eriugh iuhgrukgh riugh iudgh iurgiruh gdfuhg iurhg urdhgu hgis< kurtgudgh uhgiurzt gir guiqrhgiur ehgi sfurh iurgurhgud hiugdhfgu dhg dughriuhgrdugh dyug isuuty ujghfjdgh fj jgh fdkuhgdfhgdfugh idrughdfiugh kughsrugh dufgh rud hfjhugh fjg hjgh ufhg jhd gkudhgjffh kudtheriutghu sghklusrg rhgk ghkudfjgh fu ghfkghd ug nlijerg rugh eriugh iuhgrukgh riughiudgh iurgiruh gdfuhg iurhg urdhgu hgis< kurtgu dgh uhgiurzt gir guiqrhgiurehgi sfurh iurgurhgud hiugdhfgu dhg dughriuhgrdu gh dyug isuuty ujghfjdgh fjhg sfjgh fdkuhgdfhgdfugh idrughdfiugh kughsrugh dufgh rud hfjhugh fjg hjgh rud hfjhugh fjg hjgh ufhg jhd gkudhgjffh kudtheriutghu sghklusrg rhgk ghkudfjgh fu ghfkghd ug nlijerg rugh eriugh iuhgrukgh riughiudgh iurgiruh gdfuhg iurhg urdhgu hgis< kurtgu dgh uhgiurzt gir guiqrhgiurehgi sfurh iurgurhgud hiugdhfgu dhg dughriuhgrdu gh dyug isuuty ujghfjdgh fjhg sfjgh fdkuhgdfhgdfugh idrughdfiugh kughsrugh dufgh rud hfjhugh fjg hjgh ufhg jhd gkudhgjffh kudtheriutghu sghklusrg rhgk ghkudfjgh fu ghfkghd ug</p>
            </div>

        </div>

        <br />
        <br />

        <div class="flex space-x-4">
            <div class="flex-1 relative ...">
                <div class="float-right p-10">
                    <div class="inset-y-0 left-10 box content text-white flex-1 bg-gradient-to-b from-green-400 to-blue-500 shadow-lg rounded-md px-10 py-5">
                        <img src=\image\bateau3.png height="300" width="300" class=mx-auto>
                        Famille :
                        
                        <ul class="list-disc px-10 py-5 text-white">

                            <li>Nom des parents : {{$nomParent1}}, {{$nomParent2}}</li>
                            <li>Dates de naissance : {{$dateNaissance1}}, {{$dateNaissance2}}</li>
                            <li>Dates de mort : {{$dateMort1}}, {{$dateMort2}}</li>

                            <br />
                            <li>Prenom des enfants : {{$prenomEnfant1}}, {{$prenomEnfant2}}</li>
                            <li>Dates de naissance : {{$dateNaissanceE1}}, {{$dateNaissanceE2}}</li>

                            <br />
                            <li>Prenom de l'époux.se : {{$prenomEpouse}}</li>
                            <li>Dates de naissance : {{$dateNaissanceE1}}, {{$dateNaissanceE2}}</li>
                        </ul>
                    </div>
                </div>
                <p><br /><br />
                    Descriptif de la carrière :
                    <br /><br />
                    {{$carriere}}
                    ;,gnlijerg tjgkdrugh eriugh iuhgrukgh riughiudgh iurgiruh gdfuhg iurhg urdhgu hgis< kurtgudgh uhgiurzt gir guiqrhgiurehgi sfurh iurgurhgud hiugdhfgu dhg dughri ugh dyug isuuty ujghfjdgh fjhg sfjgh fdkuhgdfhgdfugh idrughdfiugh kughsrugh dufgh rud hfjhugh fjg hjgh ufhg jhd gkudhgjffh kudtheriutghu sghklusrg rh gk ghkudfjgh fu ghfkghd ughdfgshg nlijerg tjgkdrugh eriugh iuhgrukgh riugh iudgh iurgiruh gdfuhg iurhg urdhgu hgis< kurtgudgh uhgiurzt gir guiqrhgiur ehgi sfurh iurgurhgud hiugdhfgu dhg dughriuhgrdugh dyug isuuty ujghfjdgh fj jgh fdkuhgdfhgdfugh idrughdfiugh kughsrugh dufg dufgh rud hfjhugh fjg hjgh ufhg jhd gkudhgjffh kudtheriutghu sghklusrg rh gk ghkudfjgh fu ghfkghd ughdfgshg nlijerg tjgkdrugh eriugh iuhgrukgh riugh iudgh iurgiruh gdfuhg iurhg urdhgu hgis< kurtgudgh uhgiurzt gir guiqrhgiur ehgi sfurh iurgurhgud hiugdhfgu dhg dughriuhgrdugh dyug isuuty ujghfjdgh fj jgh fdkuhgdfhgdfugh idrughdfiugh kughsrugh dufgh rud hfjhugh fjg hjgh ufhg jhd gkudhgjffh kudtheriutghu sghklusrg rhgk ghkudfjgh fu ghfkghd ug nlijerg rugh eriugh iuhgrukgh riughiudgh iurgiruh gdfuhg iurhg urdhgu hgis< kurtgu dgh uhgiurzt gir guiqrhgiurehgi sfurh iurgurhgud hiugdhfgu dhg dughriuhgrdu gh dyug isuuty ujghfjdgh fjhg sfjgh fdkuhgdfhgdfugh idrughdfiugh kughsrugh dufgh rud hfjhugh fjg hjgh rud hfjhugh fjg hjgh ufhg jhd gkudhgjffh kudtheriutghu sghklusrg rhgk ghkudfjgh fu ghfkghd ug nlijerg rugh eriugh iuhgrukgh riughiudgh iurgiruh gdfuhg iurhg urdhgu hgis< kurtgu dgh uhgiurzt gir guiqrhgiurehgi sfurh iurgurhgud hiugdhfgu dhg dughriuhgrdu gh dyug isuuty ujghfjdgh fjhg sfjgh fdkuhgdfhgdfugh idrughdfiugh kughsrugh dufgh rud hfjhugh fjg hjgh ufhg jhd gkudhgjffh kudtheriutghu sghklusrg rhgk ghkudfjgh fu ghfkghd ug</p>
            </div>

        </div>
    </div>


</div>
</div>
@endsection