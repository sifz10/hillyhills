<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\ChairmanMessage;

class ChairmanMessageController extends Controller
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
        $get_slider = ChairmanMessage::orderBy('id', 'DESC')->get();
        $edit = ChairmanMessage::where('id', 1)->first();
        return view('dashboard.who-we-are.chairman.index', ['get_slider' => $get_slider, 'edit' => $edit]);
    }
    public function store(Request $request)
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
        }
        if (!empty($request->sign_image)) {
            $file = $request->file('sign_image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $sign_image = $destinationPath.'/'.$file->getClientOriginalName();
        }
        ChairmanMessage::create([
            'name' => $request['name'],
            'position' => $request['position'],
            'description' => $request['description'],
            'arabic_name' => $request['arabic_name'],
            'arabic_position' => $request['arabic_position'],
            'arabic_description' => $request['arabic_description'],
            'image' => $url,
            'sign_image' => $sign_image
        ]);
        return back()->with("status", "New Slider Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = ChairmanMessage::where('id', $id)->first();
        $get_slider = ChairmanMessage::orderBy('id', 'DESC')->get();
        return view('dashboard.who-we-are.chairman.index', ['get_slider' => $get_slider, 'edit' => $edit]);
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
        }
        if (!empty($request->sign_image)) {
            $file = $request->file('sign_image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $sign_image = $destinationPath.'/'.$file->getClientOriginalName();
        }
        if (!empty($request->image) && empty($request->sign_image)) {
            ChairmanMessage::where('id', '=' ,$request->id)->update(['name' => $request->name,'position' => $request->position,'description' => $request->description,'image' => $url,'arabic_name' => $request->arabic_name,'arabic_position' => $request->arabic_position,'arabic_description' => $request->arabic_description]);
        }elseif (empty($request->image) && !empty($request->sign_image)) {
            ChairmanMessage::where('id', '=' ,$request->id)->update(['name' => $request->name,'position' => $request->position,'description' => $request->description,'sign_image' => $sign_image,'arabic_name' => $request->arabic_name,'arabic_position' => $request->arabic_position,'arabic_description' => $request->arabic_description]);
        }elseif (!empty($request->image) && !empty($request->sign_image)) {
            ChairmanMessage::where('id', '=' ,$request->id)->update(['name' => $request->name,'position' => $request->position,'description' => $request->description,'sign_image' => $sign_image,'image' => $url,'arabic_name' => $request->arabic_name,'arabic_position' => $request->arabic_position,'arabic_description' => $request->arabic_description]);
        }else{
            ChairmanMessage::where('id', '=' ,$request->id)->update(['name' => $request->name,'position' => $request->position,'description' => $request->description,'arabic_name' => $request->arabic_name,'arabic_position' => $request->arabic_position,'arabic_description' => $request->arabic_description]);
        }
        return redirect('/dashboard/who-we-are/chairman')->with("status", "Chairman Profile Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = ChairmanMessage::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
