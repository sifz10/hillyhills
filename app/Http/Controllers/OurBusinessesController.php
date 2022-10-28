<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use Illuminate\Support\Str;
use App\Models\OurBusinesses;

class OurBusinessesController extends Controller
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
        $get_career = OurBusinesses::orderBy('id', 'DESC')->get();
        return view('dashboard.our-businesses.index', ['get_career' => $get_career]);
    }
    public function listing()
    {
        $get_businesses = OurBusinesses::orderBy('id', 'DESC')->get();
        return view('dashboard.our-businesses.list', ['get_businesses' => $get_businesses]);
    }
    public function store(Request $request)
    {
        //echo "<pre>";
        //print_r($request->toArray());die();
        $slug = Str::slug($request->title);
        $arabic_slug = Str::slug($request->arabic_title);
        $file = $request->file('background_image');
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $file->getRealPath();
        $file->getSize();
        $file->getMimeType();
        $destinationPath = 'uploads/businesses';
        $file->move($destinationPath,$file->getClientOriginalName());
        $url = $destinationPath.'/'.$file->getClientOriginalName();

        $file1 = $request->file('logo_image');
        $file1->getClientOriginalName();
        $file1->getClientOriginalExtension();
        $file1->getRealPath();
        $file1->getSize();
        $file1->getMimeType();
        $destinationPath1 = 'uploads/businesses';
        $file1->move($destinationPath1,$file1->getClientOriginalName());
        $url_logo = $destinationPath1.'/'.$file1->getClientOriginalName();
        $timeline_heading = json_encode($request['timeline_heading']);
        $timeline_description = json_encode($request['timeline_description']);
        $arabic_timeline_heading = json_encode($request['arabic_timeline_heading']);
        $arabic_timeline_description = json_encode($request['arabic_timeline_description']);
        OurBusinesses::create([
            'title' => $request['title'],
            'slug' => $slug,
            'short_description' => $request['short_description'],
            'description' => $request['description'],
            'address' => $request['address'],
            'website_link' => $request['website_link'],
            'email' => $request['email'],
            'timeline_heading' => $timeline_heading,
            'timeline_description' => $timeline_description,
            'phone' => $request['phone'],
            'arabic_title' => $request['arabic_title'],
            'arabic_slug' => $arabic_slug,
            'arabic_short_description' => $request['arabic_short_description'],
            'arabic_description' => $request['arabic_description'],
            'arabic_website_link' => $request['arabic_website_link'],
            'arabic_address' => $request['arabic_address'],
            'arabic_phone' => $request['arabic_phone'],
            'arabic_timeline_heading' => $arabic_timeline_heading,
            'arabic_timeline_description' => $arabic_timeline_description,
            'background_image' => $url,
            'logo_image' => $url_logo
        ]);
        return back()->with("status", "New Our Businesses Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = OurBusinesses::where('id', $id)->first();
        $get_businesses = OurBusinesses::orderBy('id', 'DESC')->get();
        return view('dashboard.our-businesses.edit', ['get_businesses' => $get_businesses, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        $slug = Str::slug($request->title);
        $arabic_slug = Str::slug($request->arabic_slug);
        if (!empty($request->background_image)) {
            $file = $request->file('background_image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads/businesses';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
        }
        if (!empty($request->logo_image)) {
            $file = $request->file('logo_image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads/businesses';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url_logo = $destinationPath.'/'.$file->getClientOriginalName();
        }
        $timeline_heading = json_encode($request['timeline_heading']);
        $timeline_description = json_encode($request['timeline_description']);
        $arabic_timeline_heading = json_encode($request['arabic_timeline_heading']);
        $arabic_timeline_description = json_encode($request['arabic_timeline_description']);
        if (!empty($request->background_image) && empty($request->logo_image)) {
            OurBusinesses::where('id', '=' ,$request->id)->update(['title' => $request->title,'slug' => $slug,'description' => $request->description,'short_description' => $request->short_description,'address' => $request->address,'website_link' => $request->website_link,'email' => $request->email,'phone' => $request->phone,'timeline_heading' => $timeline_heading,'timeline_description' => $timeline_description,'background_image' => $url,'arabic_title' => $request->arabic_title,'arabic_slug' => $arabic_slug,'arabic_short_description' => $request->arabic_short_description,'arabic_description' => $request->arabic_description,'arabic_website_link' => $request->arabic_website_link,'arabic_address' => $request->arabic_address,'arabic_phone' => $request->arabic_phone,'arabic_timeline_heading' => $arabic_timeline_heading,'arabic_timeline_description' => $arabic_timeline_description]);
        }elseif (empty($request->background_image) && !empty($request->logo_image)) {
            OurBusinesses::where('id', '=' ,$request->id)->update(['title' => $request->title,'slug' => $slug,'description' => $request->description,'short_description' => $request->short_description,'address' => $request->address,'website_link' => $request->website_link,'email' => $request->email,'phone' => $request->phone,'timeline_heading' => $timeline_heading,'timeline_description' => $timeline_description,'logo_image' => $url_logo,'arabic_title' => $request->arabic_title,'arabic_slug' => $arabic_slug,'arabic_short_description' => $request->arabic_short_description,'arabic_description' => $request->arabic_description,'arabic_website_link' => $request->arabic_website_link,'arabic_address' => $request->arabic_address,'arabic_phone' => $request->arabic_phone,'arabic_timeline_heading' => $arabic_timeline_heading,'arabic_timeline_description' => $arabic_timeline_description]);
        }elseif (!empty($request->background_image) && !empty($request->logo_image)) {
            OurBusinesses::where('id', '=' ,$request->id)->update(['title' => $request->title,'slug' => $slug,'description' => $request->description,'short_description' => $request->short_description,'address' => $request->address,'website_link' => $request->website_link,'email' => $request->email,'phone' => $request->phone,'timeline_heading' => $timeline_heading,'timeline_description' => $timeline_description,'background_image' => $url,'logo_image' => $url_logo,'arabic_title' => $request->arabic_title,'arabic_slug' => $arabic_slug,'arabic_short_description' => $request->arabic_short_description,'arabic_description' => $request->arabic_description,'arabic_website_link' => $request->arabic_website_link,'arabic_address' => $request->arabic_address,'arabic_phone' => $request->arabic_phone,'arabic_timeline_heading' => $arabic_timeline_heading,'arabic_timeline_description' => $arabic_timeline_description]);
        }else{
            OurBusinesses::where('id', '=' ,$request->id)->update(['title' => $request->title,'slug' => $slug,'description' => $request->description,'short_description' => $request->short_description,'address' => $request->address,'website_link' => $request->website_link,'email' => $request->email,'phone' => $request->phone,'timeline_heading' => $timeline_heading,'timeline_description' => $timeline_description,'arabic_title' => $request->arabic_title,'arabic_slug' => $arabic_slug,'arabic_short_description' => $request->arabic_short_description,'arabic_description' => $request->arabic_description,'arabic_website_link' => $request->arabic_website_link,'arabic_address' => $request->arabic_address,'arabic_phone' => $request->arabic_phone,'arabic_timeline_heading' => $arabic_timeline_heading,'arabic_timeline_description' => $arabic_timeline_description]);
        }
        return redirect('/dashboard/our-businesses/list')->with("status", "Our Businesses Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = OurBusinesses::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
