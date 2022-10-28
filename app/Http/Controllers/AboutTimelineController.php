<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\AboutTimeline;

class AboutTimelineController extends Controller
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
        $get_slider = AboutTimeline::orderBy('id', 'DESC')->get();
        $edit = AboutTimeline::where('id', 1)->first();
        return view('dashboard.about-timeline.index', ['get_slider' => $get_slider, 'edit' => $edit]);
    }
    public function listing()
    {
        $get_slider = AboutTimeline::orderBy('id', 'DESC')->get();
        return view('dashboard.about-timeline.list', ['get_slider' => $get_slider]);
    }
    public function store(Request $request)
    {
        AboutTimeline::create([
            'title' => $request['title'],
            'short' => $request['short'],
            'arabic_title' => $request['arabic_title'],
            'arabic_short' => $request['arabic_short']
        ]);
        return redirect('dashboard/about-timeline/list')->with("status", "New Timeline Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = AboutTimeline::where('id', $id)->first();
        $get_slider = AboutTimeline::orderBy('id', 'DESC')->get();
        return view('dashboard.about-timeline.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        AboutTimeline::where('id', '=' ,$request->id)->update(['title' => $request->title,'short' => $request->short,'arabic_title' => $request->arabic_title,'arabic_short' => $request->arabic_short,'status' => $request->status]);
        return redirect('dashboard/about-timeline/list')->with("status", "About Timeline Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = AboutTimeline::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
