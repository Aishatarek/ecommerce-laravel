<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use App\Comment;


use App\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;

use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function dashboard(){
        $users = DB::table('users')->get();
        $mUsers = User::paginate(5);
        $categories=Category::paginate(5);
        $products=Product::paginate(5);
        $comments=Comment::paginate(5);
        return view('admin.dashboard' , 
        [
            'DBUsers'=>$users , 
            'mUsers'=> $mUsers,
            'categories'=> $categories,
            'products'=> $products,
           'comments'=> $comments

        
        
        
        ]);


     

    }
   
    public function users(){
        $users = DB::table('users')->get();
        $mUsers = User::all();
 

        return view('admin.users.all' , 
        [
            'DBUsers'=>$users , 
            'mUsers'=> $mUsers,
      
        ]);


     

    }

    

        
 
    public function create(){
         return view('admin.users.create') ;
    }
    public function store(Request $request) {
        $validData=$request->validate([
            'name'=>'required | max:200 | min:5 | string',
            'email'=>'required | email |  max:200 | min:5 ',
            'password'=>'required | max:200 | min:10 ',/*|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/*/
            'role'=>'required',
            'avatar'=>'required'

    
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        if($request->hasFile('avatar')){
            $image = $request->avatar;
            $imgExtension = $image->extension();
            $imageName = time() . "." . $imgExtension;
            $image->move(public_path('images/users') , $imageName);
        }
        $user->avatar = $imageName ;
     //$user->status = $request->status; 
      $user->save();
        return redirect()->route('dashboard');
      //  dd($request->all());

   }
   public function edit($id){
       $user= User::findOrFail($id);
        //return redirect()->route('users.edit',['user'=>$user]);
        return view('admin.users.edit',['user'=>$user]);


   }

   public function update(Request $request , $id){

       $user= User::findOrFail($id);
       if($request->hasFile('avatar')){
           File::delete('images/users/'. $user->avatar);
        $image = $request->avatar ;
        $imgExtension = $image->extension();
        $imageName = time() . "." . $imgExtension;
        $image->move(public_path('images/users') , $imageName);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            //'password' => Hash::make($request->password),
            'avatar' => $imageName ,
            'role' => $request->role    
         ]);

       }
       $user->update([
        'name' => $request->name,
        'email' => $request->email,
        //'password' => Hash::make($request->password),
        'role' => $request->role,
     
       ]);
    //  return redirect()->back();
    return redirect()->route('dashboard')->with('success' ,'User has been deleted successfully');

       
   }
 
   public function delete($id){

       $user = User::findOrFail($id);
       File::delete('images/users/'. $user->avatar);

       $user->delete();
        return redirect()->route('dashboard')->with('success' ,'User has been deleted successfully');

   }
   public function searchByEmail(Request $request){
       $email= $request->email;
       $user= DB::table('users')->where('email','=',$email)->get();
       return view('admin.users.result' , ['user'=>$user]);


}
}
