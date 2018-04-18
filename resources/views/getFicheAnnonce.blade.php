@extends('layouts.app')

@section('content')

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700" rel="stylesheet">

    <div class="card">
        <div class="header-bg" style="height: 190px;
    background-image: url(http://127.0.0.1:8000/{{$annonce[0]->path}});
    background-size: cover;
    background-position: center;
    border-radius: 4px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
    position: relative;"><div class="card-picture"></div></div>
        <div class="ilike"><svg width="24" height="24" viewBox="0 0 24 24">
                <path id="ilike-path" fill="#ffffff" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path>
            </svg></div>

        <div class="info-container">
            <p class="name">{{$annonce[0]->title}}</p>
            <p class="info">nombre de piece : {{$annonce[0]->nbpiece}}</p>
            <p class="info">prix : {{$annonce[0]->price}} euros</p>
            <p class="info">Type de logement : {{$annonce[0]->type}}</p>
            <ul class="icon-list">

            </ul>
        </div>
        <div class="info-container">
            <h2 class="align-center">information proprietaire</h2>
            <p class="info">Nom  :{{$annonce[0]->name}}</p>
            <p class="info">Prenom : {{$annonce[0]->prenom}}</p>
            <p class="info">telephone : {{$annonce[0]->telephone}}</p>
            <ul class="icon-list">

            </ul>
        </div>
    </div>




@endsection