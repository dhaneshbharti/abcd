<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class GrocceryController extends Controller
{
  public function save (Request $request){
  $data=$request->only('product_name','product_type','product_company','product_id','base_price','selling_price');
  Product::create($data);
  return response()->json(['data' => 'created'], 200);
    }

  public function create(Request $request)  {
    $data=$request->only('Cname','Cfname','Number','Email','Address');
    Customer::create($data);
    return response()->json(['data' => 'created'], 200);
  }
}
