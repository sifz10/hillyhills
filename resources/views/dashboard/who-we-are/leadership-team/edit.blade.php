@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Who We Are</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Leadership Team</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.who-we-are.leadership-team.update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" class="form-control" name="id" value="{{ $edit->id }}">
      <div class="widget-content widget-content-area br-6">
        <h4>English Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-4">
              <label for="">Name</label>
              <input type="text" class="form-control mb-3" name="name" required value="{{ $edit->name }}">
            </div>
            <div class="col-sm-4">
              <label for="">Position</label>
              <input type="text" class="form-control mb-3" name="position" required value="{{ $edit->position }}">
            </div>
            <div class="col-sm-4">
              <label for="">Image (289x286)</label>
              <input type="file" class="form-control-file mb-3" name="image">
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Descriptions</label>
            <textarea name="description" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->description }}</textarea>
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="d-flex">
          <div class="col-sm-6">
            <label for="">Name</label>
            <input type="text" class="form-control mb-3" name="arabic_name" required value="{{ $edit->arabic_name }}">
          </div>
          <div class="col-sm-6">
            <label for="">Position</label>
            <input type="text" class="form-control mb-3" name="arabic_position" required value="{{ $edit->arabic_position }}">
          </div>
        </div>
        <div class="col-sm-12">
          <label for="">Descriptions</label>
          <textarea name="arabic_description" class="form-control mb-3" rows="3" required id="inp_editor1" cols="10">{{ $edit->arabic_description }}</textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px">Update</button>
    </form>
  </div>
  @endsection
