<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function k()
    {
        $show=User::all();
        return response()->json($show);
    }

    public function login(Request $request)
    {
        $login=new User();
        $login->email=$request->email;
        $login->password=Hash::make($request->password);
        $login->save();
        return response()->json($login,555);
    }

    public function checklogin(Request $request)
    {
        $check=Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        if($check){
            echo "yes";
        }else{
            echo "no";
        }
        return response()->json($check,444);
    }

    public function updateuser(Request $request,$id)
    {
        $updateuser=User::find($id);
        $updateuser->email=$request->email;
        $updateuser->password=Hash::make($request->password);
        $updateuser->update();
        return response()->json($updateuser);
    }
}
