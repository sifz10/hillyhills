<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\FinancialCalender;

class FinancialCalenderController extends Controller
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
        $get_blogs = FinancialCalender::orderBy('id', 'DESC')->get();
        return view('dashboard.financial-calender.index', ['get_blogs' => $get_blogs]);
    }
    public function listing()
    {
        $get_blogs = FinancialCalender::orderBy('id', 'DESC')->get();
        return view('dashboard.financial-calender.list', ['get_blogs' => $get_blogs]);
    }
    public function store(Request $request)
    {
        $file = $request->file('pdf_upload');
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $file->getRealPath();
        $file->getSize();
        $file->getMimeType();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $url = $destinationPath.'/'.$file->getClientOriginalName();

        $file1 = $request->file('arabic_pdf_upload');
        $file1->getClientOriginalName();
        $file1->getClientOriginalExtension();
        $file1->getRealPath();
        $file1->getSize();
        $file1->getMimeType();
        $destinationPath1 = 'uploads';
        $file1->move($destinationPath1,$file1->getClientOriginalName());
        $url_arabic = $destinationPath1.'/'.$file1->getClientOriginalName();
        FinancialCalender::create([
            'details' => $request['details'],
            'arabic_details' => $request['arabic_details'],
            'upload_date' => $request['upload_date'],
            'pdf_upload' => $url,
            'arabic_pdf_upload' => $url_arabic
        ]);
        return back()->with("status", "Financial Calender Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = FinancialCalender::where('id', $id)->first();
        $get_blogs = FinancialCalender::orderBy('id', 'DESC')->get();
        return view('dashboard.financial-calender.edit', ['get_blogs' => $get_blogs, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        if (!empty($request->pdf_upload)) {
            $file = $request->file('pdf_upload');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
        
            FinancialCalender::where('id', '=' ,$request->id)->update(['details' => $request->details,'upload_date' => $request->upload_date, 'pdf_upload' => $url,'arabic_details' => $request->arabic_details]);
        }else{
            FinancialCalender::where('id', '=' ,$request->id)->update(['details' => $request->details,'upload_date' => $request->upload_date,'arabic_details' => $request->arabic_details]);
        }
        if (!empty($request->arabic_pdf_upload)) {
            $file1 = $request->file('arabic_pdf_upload');
            $file1->getClientOriginalName();
            $file1->getClientOriginalExtension();
            $file1->getRealPath();
            $file1->getSize();
            $file1->getMimeType();
            $destinationPath1 = 'uploads';
            $file1->move($destinationPath1,$file1->getClientOriginalName());
            $url_arabic = $destinationPath1.'/'.$file1->getClientOriginalName();
                FinancialCalender::where('id', '=' ,$request->id)->update(['arabic_pdf_upload' => $url_arabic]);
        }
        return redirect('/financial-calender-list')->with("status", "Financial Calender Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = FinancialCalender::where('id',$id)->delete();
        return back()->with("status", "Financial Calender Deleted Successfully.!!");
    }
}
