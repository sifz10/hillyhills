<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\CareersPage;

class CareersPageController extends Controller
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
        $get_slider = CareersPage::orderBy('id', 'DESC')->get();
        $edit = CareersPage::where('id', 1)->first();
        return view('dashboard.careers-page.index', ['get_slider' => $get_slider, 'edit' => $edit]);
    }
    public function listing()
    {
        $get_slider = CareersPage::orderBy('id', 'DESC')->get();
        return view('dashboard.careers-page.list', ['get_slider' => $get_slider]);
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
        CareersPage::create([
            'title' => $request['title'],
            'short' => $request['short'],
            'description' => $request['desc'],
            'about_image' => $url
        ]);
        return back()->with("status", "New Slider Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = CareersPage::where('id', $id)->first();
        $get_slider = CareersPage::orderBy('id', 'DESC')->get();
        return view('dashboard.careers-page.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
       // echo "string";die();
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
        
            CareersPage::where('id', '=' ,$request->id)->update([
                'overview_title' => $request->overview_title,
                'title' => $request->title,
                'description' => $request->description,
                'form_title' => $request->form_title,
                'form_sub_description' => $request->form_sub_description,
                'arabic_overview_title' => $request->arabic_overview_title,
                'arabic_title' => $request->arabic_title,
                'arabic_description' => $request->arabic_description,
                'arabic_form_title' => $request->arabic_form_title,
                'arabic_form_sub_description' => $request->arabic_form_sub_description,
                'background_image' => $url]);
        }else{
            CareersPage::where('id', '=' ,$request->id)->update(['overview_title' => $request->overview_title,'title' => $request->title,'description' => $request->description,'form_title' => $request->form_title,'form_sub_description' => $request->form_sub_description,'arabic_overview_title' => $request->arabic_overview_title,
                'arabic_title' => $request->arabic_title,'arabic_description' => $request->arabic_description,'arabic_form_title' => $request->arabic_form_title,
                'arabic_form_sub_description' => $request->arabic_form_sub_description,]);
        }
        return back()->with("status", "Careers Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = CareersPage::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
