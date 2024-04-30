<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class LoginController extends Controller
{
   

    public function loginprocess(Request $request){
        $email = $request->email;
        
        $password = $request->password;
        $loginemail = Login::all()->where('email','LIKE',$email);
       
        $loginpassword = Login::all()->where('password','LIKE',$password);
        
        if($loginemail && $loginpassword != 'false'){
            return "hello";
        }else{
            echo "No Records Found";
        }
    }
}
