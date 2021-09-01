<?php

namespace App\Http\Controllers;
use App\Categories;
use App\Product;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $category = Categories::orderBy('id', 'desc')->get();
        
        $all_products = Product::inRandomOrder()->limit(5)->get();
        
        return view('index', compact('category', 'all_products'));
    }
    
    public function category($id)
    {
        $data  = Product::where('category_id', '=', $id)->orderBy('id', 'desc')->get();
        return $data;
    }


}
