@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">About Take Closer</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">About Take Closer</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.about-take-closer.update') !!}" method="post" enctype="multipart/form-data">
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
              <label for="">Button Text</label>
              <input type="text" class="form-control mb-3" name="button_text" required value="{{ $edit->button_text }}">
            </div>
          </div>
          <div class="d-flex flex-wrap">
            <div class="col-12 col-md-4">
              <label for="">Image One (204x219)</label>
              <input type="file" class="form-control-file mb-3" name="image_one">
            </div>
            <div class="col-12 col-md-4">
              <label for="">Image Two (204x219)</label>
              <input type="file" class="form-control-file mb-3" name="image_two">
            </div>
            <div class="col-12 col-md-4">
              <label for="">Image Three (204x219)</label>
              <input type="file" class="form-control-file mb-3" name="image_three">
            </div>
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4">
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}">
            </div>
            <div class="col-sm-6">
              <label for="">Button Text</label>
              <input type="text" class="form-control mb-3" name="arabic_button_text" required value="{{ $edit->arabic_button_text }}">
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Update</button>
    </form>
  </div>
  @endsection
