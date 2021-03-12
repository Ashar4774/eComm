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
}
