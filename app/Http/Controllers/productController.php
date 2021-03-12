<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
class productController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view("product",['product'=>$data]);
    }

    function detail($id){
        $item_detail = Product::find($id);
        return view("detail",['detail'=> $item_detail]);
    }

    function search(Request $req){
        // return $req->input('query');
        $data = Product::where('name','like', '%'.$req->input('query').'%')->get();
        return view('search',['search'=> $data]);
    }

    function addToCart(Request $request){
        if ( $request->session()->has('user') ) {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect("/");
        } else {
            return redirect("/login");
        }


    }
}
