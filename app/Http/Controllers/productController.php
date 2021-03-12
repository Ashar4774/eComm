<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
}
