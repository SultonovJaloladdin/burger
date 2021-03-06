<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Image;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::latest()->paginate(10);

        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
    //    dd($request->all());
        request()->validate([
            'name'=>'required',
            'status'=>'boolean',
            'category_id'=>'required',
            'name'=>'required',
            'summa'=>'required',
            'skidka'=>'nullable',
            'image'=>'required|file|mimes:jpg,jpeg,bnp,png|max:2048'
        ]);
         //Upload image to  store
        $img_name = $request->file('image')->store('product',['disk'=>'public']);
        // //Create thumbnail
        // $full_path = storage_path('app/public/'.$img_name);
        // $full_path_thumb = storage_path('app/public/thumbs/'.$img_name);
        // $thumb = Image::make($full_path);
        // //Proporsiyani to'g'irlash
        // $thumb->fit(290, 290, function($constraint) {
        //     $constraint->aspectRatio();
        // })->save($full_path_thumb);
        $data = [
            'name' => $request->name,
            'status' => $request->status ?? false,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'summa' => $request->summa,
            'skidka' => $request->skidka,
            'desc' => $request->desc,
            'image' => $img_name,
          //  'thumb' => 'thumbs/'.$img_name,
        ];

        Product::create($data);

        return redirect()->route('admin.product.index')
        ->with('success','categories created successfully.');
    }

    public function show(Product $product)
    {
        return view('admin.product.show',compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request, Product $product)
    {
         request()->validate([
            'name'=>'required',
            'status'=>'boolean',
            'category_id'=>'required',
            'name'=>'required',
            'summa'=>'required',
            'skidka'=>'nullable',
            'image'=>'nullable|file|mimes:jpg,jpeg,bnp,png|max:2048'
        ]);

        $data = [
            'name' => $request->name,
            'status' => $request->status ?? false,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'summa' => $request->summa,
            'skidka' => $request->skidka,
            'desc' => $request->desc,
        ];

        if ($request->file('image')) { 
            //Upload image to  store
            $img_name = $request->file('image')->store('product', ['disk'=>'public']);
            $data['image'] = $img_name;
        }

        $product->update($data);


        return redirect()->route('admin.product.index')
                         ->with('success','categories updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.index')
                         ->with('success','categories deleted successfully');
    }
}
