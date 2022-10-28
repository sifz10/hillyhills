<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\InvestorContact;

class InvestorContactController extends Controller
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
        $get_slider = InvestorContact::orderBy('id', 'DESC')->get();
        $edit = InvestorContact::where('id', 1)->first();
        return view('dashboard.investor-contact.index', ['get_slider' => $get_slider, 'edit' => $edit]);
    }
    public function listing()
    {
        $get_slider = InvestorContact::orderBy('id', 'DESC')->get();
        return view('dashboard.investor-contact.list', ['get_slider' => $get_slider]);
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
        InvestorContact::create([
            'title' => $request['title'],
            'overview' => $request['overview'],
            'arabic_title' => $request['arabic_title'],
            'arabic_overview' => $request['arabic_overview'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'image' => $url
        ]);
        return back()->with("status", "InvestorContact Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = InvestorContact::where('id', $id)->first();
        $get_slider = InvestorContact::orderBy('id', 'DESC')->get();
        return view('dashboard.about-us.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        //print_r($request->toArray());die;
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
        
            InvestorContact::where('id', '=' ,$request->id)->update(['title' => $request->title,'overview' => $request->overview,'phone' => $request['phone'],'email' => $request['email'],'image' => $url,'arabic_title' => $request->arabic_title,'arabic_overview' => $request->arabic_overview]);
        }else{
            InvestorContact::where('id', '=' ,$request->id)->update([
                'title' => $request->title,
                'overview' => $request->overview,
                'phone' => $request->phone,
                'email' => $request->email,
                'arabic_title' => $request->arabic_title,
                'arabic_overview' => $request->arabic_overview
            ]);
        }
        return back()->with("status", "Investor Contact Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = InvestorContact::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
