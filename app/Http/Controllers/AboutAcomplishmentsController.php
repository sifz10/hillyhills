<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\AboutAcomplishments;
use App\Models\AboutHily;

class AboutAcomplishmentsController extends Controller
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
        $AboutAcomplishments = AboutAcomplishments::orderBy('id', 'DESC')->get();
        $edit = AboutAcomplishments::where('id', 1)->first();
        $Title = AboutHily::where('id', 1)->first();
        return view('dashboard.about-acomplishments.index', ['AboutAcomplishments' => $AboutAcomplishments,'Title' => $Title]);
    }
    public function add()
    {
        $get_slider = AboutAcomplishments::orderBy('id', 'DESC')->get();
        return view('dashboard.about-acomplishments.add', ['get_slider' => $get_slider]);
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

        AboutAcomplishments::create([
            'year' => $request['year'],
            'image' => $url,
            'detail' => $request['detail'],
            'arabic_detail' => $request['arabic_detail']
        ]);
        return redirect('dashboard/about-acomplishments')->with("status", "Acomplishments Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = AboutAcomplishments::where('id', $id)->first();
        $get_slider = AboutAcomplishments::orderBy('id', 'DESC')->get();
        return view('dashboard.about-acomplishments.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        if(!empty($request->image)) {
            $file = $request->file('image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
            AboutAcomplishments::where('id', '=' ,$request->id)->update(['year' => $request->year,'detail' => $request->detail,'image' => $url,'arabic_detail' => $request->arabic_detail]);
        }else{
           AboutAcomplishments::where('id', '=' ,$request->id)->update(['year' => $request->year,'detail' => $request->detail,'arabic_detail' => $request->arabic_detail]); 
        }
        return redirect('dashboard/about-acomplishments')->with("status", "Acomplishments Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = AboutAcomplishments::where('id',$id)->delete();
        return back()->with("status", "Deleted Successfully.!!");
    }
    public function AcomplishmentsTitle(Request $request)
    {
        AboutHily::where('id', '=' ,$request->id)->update(['acomplishments_title' => $request->acomplishments_title,'arabic_acomplishments_title' => $request->arabic_acomplishments_title]);
        return back()->with("status", "Acomplishments Title Updated Successfully.!!");
    }
}
