@extends('layouts.app')

@section('content')
<div id="app">
    <div class="container px-3">
        <titre-component :titre="'{{$titre}}'"></titre-component>
        <example-component></example-component>
        COUCOU
    </div>
</div>
@endsection