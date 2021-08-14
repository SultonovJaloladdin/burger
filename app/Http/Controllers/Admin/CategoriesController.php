<?php

namespace App\Http\Controllers\Admin;
use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $gets = Categories::latest()->paginate(6);

        return view('admin.categories.index', compact('gets'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name'=>'required',
            'desc'=>'required',
            'image'=>'required|file|mimes:jpg,jpeg,bnp,png|max:2048'
        ]);
         //Upload image to  store
        $img_name = $request->file('image')->store('category',['disk'=>'public']);

        $data = [
            'name' => $request->name,
            'desc' => $request->desc,
            'image' => $img_name
        ];

        Categories::create($data);

        return redirect()->route('admin.categories.index')
        ->with('success','categories created successfully.');
    }

    public function show(Categories $category)
    {
        return view('admin.categories.show',compact('category'));
    }

    public function edit(Categories $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    public function update(Request $request, Categories $category)
    {
        request()->validate([
            'name'=>'required',
            'desc'=>'required',
            'image'=>'nullable|file|mimes:jpg,jpeg,bnp,png|max:2048'
        ]);
        
        $data = [
            'name' => $request->name,
            'desc' => $request->desc,
        ];

        if ($request->file('image')) { 
            //Upload image to  store
            $img_name = $request->file('image')->store('category', ['disk'=>'public']);
            $data['image'] = $img_name;
        }
        $category->update($data);

        return redirect()->route('admin.categories.index')
                         ->with('success','categories updated successfully');
    }

    public function destroy(Categories $category)
    {
        $category->products()->delete();
        $category->delete();

        return redirect()->route('admin.categories.index')
                         ->with('success','categories deleted successfully');
    }
}

