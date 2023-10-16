<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        //this is to show all products
        $products = Product::all(); //this mean to get all the products 
        return view('products.index', ['products' => $products]);//the return is the name of the route in the web.php
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        // dd($request->name);//request name
        // this is validation
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',//this means a 2 decimal
            'description' => 'nullable'
        ]);

        //now store data in database
        $newProduct = Product::create($data);

        //then return to index page when store done
        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        
    }
}
