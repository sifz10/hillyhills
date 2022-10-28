<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\ShareGraph;
use App\Models\ShareGraphTable;

class ShareGraphController extends Controller
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
        $get_slider = ShareGraph::orderBy('id', 'DESC')->get();
        $edit = ShareGraph::where('id', 1)->first();
        $get_slider2 = ShareGraphTable::orderBy('id', 'DESC')->get();
        return view('dashboard.share-graph.index', ['get_slider' => $get_slider, 'edit' => $edit,'get_slider2' => $get_slider2]);
    }
    public function listing()
    {
        $get_slider = ShareGraph::orderBy('id', 'DESC')->get();
        return view('dashboard.share-graph.list', ['get_slider' => $get_slider]);
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
        ShareGraph::create([
            'title' => $request['title'],
            'short' => $request['short'],
            'description' => $request['desc'],
            'about_image' => $url
        ]);
        return back()->with("status", "New Slider Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = ShareGraph::where('id', $id)->first();
        $get_slider = ShareGraph::orderBy('id', 'DESC')->get();
        return view('dashboard.share-graph.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
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
        
            ShareGraph::where('id', '=' ,$request->id)->update(['title' => $request->title,'image' => $url,'arabic_title' => $request->arabic_title]);
        }else{
            ShareGraph::where('id', '=' ,$request->id)->update(['title' => $request->title,'arabic_title' => $request->arabic_title]);
        }
        return back()->with("status", "Share Graph Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = ShareGraph::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
