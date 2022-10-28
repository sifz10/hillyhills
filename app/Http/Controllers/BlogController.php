<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Image;
use File;
use App\Models\Blogs;

class BlogController extends Controller
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
        $get_blogs = Blogs::orderBy('id', 'DESC')->get();
        return view('dashboard.blogs.index', ['get_blogs' => $get_blogs]);
    }
    public function listing()
    {
        $get_blogs = Blogs::orderBy('id', 'DESC')->get();
        return view('dashboard.blogs.list', ['get_blogs' => $get_blogs]);
    }
    public function store(Request $request)
    {
        //print_r($request->toArray());die;
        $file = $request->file('blog_image');
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $file->getRealPath();
        $file->getSize();
        $file->getMimeType();
        $destinationPath = 'uploads/blogs';
        $file->move($destinationPath,$file->getClientOriginalName());
        $url = $destinationPath.'/'.$file->getClientOriginalName();
        Blogs::create([
            'title' => $request['title'],
            'description' => $request['desc'],
            'publish_date' => $request['publish_date'],
            'arabic_title' => $request['arabic_title'],
            'arabic_description' => $request['arabic_description'],
            'blog_image' => $url
        ]);
        return back()->with("status", "New Blog Added Successfully.!!");
    }
    public function edit($id)
    {
        $edit = Blogs::where('id', $id)->first();
        $get_blogs = Blogs::orderBy('id', 'DESC')->get();
        return view('dashboard.blogs.edit', ['get_blogs' => $get_blogs, 'edit' => $edit]);
       // echo "string";die();
    }
    public function update(Request $request)
    {
        if (!empty($request->blog_image)) {
            $file = $request->file('blog_image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads/blogs';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
        
            Blogs::where('id', '=' ,$request->id)->update(['title' => $request->title,'description' => $request->desc,'arabic_title' => $request->arabic_title,'arabic_description' => $request->arabic_description, 'blog_image' => $url,'status' => $request->status,'publish_date' => $request->publish_date]);
        }else{
            Blogs::where('id', '=' ,$request->id)->update(['title' => $request->title,'description' => $request->desc,'arabic_title' => $request->arabic_title,'arabic_description' => $request->arabic_description,'status' => $request->status,'publish_date' => $request->publish_date]);
        }
        return redirect('/blogs-list')->with("status", "Blog Updated Successfully.!!");
    }

    public function delete($id)
    {
        $delete = Blogs::where('id',$id)->delete();
        return back()->with("status", "Blog Deleted Successfully.!!");
    }
}
