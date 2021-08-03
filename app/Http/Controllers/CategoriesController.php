<?php

namespace App\Http\Controllers;
use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $gets = Categories::latest()->paginate(5);

        return view('categories.index', compact('gets'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name'=>'required',
            'desc'=>'required',
            'image'=>'required'
        ]);

        Categories::create($request->all());

        return redirect()->route('categories.index')
        ->with('success','categories created successfully.');
    }

    public function show(Categories $category)
    {
        return view('categories.show',compact('category'));
    }

    public function edit(Categories $category)
    {
        return view('categories.edit',compact('category'));
    }

    public function update(Request $request, Categories $category)
    {
         request()->validate([
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required'
        ]);


        $category->update($request->all());


        return redirect()->route('categories.index')
                         ->with('success','categories updated successfully');
    }

    public function destroy(Categories $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('success','categories deleted successfully');
    }
}

