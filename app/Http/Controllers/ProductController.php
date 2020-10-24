<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "This is the List of Products from ProductController";
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
        return 'Showing products '.$product.' from ProductController';
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


