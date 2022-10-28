<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\ContactAddresses;

class ContactAddressesController extends Controller
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
        $ContactAddresses = ContactAddresses::orderBy('id', 'DESC')->get();
        //print_r($ContactAddresses);die;
        $edit = ContactAddresses::where('id', 1)->first();
        return view('dashboard.contact-addresses.index', ['ContactAddresses' => $ContactAddresses]);
    }
    public function add()
    {
        $get_slider = ContactAddresses::orderBy('id', 'DESC')->get();
        return view('dashboard.contact-addresses.add', ['get_slider' => $get_slider]);
    }
    public function store(Request $request)
    {
        ContactAddresses::create([
            'title' => $request['title'],
            'website_url' => $request['website_url'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'fax' => $request['fax'],
            'arabic_title' => $request['arabic_title'],
            'arabic_website_url' => $request['arabic_website_url'],
            'arabic_address' => $request['arabic_address'],
            'email' => $request['email']
        ]);
        return redirect('dashboard/contact-addresses')->with("status", "Contact Addresses Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = ContactAddresses::where('id', $id)->first();
        $get_slider = ContactAddresses::orderBy('id', 'DESC')->get();
        return view('dashboard.contact-addresses.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
    }
    public function update(Request $request)
    {
        ContactAddresses::where('id', '=' ,$request->id)->update(['title' => $request->title,'website_url' => $request->website_url,'address' => $request->address,'phone' => $request->phone,'fax' => $request->fax,'email' => $request->email,'arabic_title' => $request->arabic_title,'arabic_website_url' => $request->arabic_website_url,'arabic_address' => $request->arabic_address]);        
        return redirect('dashboard/contact-addresses')->with("status", "Contact Addresses Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = ContactAddresses::where('id',$id)->delete();
        return back()->with("status", "Deleted Successfully.!!");
    }
}
