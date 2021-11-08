<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;

class FrontendsController extends Controller
{
    public function index(){
        $products = Product::take(6)->get();
        //$products = Product::all();
        $services = Service::all();
        return view('frontends.index',['products' => $products , 'services' => $services]);
    }
    public function show(){
        $products = Product::paginate(6);
        //session()->forget('carts');
        return view('frontends.show',['products' => $products]);
    }

}
