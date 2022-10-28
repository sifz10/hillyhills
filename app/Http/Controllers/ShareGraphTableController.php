<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\ShareGraphTable;

class ShareGraphTableController extends Controller
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
        $get_slider = ShareGraphTable::orderBy('id', 'DESC')->get();
        $edit = ShareGraphTable::where('id', 1)->first();
        return view('dashboard.share-graph-table.index', ['get_slider' => $get_slider, 'edit' => $edit]);
    }
    public function listing()
    {
        $get_slider = ShareGraphTable::orderBy('id', 'DESC')->get();
        return view('dashboard.share-graph-table.list', ['get_slider' => $get_slider]);
    }
    public function store(Request $request)
    {
        ShareGraphTable::create([
            'title' => $request['title'],
            'arabic_title' => $request['arabic_title'],
            'last' => $request['last'],
            'high' => $request['high'],
            'low' => $request['low'],
            'average' => $request['average'],
            'percent' => $request['percent'],
            'bid' => $request['bid'],
            'ask' => $request['ask'],
            'valume' => $request['valume'],
        ]);
        return redirect('dashboard/share-graph-table/list')->with("status", "New Share Graph Table Successfully.!!");
    }
    public function edit($id)
    {
        $edit = ShareGraphTable::where('id', $id)->first();
        $get_slider = ShareGraphTable::orderBy('id', 'DESC')->get();
        return view('dashboard.share-graph-table.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        ShareGraphTable::where('id', '=' ,$request->id)->update(['title' => $request['title'],'last' => $request['last'],'high' => $request['high'],'low' => $request['low'],'average' => $request['average'],'percent' => $request['percent'],'bid' => $request['bid'],'ask' => $request['ask'],'valume' => $request['valume'],'arabic_title' => $request['arabic_title']]);
        return redirect('dashboard/share-graph-table')->with("status", "Share Graph Table Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = ShareGraphTable::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
