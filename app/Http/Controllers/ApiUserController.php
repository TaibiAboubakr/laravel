<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    public function getUserInfo(){
        $user = auth(guard:'api')->user();
        return response()->json(["user"=>$user]);
    }
}
