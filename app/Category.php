<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title_en','title_ar','description_en', 'description_ar','status','image'
    ];

 /*  public function products(){
        return $this->hasMany(Product::class);
    }*/
}
