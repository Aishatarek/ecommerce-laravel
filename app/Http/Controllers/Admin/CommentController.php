<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CommentController extends Controller
{
  
    function index(){

    }
    public function comments(){
        $comments=Comment::all();

        
 

        return view('admin.comments.all' , 
        [
            'comments'=> $comments

      
        ]);


     

    }

    public function create()
    {
        return view('admin.comments.create');
    }

    public function store(Request $request) {

        $validData=$request->validate([
            'comment'=>'required | max:200 | min:10 | string',

            'status'=>'required',
            'product_id'=>'product_id',
            'user_id'=>'required',


    
        ]);
     $user= Comment::create([
         'comment'=>$validData['comment'],  
         'status'=>$validData['status'],
         'product_id'=>$validData['product_id'],
         'user_id'=>$validData['user_id']

    
    
     ]);
       // dd($request->all());
     return redirect()->route('dashboard')->with('success','comment has been added successfullt');
    }

 
}
