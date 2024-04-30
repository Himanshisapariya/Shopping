<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\wishlist;
use App\Models\order;
use App\Models\brand;
use App\Models\billing;
use App\Models\contact;
use App\Models\feedback;
use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
 {
    
    public function index(){
        $userid = Auth::id();
        $category = category::all();
        $cat = Category::all();
        $brand = brand::all();
        $featured = product::where('featured','=','1')->get();
        $trendy = product::where('trendy','=','1')->get();
        $slider = product::where('brand_id','=','3')->get();
        $wlistcount = wishlist::where('user_id','=',$userid)->get()->count();
        $cartcount = Cart::where('user_id','=',$userid)->get()->count(); 
        return view('home.home',compact('category','brand','cat','cartcount','wlistcount','featured','trendy','slider'));  
    }


    public function redirect(){
        $usertype = Auth::user()->usertype;
        $userid = Auth::id();
        if($usertype==0){
            $category = category::all();
            $cat = Category::all();
            $brand = brand::all();
            $featured = product::where('featured','=','1')->get();
            $wlistcount = wishlist::where('user_id','=',$userid)->get()->count();
            $cartcount = Cart::where('user_id','=',$userid)->get()->count();
            $trendy = product::where('trendy','=','1')->get();
            $slider = product::where('brand_id','=','3')->get(); 
            return view('home.home',compact('category','cat','wlistcount','cartcount','featured','brand','trendy','slider'));  
        }else{
            return redirect('admin/dashboard');
        }
    }

    public function productpage(){
       $productpage = product::all();
       return view('home.productpage',compact('productpage'));
    
    }

    public function showbrand($id){
        $brand = product::where('brand_id','=',$id)->get();
        return view('home.brand',compact('brand'));
    }

    public function about(){
        return view('home.about'); 
     }

     public function feedback(){
        return view('home.feedback'); 
     }

     public function sendfeedback(Request $request){

        $request->validate([
            'email'=>'required',
            'feedbackmessage'=>'required'
        ]);

        $feedback = new feedback;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->message = $request->feedbackmessage;
        $feedback->save();

        return redirect()->back()->with('success','Feedback Sent Successfully');

     }
       

    public function product($id){
        $product = product::where('category_id','=',$id)->get();
       
        return view('home.products',compact('product'));
    }
   

    public function detail($id){
        $product = product::find($id);
       
        return view('home.view_detail',compact('product'));
    }


    public function cart(Request $request,$id){ 
    
$cart = cart::where('product_id','=',$id)->get()->first();
if($cart){

    if($request->quantity){
    $cart->quantity = $cart->quantity + $request->quantity;
    }else{
        $cart->quantity = $cart->quantity + 1;
    }
    $cart->save();
    return redirect()->back()->with('info','Product Added Again');
}

        if(Auth::id()){
            $user = Auth::user();
        $product = product::find($id);

        $cart = new cart();
        $cart->name = $product->name;
        $cart->image = $product->image;
        $cart->price = $product->price;
        if($request->quantity != ''){
        $cart->quantity = $request->quantity;
        }else{
            $cart->quantity = 1;
        }
        $cart->product_id = $product->id;
        $cart->user_id = $user->id;
        $cart->save();

        return redirect()->back()->with('success','Product Added To Cart Successfully');
 
    }else{
        return redirect('login')->with('danger','Plaese Login First.');
    }
        
}


    public function cartshow(){
        if(Auth::id()){
        $id = Auth::user()->id;
        $cart = cart::where('user_id','=',$id)->get();
        return view('home.cart',compact('cart'));
    }else{
        return redirect('login')->with('error','Please Login First.');
    }
}

    public function delete($id){
        $cart = cart::find($id);
        $cart->delete();
        return redirect()->back()->with('success','Product Removed successfully');
    }

    public function order(Request $request){
        $user = Auth::user();
        
        $user_id =$user->id;
        $data = cart::where('user_id','=',$user_id)->get();
        foreach($data as $data){

            $order = new order;
           
            $order->user_name = $user->name;
            $order->email = $user->email;
            $order->phone = $user->phone;
            $order->address = $user->address;

            $order->price = $data->price;
            $order->user_id = $data->user_id;
            $order->product_title = $data->name;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->product_id;
            $order->payment_status ='Cash On Delivery';
            $order->delivery_status = 'processing';
            $order->date = now();
            $order->save();

            $product = product::where('id','=',$data->product_id)->get();
            $productid = $data->product_id;
            $minusquantity = $product[0]->quantity = $product[0]->quantity-$data->quantity;
            $productchange = product::find($productid);
            $productchange->quantity = $minusquantity;
            $productchange->save();
   
        }
        return redirect()->route('checkout');
    }

    public function checkout(){
        $user = Auth::user();
        $user_id =$user->id;
        $data = cart::where('user_id','=',$user_id)->get();
        return view('home.checkout',compact('data'));
    }


    public function billing(Request $request){


  
    $request->validate([
        'firstname' => 'required',
        'mobile' => 'required|numeric',
        'address' => 'required'
    ]);


        $bill = new billing();
        $user = Auth::user();
        $bill->user_id =$user->id;
        $bill->firstname = $request->firstname;
        $bill->lastname = $request->lastname;
        $bill->email = $request->email;
        $bill->mobile = $request->mobile;
        $bill->address = $request->address;
        $bill->save();

        $user = Auth::user();
        $user_id =$user->id;
       
$cart = cart::where('user_id','=',$user_id);
$cart->delete();

     return view('home.thankyou')->with('success','Your Order Is Placed We Will Reach You Soon!.....');

    }

    public function show_order(){
        if(Auth::id()){
            $user = Auth::user();
            $user_id = $user->id;
            $order = order::where('user_id','=',$user_id)->get();
            return view('home.order',compact('user_id','order'));
        }else{
            return redirect('login');
        }
    }

    public function cancel_order($id){
        $order = order::find($id);
        $order->delivery_status = 'You Cancel The Order';
        $order->save();
        return redirect()->back();
    }

    public function contact(){
        return view('home.contact');
    }

    public function contactstore(Request $request){

        $request->validate([
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success','Message Sent Successfully');

    }



    public function wishlist($id){
        $userId = Auth::id();
        $exist = wishlist::where('product_id','=',$id)->where('user_id','=',$userId)->get();
        
        if($exist->isNotEmpty()){
            return redirect()->back()->with('info','Product Is Already Exist In wishList');
        }
      
                if(Auth::id()){
                    $user = Auth::user();
                $product = product::find($id);
                $wishlist = new wishlist();
                $wishlist->name = $product->name;
                $wishlist->image = $product->image;
                $wishlist->price = $product->price;

                $wishlist->product_id = $product->id;
                $wishlist->user_id = $user->id;
                $wishlist->save();
        
                return redirect()->back()->with('success','Product Added To wishlist Successfully');
         
            }else{
                return redirect('login')->with('danger','Plaese Login First.');
            }
                
        }

        public function wishlistshow(){
            $userid = Auth::id();
            $wlist = wishlist::where('user_id','=',$userid)->get();
            return view('home.wishlist',compact('wlist'));
        }

        public function wlistdelete($id){
            $wlist = wishlist::find($id);
            $wlist->delete();
            return redirect()->back()->with('success','Product Removed successfully');
        }  
        
        public function emptywishlist(){
            $wishlist = wishlist::all();
        foreach($wishlist as $wlist){
           $wlist->delete();
        };

        return redirect()->back()->with('success','your wishlist is now emty');
            
        }

        public function search(Request $request){
            $keyword = $request->keyword;
            $search = product::where('name','LIKE',"%".$keyword."%")->get();
            return view('home.search',compact('search'));
        }
       
  
}
