<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\OrganizationChart;

class OrganizationController extends Controller
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
        $get_slider = OrganizationChart::orderBy('id', 'DESC')->get();
        $edit = OrganizationChart::where('id', 1)->first();
        return view('dashboard.who-we-are.organization-chart.index', ['get_slider' => $get_slider, 'edit' => $edit]);
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
        OrganizationChart::create([
            'image' => $url
        ]);
        return back()->with("status", "Organization Chart Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = OrganizationChart::where('id', $id)->first();
        $get_slider = OrganizationChart::orderBy('id', 'DESC')->get();
        return view('dashboard.about-us.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
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
            OrganizationChart::where('id', '=' ,$request->id)->update(['image' => $url]);
        }
        return redirect('/dashboard/who-we-are/organization-chart')->with("status", "Organization Chart Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = OrganizationChart::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
