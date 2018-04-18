<?php

namespace CarcasonneImmobilier\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use CarcasonneImmobilier\Type_of_annonce;
use CarcasonneImmobilier\Customer;

class SearchController extends Controller
{

    public function getAllAnnonceSearch(Request $request){
        $lstCustomer = Customer::all();
        $lstType = Type_of_annonce::all();
        $search = $request->search;
        $annonce = DB::table('annonces')
            ->join('customers', 'annonces.idCustomer', '=', 'customers.id')
            ->join('type_of_annonces', 'annonces.idTypeOfAnnonce', '=', 'type_of_annonces.id')
            ->select('annonces.*', 'customers.name', 'customers.prenom','customers.telephone', 'type_of_annonces.type')
            ->where('annonces.title', 'like', '%'.$search.'%')
            ->get();
        return view ('getAllBuildings', ['buildings' => $annonce, 'lstCustomer' => $lstCustomer, 'lstType' => $lstType]);
    }


    public function getAllAnnonceFilter(Request $request){
        $price = intval($request->price);
        $type = intval($request->idTypeOfAnnonce);
        $nbpiece = intval($request->nbpiece);
        $annonce = DB::table('annonces')
            ->join('customers', 'annonces.idCustomer', '=', 'customers.id')
            ->join('type_of_annonces', 'annonces.idTypeOfAnnonce', '=', 'type_of_annonces.id')
            ->select('annonces.*', 'customers.name', 'customers.prenom','customers.telephone', 'type_of_annonces.type')
            ->where([
                ['annonces.price', '<=', $price],
                ['annonces.idTypeOfAnnonce', '=', $type ],
                ['annonces.nbpiece', '=', $nbpiece],
            ])->get();
        var_dump($annonce);
    }
}
