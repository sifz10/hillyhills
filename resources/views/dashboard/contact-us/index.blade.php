@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Contact Us</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Contact Us</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.contact-us.update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <h4>English Version:</h4>
        <input type="hidden" class="form-control-file mb-3" name="id" value="{{ $edit->id }}">
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Overview Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ $edit->title }}">
            </div>
            <div class="col-sm-6">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="contact_us_title" required value="{{ $edit->contact_us_title }}">
            </div>
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Overview</label>
              <input type="text" class="form-control mb-3" name="contact_us_overview" required value="{{ $edit->contact_us_overview }}">
            </div>
            <div class="col-sm-6">
              <label for="">Phone</label>
              <input type="text" class="form-control mb-3" name="contact_us_phone" required value="{{ $edit->contact_us_phone }}">
            </div>
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Fax</label>
              <input type="text" class="form-control mb-3" name="contact_us_fax" required value="{{ $edit->contact_us_fax }}">
            </div>
            <div class="col-sm-6">
              <label for="">Email</label>
              <input type="email" class="form-control mb-3" name="contact_us_email" required value="{{ $edit->contact_us_email }}">
            </div>
          </div> 
          <div class="col-sm-12">
            <label for="">Address</label>
            <input type="text" class="form-control mb-3" name="contact_us_address" required value="{{ $edit->contact_us_address }}">
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Overview Title</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}">
            </div>
            <div class="col-sm-6">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="arabic_contact_us_title" required value="{{ $edit->arabic_contact_us_title }}">
            </div>
          </div>
          <div class="d-flex">
            <div class="col-sm-12">
              <label for="">Overview</label>
              <input type="text" class="form-control mb-3" name="arabic_contact_us_overview" required value="{{ $edit->arabic_contact_us_overview }}">
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Address</label>
            <input type="text" class="form-control mb-3" name="arabic_contact_us_address" required value="{{ $edit->arabic_contact_us_address }}">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Update</button>
    </form>
  </div>
  @endsection
