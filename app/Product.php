<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    public $table = 'product';
    
    protected $fillable = [
        'category_id', 'name', 'summa', 'skidka', 'desc', 'image'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
