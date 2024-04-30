<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\category;
use App\Models\Product;
use App\Models\User;
use App\Models\Brand;
use App\Models\Feedback;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{
    public function index(){

        $sale = 0;
        $ordertotal = Order::all();
       foreach($ordertotal as $ot){
        $sale = $sale+$ot->price;
       }

        $order = Order::all()->count();
        $category = Category::all()->count();
        $product = Product::all()->count();
        $user = User::all()->count();
        $brand = Brand::all()->count();
        $feedback = Feedback::all()->count();
        return view('admin.dashboard',compact('order','category','product','user','brand','feedback','sale'));
    }

    public function order(Request $request){
        $order = order::all();

        $keyword = $request->get('keyword');
        if($keyword != ''){
            $order = order::where('product_title','LIKE','%'.$keyword.'%')->orwhere('user_name','LIKE','%'.$keyword.'%')->get();
        return view('admin.order',compact('order','keyword'));

        }
        return view('admin.order',compact('order'));
    }

    public function orderdetail($id){
        $order = order::where('id','=',$id)->get();
        return view('admin.orderdetail',compact('order'));
    }

    public function changestatus($id){
        $status = order::where('id','=',$id)->get()->first();
        $status->delivery_status = 'Delivered';
        $status->save();
        return redirect()->back();
    }

    public function adminfeedback(){
        $feedback = Feedback::all();
        return view('admin.adminfeedback',compact('feedback'));
    }

    public function feedbackdelete($id){
        $feedback = Feedback::find($id);
        $feedback->delete();
        
        return redirect()->back()->with('success','Feddback Deleted Successfully');
    }

}
