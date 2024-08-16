<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
{
    $contacts = Contact::all();
    return view('index', compact('contacts'));
}
public function showSpecific($id){
    
    $contacts = Contact::find($id);
    return view('show',compact('contacts'));

}

public function create()
{
    return view('create');
}

public function store(Request $request)
{
    $request->validate([ 
        'name' => ['required'],
        'email' =>['required']
      
    ]);

    Contact::create($request->all());
    return redirect('contacts')->with('success', 'Contact created successfully.');
}

public function edit($id)
{
    $contact = Contact::findOrFail($id);
    return view('edit', compact('contact'));
}

public function update(Request $request, $id)
{
    $contact = Contact::findOrFail($id);
    $contact->update($request->all());
    return redirect('contacts')->with('success','Contact updated successfully.');
}

public function delete($id)
{
    $contact = Contact::findOrFail($id);
    $contact->delete();
    return redirect('contacts')->with('success', 'Contact deleted successfully.');
}
public function name_search(Request $request){
    $search = $request->search;
    $contacts = Contact::where('name','LIKE','%'.$search.'%')->orWhere('email',$search)->get();
    return view('index',compact('contacts'));
}
public function name_sort(Request $request){
    $sort = $request->sort_value;
    if($sort == 'name'){
    $contacts = Contact::orderBy('name', 'desc')->get();
    }else{
        $contacts = Contact::orderBy('created_at', 'desc')->get();
    }
    return view('index',compact('contacts'));
  
}

}