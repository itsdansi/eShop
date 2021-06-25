<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class productController extends Controller
{
    function index()
    {
        $products = Product::latest('id')-> get();
        return view('home',['products'=>$products]);
    }

    function getById($id){
        $product = Product::find($id);
        return view('productDetails',['product'=>$product]);
    }
    
    function create(Request $req)
    {
        $product = new Product;
        $product->prod_name = $req->name;
        $product->prod_desc = $req->desc;
        $product->price = $req->price;
        $product->save();

        print_r($req->input()); 
        echo "Data inserted into database!";
        ?>
        <br> <br>
       <strong> Wanna delete some recoreds? </strong> <a href="http://127.0.0.1:8000/deleteProduct">click here</a> 
       <a href="http://127.0.0.1:8000/addProduct"> <strong> || Add more product </strong></a> 

       <?php 
    }
}