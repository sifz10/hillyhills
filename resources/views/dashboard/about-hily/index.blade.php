@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">About Hily</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">About Hily</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.about-hily.update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <h4>English Version:</h4>
        <input type="hidden" class="form-control-file mb-3" name="id" value="{{ $edit->id }}">
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex flex-wrap">
            <div class="col-12 col-md-4">
              <label for="">Overview Title</label>
              <input type="text" class="form-control mb-3" name="overview_title" required value="{{ $edit->overview_title }}">
            </div>
            <div class="col-12 col-md-4">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ $edit->title }}">
            </div>
            <div class="col-12 col-md-4">
              <label for="">Background Image (1910x660)</label>
              <input type="file" class="form-control-file mb-3" name="background_image">
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions(Left Side)</label>
            <textarea name="description_one" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->description_one }}</textarea>
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions(Right Side)</label>
            <textarea name="description_two" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->description_two }}</textarea>
          </div>
          <div class="col-sm-12">
            <label for="">Experience</label>
            <textarea name="experience" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->experience }}</textarea>
          </div>
          <div class="col-sm-12">
            <label for="">Inner Image</label>
            <input type="file" class="form-control-file mb-3" name="image">
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex flex-wrap">
            <div class="col-12 col-md-6">
              <label for="">Overview Title</label>
              <input type="text" class="form-control mb-3" name="arabic_overview_title" required value="{{ $edit->arabic_overview_title }}">
            </div>
            <div class="col-12 col-md-6">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}">
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions(Left Side)</label>
            <textarea name="arabic_description_one" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->arabic_description_one }}</textarea>
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions(Right Side)</label>
            <textarea name="arabic_description_two" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->arabic_description_two }}</textarea>
          </div>
          <div class="col-sm-12">
            <label for="">Experience</label>
            <textarea name="arabic_experience" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->arabic_experience }}</textarea>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px">Update</button>
    </form>
  </div>
  @endsection
