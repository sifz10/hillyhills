@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Careers</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Careers</a></li>
@endsection
@section('dashboard_content')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <link rel="stylesheet" href="/richtexteditor/rte_theme_default.css"/>
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.careers.update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
      <h4>English Version:</h4>
        <input type="hidden" class="form-control-file mb-3" name="id" value="{{ $edit->id }}">
        <div class="table-responsive mb-4 mt-4">
          <div class="col-sm-12 d-flex">
            <div class="col-sm-6">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ $edit->title }}">
            </div>
            <div class="col-sm-6">
              <label for="">Image (1910x660)</label>
              <input type="file" class="form-control-file mb-3" name="career_image">
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
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4">
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="col-sm-12">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}">
          </div>
          <div class="col-sm-12">
            <label for="">Short Descriptions</label>
            <input type="text" class="form-control mb-3" name="arabic_short_description" required value="{{ $edit->arabic_short_description }}">
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions</label>
            <textarea name="arabic_description" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->arabic_description }}</textarea>
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
