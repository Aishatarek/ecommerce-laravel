<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $filltable=[
       'comment','status','product_id','user_id'

   ];



//relation ships
/*public function product(){
    return $this->belongsTo(Product::class);
}*/
public function user(){
    return $this->belongsTo(User::class);
    }





   
}
