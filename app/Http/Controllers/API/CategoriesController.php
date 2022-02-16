<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Validator, Input, Redirect; 
class CategoriesController extends Controller
{
    use ApiResponseTrait;

    //

        public function index(){
            $categories = Category::all();
            if($categories->count()>0){
            return $this->ApiResponse($categories ,'return categories' , 200);
            }else{
                return $this->ApiResponse(null ,'no categories' , 200);
    
            }
        

         }
         public function destroy(Request $request){
             $cate= Category::findOrFail($request->id);
             $cate->delete();
             return $this->ApiResponse(null ,'the category deleted successfully' , 200);


         }
         public function store(Request $request){
             $data= Validator::make($request->all(),[
                 'title_en'=>'string|min:5|max:200',
                 'title_ar'=>'string|min:5|max:200',
                 'description_en'=>'string|min:15|max:500',
                 'description_ar'=>'string|min:15|max:500',

             ]);
             if($data->fails()){
                return $this->ApiResponse(null ,$data->errors() , 200);

             }else{
                 if($request->hasFile('image')){
                     $image=$request->image;
                     $imageName= time().".".$image->getClientOriginalExtension();
                     $image->move(public_path('images/categories') , $imageName);
                     $category= Category::create([
                        'title_en'=>$request['title_en'],
                        'title_ar'=>$request['title_ar'],
                        'description_en'=>$request['description_en'],
                        'description_ar'=>$request['description_ar'],
                        
                   
                        'image'=>$imageName
                   
                   
                    ]);
                 }
              
                return $this->ApiResponse($category ,'new category created successfully' , 201);

             }

         }
}
