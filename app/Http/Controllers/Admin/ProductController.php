<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Product;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{

        function index(){
    
        }
        public function products(){


            $products=Product::all();
    
            return view('admin.products.all' , 
            [
    
                'products'=> $products
    
            
            
            
            ]);
    
    
         
    
        }
 
    
    
    
        public function create()
        {
            return view('admin.products.create');
        }

        public function store(Request $request) {
    
            $validData=$request->validate([
                'name_en'=>'required | max:200 | min:5 | string',
                'name_ar'=>'required | max:200 | min:5 | string',

                'description_en'=>'required | max:200 | min:15 | string',
                'description_ar'=>'required | max:200 | min:15 | string',

                'image'=>'required',
                'sub_images'=>'required',
                'status'=>'required',
                'old_price'=>'required',
                'current_price'=>'required',
                'amount'=>'required',
              /*  'category_id'=>'required'*/
        
            ]);
            $product = new Product;
            $product->name_en = $request->name_en;
            $product->name_ar = $request->name_ar;
            $product->description_en = $request->description_en;  
            $product->description_ar = $request->description_ar;
      
            if($request->hasFile('image')){
                $image = $request->image;
                $imgExtension = $image->extension();
                $imageName = time() . "." . $imgExtension;
                $image->move(public_path('images/products') , $imageName);
            }
            $product->image = $imageName ;
            if($request->hasFile('sub_images')){
                $sub_images = $request->sub_images;
                $imgExtension2 = $sub_images->extension();
                $imageName2 = (time()+1) . "." . $imgExtension2;
                $sub_images->move(public_path('images/products') , $imageName2);
            }
            $product->sub_images = $imageName2 ;
            $product->status = $request->status;
            $product->old_price = $request->old_price;
            $product->current_price = $request->current_price;
            $product->amount = $request->amount;
          /*  $product->category_id = $request->category_id;*/

           /*  $user= Product::create([
             'name'=>$validData['name'],
             'description'=>$validData['description'],
             'image'=>$validData['description'],
             'sub_images'=>$validData['sub_images'],
             'status'=>$validData['status'],
    
             'old_price'=>$validData['old_price'],
             'current_price'=>$validData['current_price'],
             'amount'=>$validData['amount'],
             'category_id'=>$validData['category_id'],
        
         ]);*/

           // dd($request->all());
           $product->save();

         return redirect()->route('dashboard')->with('success','Product has been added successfullt');
        }
        public function delete($id){
     
            $product = Product::findOrFail($id);
            File::delete('images/products/'. $product->image);
            File::delete('images/products/'. $product->sub_images);

            $product->delete();
             return redirect()->route('dashboard')->with('success' ,'User has been deleted successfully');
     
        }
        public function show($id){
     
            $product = Product::findOrFail($id);
      
            return view('admin.products.show' , ['product'=>$product]);
     
        }
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       

       
        public function edit($id){
            $product= Product::findOrFail($id);
             //return redirect()->route('products.edit',['product'=>$product]);
             return view('admin.products.edit',['product'=>$product]);
        }
     
        public function update(Request $request , $id){
     
            $product= Product::findOrFail($id);
            if($request->hasFile('sub_images') && $request->hasFile('image')){
                File::delete('images/products/'. $product->sub_images);
                File::delete('images/products/'. $product->image);
                $image = $request->image ;
                $imgExtension = $image->extension();
                $imageName = time() . "." . $imgExtension;
                $image->move(public_path('images/products') , $imageName);

             $image2 = $request->sub_images ;
             $imgExtension2= $image2->extension();
             $imageName2 = (time()+1) . "." . $imgExtension2;
             $image2->move(public_path('images/products') , $imageName2);
             $product->update([
                 'name_en'=>$request->name_en,
                 'name_ar'=>$request->name_ar,
 
                 'description_en'=>$request->description_en,
                 'description_ar'=>$request->description_ar,
                 'image'=> $imageName,

 
                 'sub_images'=> $imageName2,
                 'status'=>$request->status,
                 'old_price'=>$request->old_price,
                 'current_price'=>$request->current_price,
                 'amount'=>$request->amount, 
              ]);
     
            }
            elseif($request->hasFile('image')){
                File::delete('images/products/'. $product->image);
             $image = $request->image ;
             $imgExtension = $image->extension();
             $imageName = time() . "." . $imgExtension;
             $image->move(public_path('images/products') , $imageName);
             $product->update([
                 'name_en'=>$request->name_en,
                 'name_ar'=>$request->name_ar,
 
                 'description_en'=>$request->description_en,
                 'description_ar'=>$request->description_ar,
 
                 'image'=>$imageName,
                 'status'=>$request->status,
                 'old_price'=>$request->old_price,
                 'current_price'=>$request->current_price,
                 'amount'=>$request->amount, 
              ]);
     
            }
            elseif($request->hasFile('sub_images')){
                File::delete('images/products/'. $product->sub_images);
             $image2 = $request->sub_images ;
             $imgExtension2= $image2->extension();
             $imageName2 = (time()+1) . "." . $imgExtension2;
             $image2->move(public_path('images/products') , $imageName2);
             $product->update([
                 'name_en'=>$request->name_en,
                 'name_ar'=>$request->name_ar,
 
                 'description_en'=>$request->description_en,
                 'description_ar'=>$request->description_ar,
 
                 'sub_images'=>$imageName2,
                 'status'=>$request->status,
                 'old_price'=>$request->old_price,
                 'current_price'=>$request->current_price,
                 'amount'=>$request->amount, 
              ]);
     
            }
           else{ $product->update([
                'name_en'=>$request->name_en,
                'name_ar'=>$request->name_ar,

                'description_en'=>$request->description_en,
                'description_ar'=>$request->description_ar,
                'status'=>$request->status,
                'old_price'=>$request->old_price,
                'current_price'=>$request->current_price,
                'amount'=>$request->amount, 
          
            ]);}
         //  return redirect()->back();
         return redirect()->route('dashboard')->with('success' ,'User has been deleted successfully');
     
            
        }
      
     
        public function searchByName(Request $request){
            if( $request->name_en){
            $name_en= $request->name_en;
            $product= DB::table('products')->where('name_en','=',$name_en)->get();
                return view('admin.products.result' , ['product'=>$product]);
            }else{


                $name_ar= $request->name_ar;

                $product= DB::table('products')->where('name_ar','=',$name_ar)->get();
                    return view('admin.products.result' , ['product'=>$product]);
            }
     }
    









       }
    
