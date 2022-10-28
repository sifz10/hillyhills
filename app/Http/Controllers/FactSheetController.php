<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\FactSheet;

class FactSheetController extends Controller
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
        $get_slider = FactSheet::orderBy('id', 'DESC')->get();
        $edit = FactSheet::where('id', 1)->first();
        return view('dashboard.fact-sheet.index', ['get_slider' => $get_slider, 'edit' => $edit]);
    }
    public function listing()
    {
        $get_slider = FactSheet::orderBy('id', 'DESC')->get();
        return view('dashboard.fact-sheet.list', ['get_slider' => $get_slider]);
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
        FactSheet::create([
            'title' => $request['title'],
            'short' => $request['short'],
            'description' => $request['desc'],
            'about_image' => $url
        ]);
        return back()->with("status", "New Slider Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = FactSheet::where('id', $id)->first();
        $get_slider = FactSheet::orderBy('id', 'DESC')->get();
        return view('dashboard.fact-sheet.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
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
        
            FactSheet::where('id', '=' ,$request->id)->update(['title' => $request->title,'market' => $request->market,'symbol' => $request['symbol'],'isin' => $request['isin'],'industry' => $request['industry'],'description' => $request['description'],'image' => $url,'arabic_title' => $request->arabic_title,'arabic_market' => $request->arabic_market,'arabic_symbol' => $request['arabic_symbol'],'arabic_isin' => $request['arabic_isin'],'arabic_industry' => $request['arabic_industry'],'arabic_description' => $request['arabic_description']]);
        }else{
            FactSheet::where('id', '=' ,$request->id)->update(['title' => $request->title,'market' => $request->market,'symbol' => $request['symbol'],'isin' => $request['isin'],'industry' => $request['industry'],'description' => $request['description'],'arabic_title' => $request->arabic_title,'arabic_market' => $request->arabic_market,'arabic_symbol' => $request['arabic_symbol'],'arabic_isin' => $request['arabic_isin'],'arabic_industry' => $request['arabic_industry'],'arabic_description' => $request['arabic_description']]);
        }
        if (!empty($request->pdf)) {
            $file = $request->file('pdf');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
            FactSheet::where('id', '=' ,$request->id)->update(['pdf' => $url]);
        }
        return back()->with("status", "Fact Sheet Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = FactSheet::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
