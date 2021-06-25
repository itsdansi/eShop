<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class categoryController extends Controller
{
    function index (Category  $category)
    {
        $products = Product::all();
        return view('category',['products'=>$products,'category'=>$category]);
    }

    function getById(Category  $category)
    {
        $products = Product::whereCatId($category->id)->get();
        // $products = $category->products;
        return view('category',['products'=>$products,'category'=>$category]);
    }

    function create(Request $req)
    {
        $category = new Category;
        $category->name = $req->name;
        $category->save();

        print_r($req->input()); 
        echo "Data inserted into database!";
        ?>
        <br> <br>
       <strong> Wanna delete some recoreds? </strong> <a href="http://127.0.0.1:8000/deleteCategory">click here</a> 
       <a href="http://127.0.0.1:8000/addCategory"> <strong> || Add more category </strong></a> 

       <?php 
    }
}