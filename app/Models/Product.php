<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = ['user_id','name', 'price', 'description', 'image'];
   protected $hidden = [
    'created_at', 
    'updated_at'
    ];

    protected function setPriceAttribute($value){
        if ($value != 0) {
            $this->attributes['price'] = $value / 100;
        } else {
           $this->attributes['price'] = 0;
        }
    }

    protected function getPriceAttribute(){
        return $this->attributes['price'] * 100;
    }
}
