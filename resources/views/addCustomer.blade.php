@extends('layouts.app')

@section('content')

    <div class="container">
        <form  id="contact"  action="/addCustomer" method="POST">
            {{csrf_field()}}
            <h3>Ajouter un client</h3>
            <fieldset>
                <input placeholder="Nom" name="name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Prenom" name="prenom" type="text" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Telephone" name="telephone" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enregistrer</button>
            </fieldset>
        </form>
    </div>

@endsection