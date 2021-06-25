<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class customerController extends Controller
{
    function index(Request $req)
    {   
 
        // return Customer :: all();
        $customer = new Customer;
        $customer->name = $req->cname;
        $customer->address = $req->address;
        $customer->email = $req->email;
        $customer->save();

        print_r($req->input()); 
        echo "Data inserted into database!";
        ?>
        <br> <br>
       <strong> Wanna delete some recoreds? </strong> <a href="http://127.0.0.1:8000/customerDelete">click here</a> 
       <a href="http://127.0.0.1:8000/addCustomer"> <strong> || Add more customer </strong></a> 

       <?php 
    }


    function list()
    {
    echo "Hello Customers!";
    $customer = DB::table('customers')->all();
    return view('viewCustomer',['customer'=> $customer]);
    }

    function edit(Request $req)
    {
        $customer = Customer::find($req->$id);
        return view('updateCustomer')->with('customer',$customer);
    }

    function update(Request $req )
    {
        $id = $req->$id;
        $customer = Customer::find($id);
        $customer->name = $req->cname;
        $customer->address = $req->address;
        $customer->email = $req->email;
        $customer->save();
    }

    function delete($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('home');
     }
}