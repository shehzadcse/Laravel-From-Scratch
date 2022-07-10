<?php

namespace App\Http\Controllers;

use App\Product;


class ProductController extends Controller
{
    public function index()
    {
        // $products = DB::table('products')->get();        
        // $products = DB::table('products')->get();        
        $products = Product::all();
        // dd($products);
        return view('products.index')->with(["products"=>$products]);
    }
    public function create()
    {
        return view('products.create');
    }

    public function store()
    {     
        $product = Product::create(request()->all());
        $products = Product::all();
        return view('products.index')->with(["products"=>$products]);
    }
    public function show($product)
    {
        // $product = DB::table('products')->where('id',$product)->first();
        // $product = DB::table('products')->where('id',$product)->first();
        $product = Product::findOrFail($product);
        // dd($product);
        return view('products.show')->with(["product"=>$product]);
    }
    public function edit($product)
    {
        // return 'A form to edit product ' . $product . ' from ProductController';
        $product = Product::findOrFail($product);
        
        return view('products.edit')->with(["product"=>$product]);
    }
    public function update($product)
    {
        $product = Product::findOrFail($product);
        $product->update(request()->all());
        $products = Product::all();
        return view('products.index')->with(["products"=>$products]);
    }
    public function destroy($product)
    {

        $product = Product::findOrFail($product);
        $product->delete();
        // dd('aa');
        return $product;
    }
}

