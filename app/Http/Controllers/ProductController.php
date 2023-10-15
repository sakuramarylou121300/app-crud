<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        return view('products.index');//the return is the name of the route in the web.php
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        dd($request);
    }
}
