<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\AboutVisionSection;

class AboutVisionSectionController extends Controller
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
        $AboutVisionSection = AboutVisionSection::orderBy('id', 'DESC')->get();
        return view('dashboard.about-vision-section.index', ['AboutVisionSection' => $AboutVisionSection]);
    }
    public function add()
    {
        $get_slider = AboutVisionSection::orderBy('id', 'DESC')->get();
        return view('dashboard.about-vision-section.add', ['get_slider' => $get_slider]);
    }
    public function store(Request $request)
    {
        $validate = AboutVisionSection::where('selected_year', $request->selected_year)->where('quarter', $request->quarter)->count();
        if ($validate == 1) {
            return back()->with("error", "Quarter data already exists.");
        }else{
            $file = $request->file('image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();

            $file1 = $request->file('pdf');
            $file1->getClientOriginalName();
            $file1->getClientOriginalExtension();
            $file1->getRealPath();
            $file1->getSize();
            $file1->getMimeType();
            $destinationPath1 = 'uploads';
            $file1->move($destinationPath1,$file1->getClientOriginalName());
            $url1 = $destinationPath1.'/'.$file1->getClientOriginalName();
            AboutVisionSection::create([
                'selected_year' => $request['selected_year'],
                'title' => $request['title'],
                'image' => $url,
                'pdf' => $url1,
                'quarter' => $request['quarter'],
                'publish_date' => $request['publish_date']
            ]);
            return redirect('dashboard/about-vision-section')->with("status", "Quarterly Report Added Successfully.!!");
        }
    }
    public function edit($id)
    {
        $edit = AboutVisionSection::where('id', $id)->first();
        return view('dashboard.about-vision-section.edit', ['edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        AboutVisionSection::where('id', '=' ,$request->id)->update(['title' => $request->title,'sub_title' => $request->sub_title,'detail' => $request->detail,'arabic_title' => $request->arabic_title,'arabic_sub_title' => $request->arabic_sub_title,'arabic_detail' => $request->arabic_detail]);
        return redirect('dashboard/about-vision-section')->with("status", "About Vision Section Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = AboutVisionSection::where('id',$id)->delete();
        return back()->with("status", "Deleted Successfully.!!");
    }
}
