<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class GrocceryController extends Controller
{
  public function save (Request $request){
  $data=$request->only('product_name','product_type','product_company','product_id','base_price','selling_price');
  
  Product::create($data);
  return response()->json(['data' => 'created'], 200);
  }

  public function Store(Request $request)  {
    $data=$request->only('Cname','Cfname','Number','Email','Address');
    Customer::create($data);
    return response()->json(['data' => 'created'], 200);
  }
  public function show(){
    $data=Customer::all();  
    return response()->json(['data' => $data], 200);

  }
  public function view(){
    $data=Product::all();  
    return response()->json(['data' => $data], 200);

  }
}
