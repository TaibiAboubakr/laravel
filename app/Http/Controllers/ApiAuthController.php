<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ApiAuthController extends Controller
{
    public function login(Request $request){

        $validatData = $request->validate([
            "email"=>'required',
            "password"=>'required'
        ]);
        $user = User::where('email',$validatData['email'])->first();
        if (!$user || !Hash::check($validatData['password'], $user->password)){
            return response()->json(["message"=>"invalid user or passsword"], 401);
        }
        $token = $user->createToken('auth_token');
        return response()->json(["access_token"=>$token->plainTextToken,"user"=>$user]);
        
    }
}
