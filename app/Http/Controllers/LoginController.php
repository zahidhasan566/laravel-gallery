<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SpRequest;
use App\user;
use Validator;
//use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    function index(){
        return view('login.index');
    }

    function verify(Request $request){
        $user = new User;


if( $user->name = $request->input('name') && $user->password = $request->input('password')  )
        {
           // echo($user->name);
            return redirect()->route('home.index');
        }
//echo ($request->password);
       $pass= $request->password;
        $user = user::find($request->name);
        $password = user::find($pass);

  echo("invalid user");
       /*if(count($user) > 0 && count($password) > 0){

                return redirect()->route('home.index');
            }


        else{

            $request->session()->flash('msg', 'invalid username/password');
            echo("invalid");

        }
       */
    }
}


