<?php


namespace App\Http\Controllers\Admin;


use App\Product;

class POSController
{
    public function index()
    {
        $products = Product::all();
        return view('admin.pos.index', compact('products'));
    }
}
