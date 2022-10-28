<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\ShareSeries;

class ShareSeriesController extends Controller
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
        $get_slider = ShareSeries::orderBy('id', 'DESC')->get();
        $edit = ShareSeries::where('id', 1)->first();
        return view('dashboard.share-series.index', ['get_slider' => $get_slider, 'edit' => $edit]);
    }
    public function listing()
    {
        $get_slider = ShareSeries::orderBy('id', 'DESC')->get();
        return view('dashboard.share-series.list', ['get_slider' => $get_slider]);
    }
    public function store(Request $request)
    {
        $file = $request->file('image');
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $file->getRealPath();
        $file->getSize();
        $file->getMimeType();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $url = $destinationPath.'/'.$file->getClientOriginalName();
        ShareSeries::create([
            'title' => $request['title'],
            'short' => $request['short'],
            'description' => $request['desc'],
            'about_image' => $url
        ]);
        return back()->with("status", "New Slider Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = ShareSeries::where('id', $id)->first();
        $get_slider = ShareSeries::orderBy('id', 'DESC')->get();
        return view('dashboard.share-series.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        if (!empty($request->image)) {
            $file = $request->file('image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
        
            ShareSeries::where('id', '=' ,$request->id)->update(['title' => $request->title,'series_title' => $request->series_title,'company_name' => $request['company_name'],'image' => $url,'arabic_title' => $request->arabic_title,'arabic_series_title' => $request->arabic_series_title,'arabic_company_name' => $request['arabic_company_name']]);
        }else{
            ShareSeries::where('id', '=' ,$request->id)->update(['title' => $request->title,'series_title' => $request->series_title,'company_name' => $request['company_name'],'arabic_title' => $request->arabic_title,'arabic_series_title' => $request->arabic_series_title,'arabic_company_name' => $request['arabic_company_name']]);
        }
        if (!empty($request->series_image)) {
            $file = $request->file('series_image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
            ShareSeries::where('id', '=' ,$request->id)->update(['series_image' => $url]);
        }
        return back()->with("status", "Share Series Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = ShareSeries::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
