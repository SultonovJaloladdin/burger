<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{   
    use SoftDeletes;
    public $table = 'product';
    
    protected $fillable = [
       'status', 'category_id', 'name', 'summa', 'skidka', 'desc', 'image'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
