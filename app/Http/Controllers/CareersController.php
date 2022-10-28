<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\Careers;
use App\Models\CareersApplication;

class CareersController extends Controller
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
    public function GetApplications()
    {
        $get_career = CareersApplication::orderBy('id', 'DESC')->get();
        return view('dashboard.careers-applications', ['get_career' => $get_career]);
    }
    public function index()
    {
        $get_career = Careers::orderBy('id', 'DESC')->get();
        $edit = Careers::where('id', 1)->first();
        return view('dashboard.careers.index', ['get_career' => $get_career, 'edit' => $edit]);
    }
    public function listing()
    {
        $get_career = Careers::orderBy('id', 'DESC')->get();
        return view('dashboard.careers.list', ['get_career' => $get_career]);
    }
    public function store(Request $request)
    {
        $file = $request->file('career_image');
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $file->getRealPath();
        $file->getSize();
        $file->getMimeType();
        $destinationPath = 'uploads/career';
        $file->move($destinationPath,$file->getClientOriginalName());
        $url = $destinationPath.'/'.$file->getClientOriginalName();
        Careers::create([
            'title' => $request['title'],
            'short_description' => $request['short_description'],
            'description' => $request['description'],
            'arabic_title' => $request['arabic_title'],
            'arabic_short_description' => $request['arabic_short_description'],
            'arabic_description' => $request['arabic_description'],
            'career_image' => $url
        ]);
        return back()->with("status", "New Careers Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = Careers::where('id', $id)->first();
        $get_career = Careers::orderBy('id', 'DESC')->get();
        return view('dashboard.careers.edit', ['get_career' => $get_career, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        if (!empty($request->career_image)) {
            $file = $request->file('career_image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads/career';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
        
            Careers::where('id', '=' ,$request->id)->update(['title' => $request->title,'description' => $request->description,'short_description' => $request['short_description'],'career_image' => $url,'arabic_title' => $request->arabic_title,'arabic_short_description' => $request->arabic_short_description,'arabic_description' => $request->arabic_description]);
        }else{
            Careers::where('id', '=' ,$request->id)->update(['title' => $request->title,'short_description' => $request['short_description'],'description' => $request->description,'arabic_title' => $request->arabic_title,'arabic_short_description' => $request->arabic_short_description,'arabic_description' => $request->arabic_description]);
        }
        return redirect('/dashboard/careers')->with("status", "Careers Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = Careers::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
