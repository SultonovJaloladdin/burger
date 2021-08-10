<?php

namespace App\Http\Controllers\Admin;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $gets = Contact::latest()->paginate(5);

        return view('admin.contact.index', compact('gets'));
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name'=>'required',
            'phone'=>'required',
            'phone_2'=>'required',
            'instagram'=>'required',
            'facebook'=>'required',
            'telegram'=>'required',
            'tiktok'=>'required',
            'adress'=>'required',
        ]);

        Contact::create($request->all());

        return redirect()->route('admin.contact.index')
        ->with('success','categories created successfully.');
    }

    public function show(Contact $contact)
    {
        return view('admin.contact.show',compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('admin.contact.edit',compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
         request()->validate([
            'name'=>'required',
            'phone'=>'required',
            'phone_2'=>'required',
            'instagram'=>'required',
            'facebook'=>'required',
            'telegram'=>'required',
            'tiktok'=>'required',
            'adress'=>'required',
        ]);


        $contact->update($request->all());


        return redirect()->route('admin.contact.index')
                         ->with('success','categories updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contact.index')
                         ->with('success','categories deleted successfully');
    }
}
