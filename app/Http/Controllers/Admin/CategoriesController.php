<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class categoriesController extends Controller
{
/*
public function showAll(){
    return view('admin.categories.all');
}
public function showCategory(){
    return view('admin.categories.show');
}
public function editCategory(){
    return view('admin.categories.edit');
}
public function deleteCategory(){
    return 'delete category';
}
public function updateCategory(){
    return 'update category';
}
*/
function index(){

}

public function categories(){


    $categories=Category::all();

    return view('admin.categories.all' , 
    [

        'categories'=> $categories

    
    
    
    ]);


 

}
public function create(){
    return view('admin.categories.create');
}
public function store(Request $request) {

    $validData=$request->validate([
        'title_en'=>'required | max:200 | min:5 | string',
        'title_ar'=>'required | max:200 | min:5 | string',
        'description_en'=>'required | max:200 | min:10 | string',
        'description_ar'=>'required | max:200 | min:10 | string',
        'status'=>'required'

    ]);
 $user= Category::create([
     'title_en'=>$validData['title_en'],
     'title_ar'=>$validData['title_ar'],
     'description_en'=>$validData['description_en'],
     'description_ar'=>$validData['description_ar'],
     

     'status'=>$validData['status'],
     'image'=>''


 ]);
   // dd($request->all());
 return redirect()->route('dashboard')->with('success','category has been added successfullt');
}
}
