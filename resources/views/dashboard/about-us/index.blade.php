@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">About Us</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">About Us</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.about-us.update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <input type="hidden" class="form-control-file mb-3" name="id" value="{{ $edit->id }}">
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ $edit->title }}">
            </div>
            <div class="col-sm-6">
              <label for="">Image (1910x660)</label>
              <input type="file" class="form-control-file mb-3" name="about_image">
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Short Descriptions</label>
            <input type="text" class="form-control mb-3" name="short" required value="{{ $edit->short }}">
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions</label>
            <textarea name="description" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->description }}</textarea>
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="col-sm-12">
            <label for="">Title</label>
            <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}">
          </div>
          <div class="col-sm-12">
            <label for="">Short Descriptions</label>
            <input type="text" class="form-control mb-3" name="arabic_short" required value="{{ $edit->arabic_short }}">
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions</label>
            <textarea name="arabic_description" class="form-control mb-3" rows="3" required>{{ $edit->arabic_description }}</textarea>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Update</button>
    </form>
  </div>
  @endsection
