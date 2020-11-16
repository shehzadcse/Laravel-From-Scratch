<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        // $products = DB::table('products')->get();
        $products = Product::all();        
        dd($products);
        return view('products.index');
    }
    public function create()
    {
        return 'A form to create the product from ProductController';
    }

    public function store()
    {

    }

    public function show($product)
    {
        // $product = DB::table('products')->where('id',$product)->first();
        // $product = DB::table('products')->where('id',$product)->first();
        $product = Product::findOrFail($product);        
        dd($product);
        return view('products.show');
    }
    public function edit($product)
    {
        return 'A form to edit product '.$product.' from ProductController';
    }

    public function update($product)
    {
        
    }

    public function destroy($product)
    {
        
    }

}


