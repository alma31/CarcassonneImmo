@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Panneau de configuration</div>
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="/addCustomer"><i class="fas fa-user-plus fa-5x"></i>
                                    <span>Ajouter un client</span></a>
                            </div>
                            <div class="col-sm-4">
                                <a href="/addBuilding"><i class="fas fa-building fa-5x"></i>
                                    <span>Ajouter un logement</span></a>
                            </div>
                            <div class="col-sm-4">
                                <i class="fas fa-eye fa-5x"></i>
                                <span>Regarder tout les logement</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
