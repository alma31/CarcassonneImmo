<?php

namespace CarcasonneImmobilier\Http\Controllers;

use CarcasonneImmobilier\Annonce;
use CarcasonneImmobilier\Type_of_annonce;
use CarcasonneImmobilier\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class BuildingController extends Controller
{
    public function GetAddBuilding(){
        $lstCustomer = Customer::all();
        $lstType = Type_of_annonce::all();
        return view ('addbuilding', ['lstCustomer' => $lstCustomer], ['lstType' => $lstType]);
    }

    public function AddBuilding(Request $request)
    {
        $building = new Annonce;
        $building->title = $request->title;
        $test = $request->file('path')->getClientOriginalName();
        $path = $request->path->storeAs('images', $test , 'public_uploads');
        $path = "upload/".$path;
        $building->path  = $path;
        $building->nbpiece = $request->nbpiece;
        $building->price = $request->price;
        $building->idCustomer = $request->idCustomer;
        $building->idTypeOfAnnonce = $request->idTypeOfAnnonce;
        $building->save();
        return redirect()->action('HomeController@index');
    }

    public function getAllBuilding(){

        $buildings = DB::select("call GetAllAnnonceFromDB()");
        return view ('getAllBuildings', ['buildings' => $buildings]);
    }

    public function deleteBuilding(Request $request, $id) {
        $user = Annonce::find($request->id);
        $user->delete();
        return $this->getAllBuilding();
    }

    public function GetEditAnnonce($id){
        $annonce = DB::table('annonces')
            ->join('customers', 'annonces.idCustomer', '=', 'customers.id')
            ->join('type_of_annonces', 'annonces.idTypeOfAnnonce', '=', 'type_of_annonces.id')
            ->select('annonces.*', 'customers.name', 'customers.prenom','customers.telephone', 'type_of_annonces.type')
            ->where('annonces.id', '=', $id)
            ->get();
        $lstCustomer = Customer::all();
        $lstType = Type_of_annonce::all();
        return view ('editAnnonce', ['annonce' => $annonce], ['lstCustomer' => $lstCustomer], ['lstType' => $lstType]);
    }
}
