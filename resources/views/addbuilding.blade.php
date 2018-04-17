@extends('layouts.app')

@section('content')

    <div class="container">
        <form  id="contact"  action="/addBuilding" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <h3>Ajouter un logement</h3>
            <fieldset>
                <input placeholder="Titre" name="title" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                    Selectionner une image du logement :
                    <input type="file" name="path" id="file" required>
            </fieldset>
            <fieldset>
            <label>Nombre de piece</label>
            <select name="nbpiece" id="" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            </fieldset>
            <fieldset>
                <input placeholder="prix" type="number" name="price" required>
            </fieldset>
            <fieldset>
                <label for="">Choisir un client</label>
                <select name="idCustomer" required>
                    @foreach ($lstCustomer as $lstCustomers)
                        <option value="{{$lstCustomers->id}}">{{$lstCustomers->name}}, {{$lstCustomers->prenom}}</option>
                    @endforeach
                </select>
            </fieldset>
            <fieldset>
                <label for="">Type du logement</label>
                <select name="idTypeOfAnnonce" id="" required>
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