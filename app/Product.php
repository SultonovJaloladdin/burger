<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    public $table = 'product';
    
    protected $fillable = [
       'status', 'category_id', 'name', 'summa', 'skidka', 'desc', 'image'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
