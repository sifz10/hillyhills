@php
$headings = json_decode($edit->timeline_heading);
$timeline_description = json_decode($edit->timeline_description);

$arabic_headings = json_decode($edit->arabic_timeline_heading);
$arabic_timeline_description = json_decode($edit->arabic_timeline_description);
//print_r($headings);die;
@endphp
@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Our Businesses</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Update</a></li>
@endsection
@section('dashboard_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <link rel="stylesheet" href="/richtexteditor/rte_theme_default.css"/>
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('our-businesses-update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <div class="table-responsive mb-4 mt-4">
          <input type="hidden" class="form-control mb-3" name="id" required value="{{ $edit->id }}">
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ $edit->title }}">
            </div>
            <div class="col-sm-6">
              <label for="">Image (1910x660)</label>
              <input type="file" class="form-control-file mb-3" name="background_image">
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Short Descriptions</label>
            <input type="text" class="form-control mb-3" name="short_description" required value="{{ $edit->short_description }}">
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions</label>
            <textarea name="description" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->description }}</textarea>
          </div>          
          <div class="col-sm-12">
            <label for="">Address</label>
            <input type="text" class="form-control mb-3" name="address" required value="{{ $edit->address }}">
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Website Url</label>
              <input type="text" class="form-control mb-3" name="website_link" required value="{{ $edit->website_link }}">
            </div>
            <div class="col-sm-6">
              <label for="">Logo</label>
              <input type="file" class="form-control-file mb-3" name="logo_image">
            </div>
          </div>
           <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Email</label>
              <input type="email" class="form-control mb-3" name="email" required value="{{ $edit->email }}">
            </div>
            <div class="col-sm-6">
              <label for="">Phone</label>
              <input type="text" class="form-control mb-3" name="phone" required value="{{ $edit->phone }}">
            </div>
          </div>
            <h5>Establishments <i class="fa fa-plus-square" id="Add"></i></h5>
          <div id="newinput">
            <div id="row">
              @if($headings)
              @foreach($headings as $key => $data)
              <div class="d-flex">
                <div class="col-sm-6">
                  @if($key > 0 )
                  <i class="fa fa-minus-square" id="remove"></i>
                  @endif
                  <label for="">Establishments Year</label>
                  <input type="text" class="form-control mb-3" name="timeline_heading[]" required value="{{ $data }}">
                </div>
                <div class="col-sm-6">
                  <label for="">Establishments Details</label>
                  <input type="text" class="form-control mb-3" name="timeline_description[]" required value="{{ $timeline_description[$key] }}">
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="d-flex">
            <div class="col-sm-12">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}">
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Short Descriptions</label>
            <input type="text" class="form-control mb-3" name="arabic_short_description" required value="{{ $edit->arabic_short_description }}">
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions</label>
            <textarea name="arabic_description" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->arabic_description }}</textarea>
          </div>          
          <div class="col-sm-12">
            <label for="">Address</label>
            <input type="text" class="form-control mb-3" name="arabic_address" required value="{{ $edit->arabic_address }}">
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Website Url</label>
              <input type="text" class="form-control mb-3" name="arabic_website_link" required value="{{ $edit->arabic_website_link }}">
            </div>
            <div class="col-sm-6">
              <label for="">Phone</label>
              <input type="text" class="form-control mb-3" name="arabic_phone" required value="{{ $edit->arabic_phone }}">
            </div>
          </div>
          <h5>Establishments <i class="fa fa-plus-square" id="Add_arabic"></i></h5>
          <div id="newinput_arabic">
            <div id="row_arabic">
              @if($arabic_headings)
              @foreach($arabic_headings as $key => $data)
              <div class="d-flex">
                <div class="col-sm-6">
                  @if($key > 0 )
                  <i class="fa fa-minus-square" id="remove_arabic"></i>
                  @endif
                  <label for="">Establishments Year</label>
                  <input type="text" class="form-control mb-3" name="arabic_timeline_heading[]" required value="{{ $data }}">
                </div>
                <div class="col-sm-6">
                  <label for="">Establishments Details</label>
                  <input type="text" class="form-control mb-3" name="arabic_timeline_description[]" required value="{{ $arabic_timeline_description[$key] }}">
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Update</button>
    </form>
  </div>  
  <script type="text/javascript" src="/richtexteditor/rte.js"></script>
  <script type="text/javascript" src="/richtexteditor/plugins/all_plugins.js"></script>
  <script type="text/javascript">
  var editor1 = new RichTextEditor("#inp_editor1");
  var editor2 = new RichTextEditor("#inp_editor2");
  </script>
  @endsection
