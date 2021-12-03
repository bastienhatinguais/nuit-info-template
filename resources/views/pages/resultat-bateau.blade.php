@extends('layouts.app')

@section('content')
<div id="app" class="bg-gradient-to-l from-blue-200">
    <div class="container px-3">
        <p style="text-align: left;"></p>
        <h1 class="font-bold text-3xl" style="text-align: center;">{{$nom}}</h1>

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

                            <li>Type : {{$typeBateau}}</li>
                            <li>Origine : {{$origine}}</li>
                            <li>Dimension : {{$dimension}}</li>

                            <br />
                            <li>Station ratachée : {{$station}}</li>
                            <li>Date de création de la station : {{$dateCreation}}</li>
                            <li>Ville : {{$ville}}</li>
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
    </div>


</div>
</div>
@endsection