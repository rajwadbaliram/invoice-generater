<?php

namespace App\Http\Controllers;

use App\customer;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
     public function show(customer $customer)
    {
        return view('customer.customer_list')->with('customer_list',customer::all());
    }


    public function search(Request $request, customer $customer)
    {
        $search = $request->input('search');

        $customer_list = customer::where('name','like','%'.$search.'%')->get();
        
         if(count($customer_list)==0)
         {
            session()->flash('found','Customer Not Found');
            return view('index'); 
         }
         else
         {
            return view('customer.customer_list',compact('customer_list'));
         }
    }

    public function Add_customer()
    {
        return view('customer.Add_customer');
    }

    
    public function store_customer(Request $request)
    {
        $request->validate([

            'name'=>'required | min:3',
            'email'=>'required | email',
            'address'=>'required | min:3',
            'mobile'=>'required | min:10 | max:10'
        ]);

        $res = new customer();

        //$res->id = $request->input('id');
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->address = $request->input('address'); 
        $res->mobile = $request->input('mobile');

        $result = $res;
        $result->save();
         // echo "<pre>";
         // print_r($result);die;
         session()->flash('insert','Customer Information Addedd Successfully');
        return view('product.add_product',compact('result'));
    }
    
 

    public function destroy(customer $customer,$id)
    {
        customer::destroy('id',$id);
        DB::delete('delete from products where cus_id = ?',[$id]);

        return view('customer.customer_list')->with('customer_list',customer::all());
    }


      public function print(Request $request,$id)
    {

        $customerdata = DB::table('customers')
                ->select('customers.name','customers.email','customers.address','customers.mobile')
                ->where('customers.id',$id)
                ->get();


        $data = DB::table('customers')
                ->select('products.id','products.name','products.amount')
                ->join('products','customers.id','products.cus_id')
                ->where('customers.id',$id)
                ->get();

                // echo "<pre>";
                // print_r($data);

        $total = DB::table('products')
                ->where('products.cus_id',$id)
                ->sum('amount');
               // echo $total;die;

        return view('print_invoice',compact('customerdata','data','total'));
    }
}
