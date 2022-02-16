<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name_en','name_ar','description_en','description_ar','description' ,'image','sub_images','status','old_price','current_price','amount'/*,'category_id'*/
    ];



  /*  public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
*/







}
