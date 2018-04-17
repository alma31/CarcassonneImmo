@extends('layouts.app')

@section('content')
    <h1 class="text-center">Liste des Batiment</h1>
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
                        <a href="#" class="btn btn-primary">En voir plus</a>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>

    @endsection