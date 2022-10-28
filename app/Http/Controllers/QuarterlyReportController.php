<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\QuarterlyReport;

class QuarterlyReportController extends Controller
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
        $QuarterlyReport = QuarterlyReport::orderBy('id', 'DESC')->get();
        $edit = QuarterlyReport::where('id', 1)->first();
        return view('dashboard.quarterly-report.index', ['QuarterlyReport' => $QuarterlyReport]);
    }
    public function add()
    {
        $get_slider = QuarterlyReport::orderBy('id', 'DESC')->get();
        return view('dashboard.quarterly-report.add', ['get_slider' => $get_slider]);
    }
    public function store(Request $request)
    {
        $validate = QuarterlyReport::where('selected_year', $request->selected_year)->where('quarter', $request->quarter)->count();
        if ($validate == 1) {
            return back()->with("error", "Quarter data already exists.");
        }else{
            $file = $request->file('image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();

            $file1 = $request->file('pdf');
            $file1->getClientOriginalName();
            $file1->getClientOriginalExtension();
            $file1->getRealPath();
            $file1->getSize();
            $file1->getMimeType();
            $destinationPath1 = 'uploads';
            $file1->move($destinationPath1,$file1->getClientOriginalName());
            $url1 = $destinationPath1.'/'.$file1->getClientOriginalName();

            $file2 = $request->file('arabic_pdf');
            $file2->getClientOriginalName();
            $file2->getClientOriginalExtension();
            $file2->getRealPath();
            $file2->getSize();
            $file2->getMimeType();
            $destinationPath2 = 'uploads';
            $file2->move($destinationPath2,$file2->getClientOriginalName());
            $url_arabic = $destinationPath2.'/'.$file2->getClientOriginalName();
            QuarterlyReport::create([
                'selected_year' => $request['selected_year'],
                'title' => $request['title'],
                'image' => $url,
                'pdf' => $url1,
                'quarter' => $request['quarter'],
                'arabic_title' => $request['arabic_title'],
                'arabic_pdf' => $url_arabic,
                'publish_date' => $request['publish_date']
            ]);
            return redirect('dashboard/quarterly-report')->with("status", "Quarterly Report Added Successfully.!!");
        }
    }
    public function edit($id)
    {
        $edit = QuarterlyReport::where('id', $id)->first();
        $get_slider = QuarterlyReport::orderBy('id', 'DESC')->get();
        return view('dashboard.quarterly-report.edit', ['get_slider' => $get_slider, 'edit' => $edit]);
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
            QuarterlyReport::where('id', '=' ,$request->id)->update(['selected_year' => $request->selected_year,'title' => $request->title,'image' => $url,'publish_date' => $request->publish_date,'quarter' => $request->quarter,'arabic_title' => $request->arabic_title]);
        }else{
           QuarterlyReport::where('id', '=' ,$request->id)->update(['selected_year' => $request->selected_year,'title' => $request->title,'publish_date' => $request->publish_date,'quarter' => $request->quarter,'arabic_title' => $request->arabic_title]); 
        }
        if(!empty($request->pdf)) {
            $file1 = $request->file('pdf');
            $file1->getClientOriginalName();
            $file1->getClientOriginalExtension();
            $file1->getRealPath();
            $file1->getSize();
            $file1->getMimeType();
            $destinationPath1 = 'uploads';
            $file1->move($destinationPath1,$file1->getClientOriginalName());
            $url1 = $destinationPath1.'/'.$file1->getClientOriginalName();
            QuarterlyReport::where('id', '=' ,$request->id)->update(['pdf' => $url1]);
        }
        if (!empty($request->arabic_pdf)) {
            $file2 = $request->file('arabic_pdf');
            $file2->getClientOriginalName();
            $file2->getClientOriginalExtension();
            $file2->getRealPath();
            $file2->getSize();
            $file2->getMimeType();
            $destinationPath2 = 'uploads';
            $file2->move($destinationPath2,$file2->getClientOriginalName());
            $url_arabic = $destinationPath2.'/'.$file2->getClientOriginalName();
            QuarterlyReport::where('id', '=' ,$request->id)->update(['arabic_pdf' => $url_arabic]);
        }
        return redirect('dashboard/quarterly-report')->with("status", "Quarterly Report Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = QuarterlyReport::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
