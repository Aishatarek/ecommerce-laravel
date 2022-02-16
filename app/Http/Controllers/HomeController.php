<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){


        $products=Product::all();

        return view('frontend.home' , 
        [

            'products'=> $products

        
        
        
        ]);


     

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

 public function show($id){
     
    $product = Product::findOrFail($id);

    return view('admin.products.show' , ['product'=>$product]);

}





    public function welcome()
    {
        return view('frontend.welcome');
    }
  
}
