<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
   public function create(){
      $category = category::all();
      $brand = brand::all();
    return view('admin.product.create',compact('category','brand'));
   }

   public function store(Request $request){

    $request->validate([
      'name' => 'required',
      'image' => 'required',
      'price' => 'required',
      'quantity'=> 'required',
      
    ]);

    $product = new product();
    $product->name = $request->name;
    $product->description = $request->description;
    $product->image = $request->image;
    $product->price = $request->price;
    $product->compareprice = $request->compareprice;
    $product->category_id = $request->category;
    $product->brand_id = $request->brand;
    $product->featured = $request->featured;
    $product->trendy = $request->trendy;
    $product->quantity = $request->quantity;
    $product->status = $request->status;

    $image = $request->image;
    $imagename = time().'.'.$image->getClientOriginalExtension();
    $request->image->move('images',$imagename);
    $product->image = $imagename;
    
    $product->save();

    return redirect()->back()->with('success','Product Added Succesfully...');

   }

public function index(Request $request){
  $product = product::with('getCategory','getBrand')->get();

  $keyword = $request->get('keyword');
  if($request->get('keyword') != ''){
    $keyword = $request->get('keyword');
$product = Product::where('name','LIKE',"%".$keyword."%")->
                    orWhere('price','LIKE',"%".$keyword."%")
                    ->get();

  }
  return view('admin.product.list',compact('product','keyword'));
}

public function destroy(Request $request, $id){

$product = product::find($id);
$product->delete();
return redirect()->back()->with('success','Product Deleted Successfully');

}

public function edit($id){
  $category = category::all();
  $brand = brand::all();
  $product = product::find($id);
  return view('admin.product.edit',compact('product','category','brand'));

}

public function update(Request $request,$id){
  $product = product::find($id);

  $product->name = $request->name;
  $product->description = $request->description;
  $product->price = $request->price;
  $product->compareprice = $request->compareprice;
  $product->category_id = $request->category;
  $product->brand_id = $request->brand;
  $product->featured = $request->featured;
  $product->trendy = $request->trendy;
  $product->quantity = $request->quantity;
  $product->status = $request->status;

 if($request->image != ''){
  $product->image = $request->image;
  $image = $request->image;
  $imagename = time().'.'.$image->getClientOriginalExtension();
  $request->image->move('images',$imagename);
  $product->image = $imagename;
 }
  $product->save();

  return redirect()->back()->with('success','Product Updated Succesfully...');


}

}
