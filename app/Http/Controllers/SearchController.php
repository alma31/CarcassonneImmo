<?php

namespace CarcasonneImmobilier\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function getAllAnnonceFilter(Request $request){
        $search = $request->search;
        $annonce = DB::table('annonces')
            ->join('customers', 'annonces.idCustomer', '=', 'customers.id')
            ->join('type_of_annonces', 'annonces.idTypeOfAnnonce', '=', 'type_of_annonces.id')
            ->select('annonces.*', 'customers.name', 'customers.prenom','customers.telephone', 'type_of_annonces.type')
            ->where('annonces.title', 'like', '%'.$search.'%')
            ->get();
        return view ('getAllBuildings', ['buildings' => $annonce]);
    }
}
