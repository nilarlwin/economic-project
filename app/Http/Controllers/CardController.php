<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;

class CardController extends Controller
{
    public function create($id){
        $product = Product::find($id);
        if(Session::exists('carts')){
            $cart = Session::get('carts');
            $cart[$id] = [
                'title'=>$product->title,
                'image'=>$product->image,
                'price'=>$product->price,
                'qty'  =>1
            ];
            Session::put('carts',$cart); 
        }else{
            Session::put('carts',[
             $id => [
                 'title' =>$product->title,
                 'image' =>$product->image,
                 'price' =>$product->price,
                 'qty'   =>1
             ]
            ]);
        }
        $count = count(Session::get('carts'));
       // echo $count;
        Session::put('count',$count);
        return redirect()->back();
       // return Session::get('carts');
    }
    public function index(){
       $carts = Session::get('carts');
       return view('frontends.view-cart',['carts'=>$carts]);
    }
    public function add($key){
     $carts = Session::get('carts');
     $carts[$key]['qty']++;
     Session::put('carts',$carts);
     return redirect()->back();
    }
    public function subtract($key){
        $carts = Session::get('carts');
        if($carts[$key]['qty'] != 1){
            $carts[$key]['qty']--;
        }
        Session::put('carts',$carts);
        return redirect()->back();
    }
    public function delete($key){
        $carts = Session::get('carts');
        unset($carts[$key]);
        Session::put('carts',$carts);
        return redirect()->back();
    }
    public function checkout(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        $customer = Customer::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address
        ]);
        $carts =Session::get('carts');
        foreach($carts as $cart){
           Order::create([
               'image'=>$cart['image'],
               'title'=>$cart['title'],
               'quantity'=>$cart['qty'],
               'price'=>$cart['price'],
               'customer_id'=>$customer->id
           ]);
        }
        Session::forget('carts');
        return redirect('/message');
    }
    public function message(){
        return view('frontends.message');
    }
}
