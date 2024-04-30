<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){
        $user = Auth::user()->get();

        
        $keyword = $request->get('keyword');
        if($request->get('keyword') != ''){
 $user = $user->where('name','LIKE',$request->get('keyword'));

 if($user != ''){
    return view('admin.user.list',compact('user','keyword'));
 }else{
    return "No Records Found...";
 }

        }
      
      
   return view('admin.user.list',compact('user'));
    }

    public function destroy(Request $request,$id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success','User Deleted Succesfully');
    }
}
