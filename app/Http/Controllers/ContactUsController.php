<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\ContactUs;

class ContactUsController extends Controller
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
        $get_contact = ContactUs::orderBy('id', 'DESC')->get();
        $edit = ContactUs::where('id', 1)->first();
        return view('dashboard.contact-us.index', ['get_contact' => $get_contact, 'edit' => $edit]);
    }
    public function listing()
    {
        $get_contact = ContactUs::orderBy('id', 'DESC')->get();
        return view('dashboard.contact-us.list', ['get_contact' => $get_contact]);
    }
    public function store(Request $request)
    {       
        ContactUs::create([
            'address' => $request['address'],
            'primary_phone' => $request['primary_phone'],
            'secondry_phone' => $request['secondry_phone'],
            'email' => $request['email']
        ]);
        return back()->with("status", "New Contact Info Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = ContactUs::where('id', $id)->first();
        $get_contact = ContactUs::orderBy('id', 'DESC')->get();
        return view('dashboard.contact-us.edit', ['get_contact' => $get_contact, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        ContactUs::where('id', '=' ,$request->id)->update(['title' => $request->title,'contact_us_title' => $request->contact_us_title,'contact_us_overview' => $request->contact_us_overview, 'contact_us_phone'=> $request->contact_us_phone,'contact_us_fax' => $request->contact_us_fax,'contact_us_email' => $request->contact_us_email, 'contact_us_address'=> $request->contact_us_address,'arabic_title'=> $request->arabic_title,'arabic_contact_us_title'=> $request->arabic_contact_us_title,'arabic_contact_us_overview'=> $request->arabic_contact_us_overview,'arabic_contact_us_address'=> $request->arabic_contact_us_address]);
        return back()->with("status", "Contact Us Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = ContactUs::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
