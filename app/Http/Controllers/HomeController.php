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
       
        // $contact = new contactlist();
        // $contact->name = $request->name;
        // $contact->email = $request->email;
        // $contact->phone = $request->phone;
        // $contact->address = $request->address;
        // $contact->user_id = Auth::user()->id;
        // $contact->save();
        // return redirect()->back()->with('success', 'Contact Added Successfully');
        return response ()->json ( ['res'=>'Success']);
    }
    
}
