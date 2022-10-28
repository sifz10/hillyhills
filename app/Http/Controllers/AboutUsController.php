<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\AboutUs;

class AboutUsController extends Controller
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
        $get_slider = AboutUs::orderBy('id', 'DESC')->get();
        $edit = AboutUs::where('id', 1)->first();
        return view('dashboard.about-us.index', ['get_slider' => $get_slider, 'edit' => $edit]);
    }
    public function listing()
    {
        $get_slider = AboutUs::orderBy('id', 'DESC')->get();
        return view('dashboard.about-us.list', ['get_slider' => $get_slider]);
    }
    public function store(Request $request)
    {
        $file = $request->file('about_image');
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $file->getRealPath();
        $file->getSize();
        $file->getMimeType();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $url = $destinationPath.'/'.$file->getClientOriginalName();
        AboutUs::create([
            'title' => $request['title'],
            'short' => $request['short'],
            'description' => $request['desc'],
            'arabic_title' => $request['arabic_title'],
            'arabic_short' => $request['arabic_short'],
            'arabic_description' => $request['arabic_description'],
            'about_image' => $url
        ]);
        return back()->with("status", "New Slider Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = AboutUs::where('id', $id)->first();
        $get_slider = AboutUs::orderBy('id', 'DESC')->get();
        return view('dashboard.about-us.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        if (!empty($request->about_image)) {
            $file = $request->file('about_image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
        
            AboutUs::where('id', '=' ,$request->id)->update(['title' => $request->title,'description' => $request->description,'short' => $request['short'],'about_image' => $url,'arabic_title' => $request->arabic_title,'arabic_description' => $request->arabic_description,'arabic_short' => $request->arabic_short]);
        }else{
            AboutUs::where('id', '=' ,$request->id)->update(['title' => $request->title,'short' => $request['short'],'description' => $request->description,'arabic_title' => $request->arabic_title,'arabic_description' => $request->arabic_description,'arabic_short' => $request->arabic_short]);
        }
        return back()->with("status", "About Us Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = AboutUs::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
