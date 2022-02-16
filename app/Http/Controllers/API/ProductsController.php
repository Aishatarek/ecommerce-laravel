<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    use ApiResponseTrait;

    public function index(){
        $products = Product::all();
        if($products->count()>0){
        return $this->ApiResponse($products ,'return products' , 200);
        }else{
            return $this->ApiResponse(null ,'no products' , 200);

        }
    }
}
