<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\AboutHily;

class AboutHilyController extends Controller
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
        $get_slider = AboutHily::orderBy('id', 'DESC')->get();
        $edit = AboutHily::where('id', 1)->first();
        return view('dashboard.about-hily.index', ['get_slider' => $get_slider, 'edit' => $edit]);
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
        AboutHily::create([
            'title' => $request['title'],
            'short' => $request['short'],
            'description' => $request['desc'],
            'about_image' => $url
        ]);
        return back()->with("status", "New Slider Added Successfully.!!");
    }
    public function update(Request $request)
    {
        if (!empty($request->background_image)) {
            $file = $request->file('background_image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
        
            AboutHily::where('id', '=' ,$request->id)->update([
                'overview_title' => $request->overview_title,
                'title' => $request->title,
                'description_one' => $request->description_one,
                'description_two' => $request->description_two,
                'experience' => $request->experience,
                'background_image' => $url,
                'arabic_overview_title' => $request->arabic_overview_title,
                'arabic_title' => $request->arabic_title,
                'arabic_description_one' => $request->arabic_description_one,
                'arabic_description_two' => $request->arabic_description_two,
                'arabic_experience' => $request->arabic_experience
            ]);
        }else{
            AboutHily::where('id', '=' ,$request->id)->update([
                'overview_title' => $request->overview_title,
                'title' => $request->title,
                'description_one' => $request->description_one,
                'description_two' => $request->description_two,
                'experience' => $request->experience,
                'arabic_overview_title' => $request->arabic_overview_title,
                'arabic_title' => $request->arabic_title,
                'arabic_description_one' => $request->arabic_description_one,
                'arabic_description_two' => $request->arabic_description_two,
                'arabic_experience' => $request->arabic_experience
            ]);
        }
        if (!empty($request->image)) {
            $file = $request->file('image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url1 = $destinationPath.'/'.$file->getClientOriginalName();
            AboutHily::where('id', '=' ,$request->id)->update(['image' => $url1]);
        }
        return back()->with("status", "About Us Updated Successfully.!!");
    }

    public function delete($id)
    {
        //$delete = AboutHily::where('id',$id)->delete();
        return back()->with("status", "Deleted Successfully.!!");
    }
}
