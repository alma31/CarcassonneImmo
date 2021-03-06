@extends('layouts.app')

@section('content')

    <div class="container">
        <form  id="contact"  action="/postEditAnnonce/{{$annonce[0]->id}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <h3>Ajouter un logement</h3>
            <fieldset>
                <input value="{{$annonce[0]->title}}" placeholder="Titre" name="title" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                Selectionner une image du logement :
                <input type="file" name="path" id="file"  required>
                <img class="card-img-top" style="height: 300px;" src="{{$annonce[0]->path}}" alt="Card image cap">
            </fieldset>
            <fieldset>
                <label>Nombre de piece</label>
                <select name="nbpiece" id="" required>
                    <option value="{{$annonce[0]->nbpiece}}">{{$annonce[0]->nbpiece}}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </fieldset>
           <fieldset>
                <input value="{{$annonce[0]->price}}" placeholder="prix" type="number" name="price" required>
            </fieldset>
            <fieldset>
                <label for="">Choisir un client</label>
                <select name="idCustomer" required>
                    <option value="{{$annonce[0]->idCustomer}}">{{$annonce[0]->name}}, {{$annonce[0]->prenom}}</option>
                    @foreach ($lstCustomer as $lstCustomers)
                        <option value="{{$lstCustomers->id}}">{{$lstCustomers->name}}, {{$lstCustomers->prenom}}</option>
                    @endforeach
                </select>
            </fieldset>
            <fieldset>
                <label for="">Type du logement</label>
                <select name="idTypeOfAnnonce" id="" required>
                    <option value="{{$annonce[0]->idTypeOfAnnonce}}">{{$annonce[0]->type}}</option>
                    @foreach ($lstType as $lstTypes)
                        <option value="{{$lstTypes->id}}">{{$lstTypes->type}}</option>
                    @endforeach
                </select>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Ajouter ce logement</button>
            </fieldset>
        </form>
    </div>

@endsection