@extends('layouts.app')

@section('content')
    <h1 class="text-center">Liste des Batiment</h1>
    <div class="text-right">
    <button class="Show">Ouvrir Filtres</button>
    <button class="Hide">Fermer Filtres</button>
    <div id="target">
        <form action="/searchFilter" method="post">
            {{csrf_field()}}
        <label for="">Type du logement</label>
        <select name="idTypeOfAnnonce" id="">
            @foreach ($lstType as $lstTypes)
                <option value="{{$lstTypes->id}}">{{$lstTypes->type}}</option>
            @endforeach
        </select>
        <div class="range-slider">
            <label for="">Nombre de piece</label>
            <input class="range-slider__range" type="range" name="surface" value="2" min="1" max="6">
            <span class="range-slider__value">0</span>NBpiece
        </div>

        <div class="range-slider">
            <label for="">Prix max Euros</label>
            <input class="range-slider__range" type="range" name="price" value="1000" min="200" max="400000">
            <span class="range-slider__value">0</span>Euros
        </div>
            <button type="submit" class="text-center">RECHERCHER</button>
        </form>
    </div>
    </div>
    <div class="container">
        <div class="row align-center">
            @foreach ($buildings as $buildingss)
            <div class="col-sm-4">
                <div class="card" >
                    @guest
                    @else
                        <a href="/deleteAnnonce/{{$buildingss->id}}" methods="post"><button type="button" class="btn btn-danger">X</button></a>
                        <a href="/editAnnonce/{{$buildingss->id}}" methods="post"><button type="button" class="btn btn-warning">Editer</button></a>
                        @endguest
                    <h5 class="card-title">{{$buildingss->title}}</h5>
                    <img class="card-img-top" style="height: 300px;" src="{{$buildingss->path}}" alt="Card image cap">
                    <div class="card-body">
                        <p style="text-align: left;" class="card-text">Nb piece: {{$buildingss->nbpiece}} </p>
                        <p style="text-align: left;" class="card-text">Prix: {{$buildingss->price}} </p>
                        <p style="text-align: left;" class="card-text">type du logement: {{$buildingss->type}} </p>
                        <a href="/getFiche/{{$buildingss->id}}" class="btn btn-primary">En voir plus</a>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>

    @endsection