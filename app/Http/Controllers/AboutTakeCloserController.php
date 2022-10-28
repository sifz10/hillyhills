<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\AboutTakeCloser;

class AboutTakeCloserController extends Controller
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
        $get_slider = AboutTakeCloser::orderBy('id', 'DESC')->get();
        $edit = AboutTakeCloser::where('id', 1)->first();
        return view('dashboard.about-take-closer.index', ['get_slider' => $get_slider, 'edit' => $edit]);
    }
    public function listing()
    {
        $get_slider = AboutTakeCloser::orderBy('id', 'DESC')->get();
        return view('dashboard.about-take-closer.list', ['get_slider' => $get_slider]);
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
        AboutTakeCloser::create([
            'title' => $request['title'],
            'short' => $request['short'],
            'description' => $request['desc'],
            'about_image' => $url
        ]);
        return back()->with("status", "New Slider Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = AboutTakeCloser::where('id', $id)->first();
        $get_slider = AboutTakeCloser::orderBy('id', 'DESC')->get();
        return view('dashboard.about-take-closer.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        if (!empty($request->image_one)) {
            $file = $request->file('image_one');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
            AboutTakeCloser::where('id', '=' ,$request->id)->update(['image_one' => $url]);
        }
        if (!empty($request->image_two)) {
            $file = $request->file('image_two');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
            AboutTakeCloser::where('id', '=' ,$request->id)->update(['image_two' => $url]);
        }
        if (!empty($request->image_three)) {
            $file = $request->file('image_three');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
            AboutTakeCloser::where('id', '=' ,$request->id)->update(['image_three' => $url]);
        }
        AboutTakeCloser::where('id', '=' ,$request->id)->update(['title' => $request->title,'button_text' => $request->button_text,'arabic_title' => $request->arabic_title,'arabic_button_text' => $request->arabic_button_text]);
        return back()->with("status", "About Us Take Closer Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = AboutTakeCloser::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
