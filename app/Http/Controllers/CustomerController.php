<?php

namespace CarcasonneImmobilier\Http\Controllers;

use CarcasonneImmobilier\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function GetAddCustomer()
    {
        return view('addCustomer');
    }

    public function AddCustomer(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->prenom = $request->prenom;
        $customer->telephone = $request->telephone;
        $customer->save();
        var_dump("Ok");
    }
}
