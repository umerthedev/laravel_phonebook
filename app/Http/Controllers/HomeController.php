<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\contactlist;
use App\Models\favoritecontact;
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
    //search contact
    public function search_contact(Request $request)
    {
        $output = '';
        $user = Auth::user();
        $search = $request->search;
        $contact = contactlist::where('user_id',$user->id)->where('name','like','%'.$search.'%')->orWhere('email','like','%'.$search.'%')->orWhere('phone','like','%'.$search.'%')->orWhere('fb_id','like','%'.$search.'%')->orWhere('ig_id','like','%'.$search.'%')->orWhere('address','like','%'.$search.'%')->get();
        
        foreach ($contact as $contactlist) {
            $output.=             
            '<tr>
            <td>'.$contactlist->name.'</td>
            <td>'.$contactlist->phone.'</td>
            <td>'.$contactlist->email.'</td>
            <td>'.$contactlist->fb_id.'</td>
            <td>'.$contactlist->ig_id.'</td>
            <td>'.$contactlist->address.'</td>
            <td><img src="'.asset('contactimage/'.$contactlist->image).'" alt="" style="width: 50px; height: 50px;">
            </td>
            <td>
            <a href="'.url('edit_con',$contactlist->id).'" class="btn btn-primary">Edit</a>
            <a href="'.url('delete_con',$contactlist->id).'" class="btn btn-danger">Delete</a>
            </td>                       
            </tr>';
        }

        return response()->json($output);
    }
    //favorite_contacts_show
    public function favorite_contacts()
    {
        
        return view('admin.favorite_contacts');
    }

    //add favorite contact
    public function addToFav(Request $request,$id)
    {
        $user = Auth::user();
        $contact = contactlist::find($id);
        $favorite = new favoritecontact();
        $favorite->name = $contact->name;
        $favorite->email = $contact->email;
        $favorite->address = $contact->address;
        $favorite->phone = $contact->phone;
        $favorite->image = $contact->image;
        $favorite->user_id = $user->id;
        $favorite->fb_id = $contact->fb_id;
        $favorite->ig_id = $contact->ig_id;
        $favorite->contact_id  = $contact->id;
        $favorite->save();
        return redirect()->back()->with('message', 'Contact Added to Favorite Successfully');
    }
}
