<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\categoryController;
use App\Models\Product;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route for fetching all  products
// Route::get('/',[productController::class,'index']);
Route::get('/', function(){
    $products = Product::latest('id')-> get();
    return view('home',['products'=>$products]);
});

// route for adding product
Route::view('/addProduct','dashboard/product');
Route ::post('submitProduct','App\Http\Controllers\productController@index');


// Route for getting single product by Id
// Route::get('/product/{id}', [productController::class,'getById']); 
Route::get('/product/{id}', function($id){
    $product = Product::find($id);
    return view('productDetails',['product'=>$product]);
}); 

// Route for fetching all categories
Route::get('/categories',[categoryController::class,'index']);    

// Route for fetching single category by id
Route::get('/category/{category}',[categoryController::class,'getById']);    



// route for adding category
Route::view('/addCategory','dashboard/category');
Route ::post('submitCategory','App\Http\Controllers\categoryController@index');


// route for adding customer
Route::view('/addCustomer','dashboard/customer');
Route ::post('submitCustomer','App\Http\Controllers\customerController@index');

// route for viewing customer details
Route::get('/customer',function(){
    $customer = App\Models\Customer::all();
    return view('dashboard/viewCustomer',['customer'=>$customer]);
});

// route for updating customer details
Route ::post('/editCustomer','App\Http\Controllers\customerController@edit');
Route ::post('/updateCustomer','App\Http\Controllers\customerController@update');

// route for deleting customer details
Route ::post('/deleteCustomer','App\Http\Controllers\customerController@delete');


// route for viewing customer details
// Route ::post('/customer','App\Http\Controllers\customerController@list');




// <---------------------------------------Admin routing starts from here-------------------------------------------->

// route for admin home page
Route::view('/admin','Admin.index');

// route for getting all products list
Route::get('/admin/product',[App\Http\Controllers\Admin\productController::class,'index']);

// route for adding a new product
Route::get('/admin/createProduct',[App\Http\Controllers\Admin\productController::class,'create']);
Route::post('/admin/product/store',[App\Http\Controllers\Admin\productController::class,'store']);

Route::get('/admin/category',[App\Http\Controllers\Admin\categoryController::class,'index']);

// route for adding a new category
Route::view('/admin/createCategory','/Admin/category/createCategory');
Route::post('/admin/category/store',[App\Http\Controllers\Admin\categoryController::class,'store']);

Route::get('/admin/customer',[App\Http\Controllers\Admin\customerController::class,'index']);



