<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'contact';

    protected $fillable = [
        'name', 
        'phone', 
        'phone_2', 
        'instagram', 
        'facebook', 
        'telegram', 
        'tiktok', 
        'adress'
    ];
}
