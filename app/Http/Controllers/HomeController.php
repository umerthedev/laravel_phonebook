<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\contactlist;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
    public function home()
    {
        return view('home.index');
    }
    public function add_contact()
    {
        return view('admin.add_contact');
    }

    public function upload_contact(Request $request)
    {

        $user = Auth::user();
        $contact = new contactlist();
        
        $image = $request->file;
        if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('contactimage', $imagename);
        $contact->image = $imagename;
        }
        
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        // $contact->image = $filePath;
        $contact->user_id = $user->id;
        $contact->fb_id = $request->fb_id;
        $contact->ig_id = $request->ig_id;
        $contact->save();
        return response ()->json ( ['success'=>'Contact Added Successfylly']);
    }

    public function show_contact()
    {
        $user = Auth::user();
        $contact = contactlist::where('user_id',$user->id)->get();
        return view('admin.show_contact',compact('contact'));
    }
    
    //edit contact
    public function edit_con($id)
    {
        $contact = contactlist::find($id);
        return view('admin.edit_contact',compact('contact'));
    }
    //update contact
    public function update_contact(Request $request,$id)
    {
        $contact = contactlist::find($id);
        $image = $request->file;
        if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('contactimage', $imagename);
        $contact->image = $imagename;
        }
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->fb_id = $request->fb_id;
        $contact->ig_id = $request->ig_id;
        $contact->save();
        return redirect()->back()->with('message', 'Contact Updated Successfully');
    }
    //delete contact
    public function delete_con($id)
    {
        $contact = contactlist::find($id);
        $contact->delete();
        return redirect()->back()->with('message', 'Contact Deleted Successfully');
    }
}
