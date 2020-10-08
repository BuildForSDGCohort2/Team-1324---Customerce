<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Customer;
use App\Product;
use App\Client;

class POSController
{
    public function index()
    {
        $products = Product::all();
        $clients = Client::all();
        return view('admin.pos.index', compact('products','clients'));
        //

       // return view('admin.pos.index', compact('clients'));
       // dd($clients);
    }
}
