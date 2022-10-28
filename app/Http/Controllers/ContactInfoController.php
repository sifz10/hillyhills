<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\ContactInfo;

class ContactInfoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $get_contact = ContactInfo::orderBy('id', 'DESC')->get();
        $edit = ContactInfo::where('id', 1)->first();
        return view('dashboard.contact-info.index', ['get_contact' => $get_contact, 'edit' => $edit]);
    }
    public function listing()
    {
        $get_contact = ContactInfo::orderBy('id', 'DESC')->get();
        return view('dashboard.contact-info.list', ['get_contact' => $get_contact]);
    }
    public function store(Request $request)
    {       
        ContactInfo::create([
            'address' => $request['address'],
            'primary_phone' => $request['primary_phone'],
            'secondry_phone' => $request['secondry_phone'],
            'arabic_address' => $request['arabic_address'],
            'email' => $request['email']
        ]);
        return back()->with("status", "New Contact Info Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = ContactInfo::where('id', $id)->first();
        $get_contact = ContactInfo::orderBy('id', 'DESC')->get();
        return view('dashboard.contact-info.edit', ['get_contact' => $get_contact, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        ContactInfo::where('id', '=' ,$request->id)->update(['address' => $request->address,'primary_phone' => $request->primary_phone,'secondry_phone' => $request->secondry_phone, 'email'=> $request->email, 'arabic_address' => $request->arabic_address]);
        return redirect('/dashboard/contact-info')->with("status", "Contact Info Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = ContactInfo::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
