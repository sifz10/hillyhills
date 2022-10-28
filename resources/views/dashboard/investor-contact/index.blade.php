@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Investor Contact</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Investor Contact</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.investor-contact.update') !!}" method="post" enctype="multipart/form-data">
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
          <div class="col-sm-12">
            <label for="">Overview</label>
            <input type="text" class="form-control mb-3" name="overview" required value="{{ $edit->overview }}">
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Phone</label>
              <input type="text" class="form-control mb-3" name="phone" required value="{{ $edit->phone }}">
            </div>
            <div class="col-sm-6">
              <label for="">Email</label>
              <input type="text" class="form-control mb-3" name="email" required value="{{ $edit->email }}">
            </div>
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
          <div class="d-flex">
            <div class="col-sm-12">
              <label for="">Overview</label>
            <input type="text" class="form-control mb-3" name="arabic_overview" required value="{{ $edit->arabic_overview }}">
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Update</button>
    </form>
  </div>
  @endsection
