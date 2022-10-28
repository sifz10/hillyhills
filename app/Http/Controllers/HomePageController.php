<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\HomeSliders;

class HomePageController extends Controller
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
        $get_slider = HomeSliders::orderBy('id', 'DESC')->get();
        return view('dashboard.home-sliders.index', ['get_slider' => $get_slider]);
    }
    public function listing()
    {
        $get_slider = HomeSliders::orderBy('id', 'DESC')->get();
        return view('dashboard.home-sliders.list', ['get_slider' => $get_slider]);
    }
    public function store(Request $request)
    {
        $file = $request->file('cover_image');
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $file->getRealPath();
        $file->getSize();
        $file->getMimeType();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $url = $destinationPath.'/'.$file->getClientOriginalName();
        HomeSliders::create([
            'title' => $request['title'],
            'description' => $request['desc'],
            'arabic_title' => $request['arabic_title'],
            'arabic_description' => $request['arabic_description'],
            'slider_image' => $url
        ]);
        return back()->with("status", "New Slider Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = HomeSliders::where('id', $id)->first();
        $get_slider = HomeSliders::orderBy('id', 'DESC')->get();
        return view('dashboard.home-sliders.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        if (!empty($request->cover_image)) {
            $file = $request->file('cover_image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
        
            HomeSliders::where('id', '=' ,$request->id)->update(['title' => $request->title,'description' => $request->desc, 'slider_image' => $url, 'arabic_title' => $request->arabic_title,'arabic_description' => $request->arabic_description,'status' => $request->status]);
        }else{
            HomeSliders::where('id', '=' ,$request->id)->update(['title' => $request->title,'description' => $request->desc, 'arabic_title' => $request->arabic_title,'arabic_description' => $request->arabic_description,'status' => $request->status]);
        }
        return redirect('/home-sliders-list')->with("status", "Category Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = HomeSliders::where('id',$id)->delete();
        return back()->with("status", "Home Slider Deleted Successfully.!!");
    }
}
