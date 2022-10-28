<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\LeadershipTeam;

class LeadershipTeamController extends Controller
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
        $LeadershipTeam = LeadershipTeam::orderBy('id', 'DESC')->get();
        $edit = LeadershipTeam::where('id', 1)->first();
        return view('dashboard.who-we-are.leadership-team.index', ['LeadershipTeam' => $LeadershipTeam]);
    }
    public function add()
    {
        $get_slider = LeadershipTeam::orderBy('id', 'DESC')->get();
        return view('dashboard.who-we-are.leadership-team.add', ['get_slider' => $get_slider]);
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
        LeadershipTeam::create([
            'name' => $request['name'],
            'position' => $request['position'],
            'image' => $url,
            'description' => $request['description'],
            'arabic_name' => $request['arabic_name'],
            'arabic_position' => $request['arabic_position'],
            'arabic_description' => $request['arabic_description']
        ]);
        return redirect('dashboard/who-we-are/leadership-team')->with("status", "New Leadership Team Member Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = LeadershipTeam::where('id', $id)->first();
        $get_slider = LeadershipTeam::orderBy('id', 'DESC')->get();
        return view('dashboard.who-we-are.leadership-team.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
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
            LeadershipTeam::where('id', '=' ,$request->id)->update(['name' => $request->name,'position' => $request->position,'image' => $url,'description' => $request->description,'arabic_name' => $request->arabic_name,'arabic_position' => $request->arabic_position,'arabic_description' => $request->arabic_description]);
        }else{
           LeadershipTeam::where('id', '=' ,$request->id)->update(['name' => $request->name,'position' => $request->position,'description' => $request->description,'arabic_name' => $request->arabic_name,'arabic_position' => $request->arabic_position,'arabic_description' => $request->arabic_description]); 
        }
        return redirect('dashboard/who-we-are/leadership-team')->with("status", "Leadership Team Member Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = LeadershipTeam::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
