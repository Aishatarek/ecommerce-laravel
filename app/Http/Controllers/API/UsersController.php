<?php

namespace App\Http\Controllers\API;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UsersResource;

class UsersController extends Controller
{
    use ApiResponseTrait;
   



    public function index(){
        $users = UsersResource::collection( User::all() );

        // $users = User::all();
        if($users){
        return $this->ApiResponse($users ,'return users' , 200);
        }else{
            return $this->ApiResponse(null ,'no users' , 200);

        }
    }
    public function show($id){
        $user=new UsersResource(User::findOrFail($id));
        if($user){
            return $this->ApiResponse($user ,'return user only' , 200);

        }else{
            return $this->ApiResponse(null ,'no user' , 200);

        }
    }
}
