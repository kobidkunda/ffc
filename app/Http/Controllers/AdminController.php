<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


   public function Datatablesapi(){

       $customers = \App\Customer::select(
           [
               'id',
               'name',
               'mobile',
               'city',
               'created_at', 'utm_source', 'utm_campaign', 'utm_term','utm_medium', 'phone_verified_at',
           ])->orderBy('id', 'desc');

       return Datatables::of($customers)


           ->make(true);








   }
}
