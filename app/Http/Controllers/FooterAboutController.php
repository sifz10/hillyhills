<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\FooterAbout;

class FooterAboutController extends Controller
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
        $get_contact = FooterAbout::orderBy('id', 'DESC')->get();
        $edit = FooterAbout::where('id', 1)->first();
        return view('dashboard.footer.index', ['get_contact' => $get_contact, 'edit' => $edit]);
    }
    public function store(Request $request)
    {       
        $file = $request->file('footer_logo');
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $file->getRealPath();
        $file->getSize();
        $file->getMimeType();
        $destinationPath = 'uploads/footer';
        $file->move($destinationPath,$file->getClientOriginalName());
        $url = $destinationPath.'/'.$file->getClientOriginalName();
        FooterAbout::create([
            'footer_about' => $request['footer_about'],
            'arabic_footer_about' => $request['arabic_footer_about'],
            'footer_logo' => $url
        ]);
        return back()->with("status", "New Footer About Added Successfully.!!");
    }
    
    public function update(Request $request)
    {
        if (!empty($request->footer_logo)) {
            $file = $request->file('footer_logo');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads/footer';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
        
            FooterAbout::where('id', '=' ,$request->id)->update(['footer_about' => $request->footer_about,'footer_logo' => $url,'arabic_footer_about' => $request->arabic_footer_about]);
        }else{
            FooterAbout::where('id', '=' ,$request->id)->update(['footer_about' => $request->footer_about,'arabic_footer_about' => $request->arabic_footer_about]);
        }
        return redirect('/dashboard/footer')->with("status", "Footer About Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = FooterAbout::where('id',$id)->delete();
        return back()->with("status", " Deleted Successfully.!!");
    }
}
