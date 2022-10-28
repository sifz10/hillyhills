@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Our Businesses</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Add</a></li>
@endsection
@section('dashboard_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <link rel="stylesheet" href="/richtexteditor/rte_theme_default.css"/>
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.our-businesses.save') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <h4>English Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ old('title') }}">
            </div>
            <div class="col-sm-6">
              <label for="">Image (1910x660)</label>
              <input type="file" class="form-control-file mb-3" name="background_image" required>
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Short Descriptions</label>
            <input type="text" class="form-control mb-3" name="short_description" required value="{{ old('short_description') }}">
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions</label>
            <textarea name="description" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ old('description') }}</textarea>
          </div>          
          <div class="col-sm-12">
            <label for="">Address</label>
            <input type="text" class="form-control mb-3" name="address" required value="{{ old('address') }}">
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Website Url</label>
              <input type="text" class="form-control mb-3" name="website_link" required value="{{ old('website_link') }}">
            </div>
            <div class="col-sm-6">
              <label for="">Logo</label>
              <input type="file" class="form-control-file mb-3" name="logo_image" required>
            </div>
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Email</label>
              <input type="email" class="form-control mb-3" name="email" required value="{{ old('email') }}">
            </div>
            <div class="col-sm-6">
              <label for="">Phone</label>
              <input type="text" class="form-control mb-3" name="phone" required value="{{ old('phone') }}">
            </div>
          </div>
          <h5>Establishments <i class="fa fa-plus-square" id="Add"></i></h5>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Establishments Year</label>
              <input type="text" class="form-control mb-3" name="timeline_heading[]" required value="{{ old('timeline_heading') }}">
            </div>
            <div class="col-sm-6">
              <label for="">Establishments Details</label>
              <input type="text" class="form-control mb-3" name="timeline_description[]" required value="{{ old('timeline_description') }}">
            </div>
          </div>
          <div id="newinput"></div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="d-flex">
            <div class="col-sm-12">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ old('arabic_title') }}">
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Short Descriptions</label>
            <input type="text" class="form-control mb-3" name="arabic_short_description" required value="{{ old('arabic_short_description') }}">
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions</label>
            <textarea name="arabic_description" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ old('arabic_description') }}</textarea>
          </div>          
          <div class="col-sm-12">
            <label for="">Address</label>
            <input type="text" class="form-control mb-3" name="arabic_address" required value="{{ old('arabic_address') }}">
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Website Url</label>
              <input type="text" class="form-control mb-3" name="arabic_website_link" required value="{{ old('arabic_website_link') }}">
            </div>
            <div class="col-sm-6">
              <label for="">Phone</label>
              <input type="text" class="form-control mb-3" name="arabic_phone" required value="{{ old('arabic_phone') }}">
            </div>
          </div>
          <h5>Establishments <i class="fa fa-plus-square" id="Add_arabic"></i></h5>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Establishments Year</label>
              <input type="text" class="form-control mb-3" name="arabic_timeline_heading[]" required value="{{ old('arabic_timeline_heading') }}">
            </div>
            <div class="col-sm-6">
              <label for="">Establishments Details</label>
              <input type="text" class="form-control mb-3" name="arabic_timeline_description[]" required value="{{ old('arabic_timeline_description') }}">
            </div>
          </div>
          <div id="newinput_arabic"></div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Save</button>
    </form>
  </div>

  <script type="text/javascript" src="/richtexteditor/rte.js"></script>
  <script type="text/javascript" src="/richtexteditor/plugins/all_plugins.js"></script>
  <script type="text/javascript">
  var editor1 = new RichTextEditor("#inp_editor1");
  var editor2 = new RichTextEditor("#inp_editor2");
  
  </script>
  @endsection
