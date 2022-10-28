@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Share Series</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Share Series</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.share-series.update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <h4>English Version:</h4>
        <input type="hidden" class="form-control-file mb-3" name="id" value="{{ $edit->id }}">
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ $edit->title }}">
            </div>
            <div class="col-sm-6">
              <label for="">Image (1910x660)</label>
              <input type="file" class="form-control-file mb-3" name="image">
            </div>
          </div>
          <div class="d-flex flex-wrap">
            <div class="col-12 col-md-4">
              <label for="">Series Title</label>
              <input type="text" class="form-control mb-3" name="series_title" required value="{{ $edit->series_title }}">
            </div>
            <div class="col-12 col-md-4">
              <label for="">Company Name</label>
              <input type="text" class="form-control mb-3" name="company_name" required value="{{ $edit->company_name }}">
            </div>
            <div class="col-12 col-md-4">
              <label for="">Series Image (1910x660)</label>
              <input type="file" class="form-control-file mb-3" name="series_image">
            </div>
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex flex-wrap">
            <div class="col-12 col-md-4">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}">
            </div>
            <div class="col-12 col-md-4">
              <label for="">Series Title</label>
              <input type="text" class="form-control mb-3" name="arabic_series_title" required value="{{ $edit->arabic_series_title }}">
            </div>
            <div class="col-12 col-md-4">
              <label for="">Company Name</label>
              <input type="text" class="form-control mb-3" name="arabic_company_name" required value="{{ $edit->arabic_company_name }}">
            </div>
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
