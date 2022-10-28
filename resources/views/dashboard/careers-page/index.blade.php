@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Careers Page</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Update</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.careers-page.update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <h4>English Version:</h4>
        <input type="hidden" class="form-control-file mb-3" name="id" value="{{ $edit->id }}">
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-4">
              <label for="">Overview Title</label>
              <input type="text" class="form-control mb-3" name="overview_title" required value="{{ $edit->overview_title }}" maxlength="100">
            </div>
            <div class="col-sm-4">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ $edit->title }}" maxlength="100">
            </div>
            <div class="col-sm-4">
              <label for="">Background Image (1910x660)</label>
              <input type="file" class="form-control-file mb-3" name="background_image">
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions</label>
            <textarea name="description" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->description }}</textarea>
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Form Title</label>
              <input type="text" class="form-control mb-3" name="form_title" required value="{{ $edit->form_title }}" maxlength="100">
            </div>
            <div class="col-sm-6">
              <label for="">Form Heading</label>
              <input type="text" class="form-control mb-3" name="form_sub_description" required value="{{ $edit->form_sub_description }}" maxlength="200">
            </div>
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-4">
              <label for="">Overview Title</label>
              <input type="text" class="form-control mb-3" name="arabic_overview_title" required value="{{ $edit->arabic_overview_title }}" maxlength="100">
            </div>
            <div class="col-sm-4">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}" maxlength="100">
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions</label>
            <textarea name="arabic_description" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->arabic_description }}</textarea>
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Form Title</label>
              <input type="text" class="form-control mb-3" name="arabic_form_title" required value="{{ $edit->arabic_form_title }}" maxlength="100">
            </div>
            <div class="col-sm-6">
              <label for="">Form Heading</label>
              <input type="text" class="form-control mb-3" name="arabic_form_sub_description" required value="{{ $edit->arabic_form_sub_description }}" maxlength="200">
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Save</button>
    </form>
  </div>
  @endsection
