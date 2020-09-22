<?php

namespace App\Http\Controllers;

use App\product;
use App\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   
     public function show(product $product)
    {
        return view('product.product_list')->with('product_list',product::all());
    }

    public function store_product(Request $request)
    {
        $res = new product();

        $res->id = $request->input('id');
        $res->cus_id = $request->input('cus_id');
        $res->name = $request->input('name');
        $res->amount = $request->input('amount');

        $res->save();
       // echo "<pre>";
       // print_r($res);

        return view('customer.customer_list')->with('customer_list',customer::all());
    }
   
 

   public function add_product(product $product,$id)
    {
        return view('product.add_product')->with('result',product::find($id));
    }

    
    public function destroy(product $product,$id)
    {
        //echo $id;die;
        //product::destroy('id',$id);
        DB::delete('delete from products where id = ?',[$id]);
        return view('product.product_list')->with('product_list',product::all());
    }
}
