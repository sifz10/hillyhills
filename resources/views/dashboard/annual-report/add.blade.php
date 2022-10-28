@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Annual Report</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Add</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.annual-report.save') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <h4>English Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-4">
              <label for="">Select Year</label>
              <select class="form-control mb-3" name="selected_year">
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
              </select>
            </div>
            <div class="col-sm-4">
              <label for="">Select Quarter</label>
              <select class="form-control mb-3" name="quarter">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              @if(Session::has('error'))
              <div class="alert-error" style="color: red">
                  {{ Session::get('error') }}
                  @php
                      Session::forget('error');
                  @endphp
              </div>
              @endif
            </div>
            <div class="col-sm-4">
              <label for="">Pdf</label>
              <input type="file" class="form-control-file mb-3" required name="pdf">
            </div>
          </div>
            <div class="col-sm-12">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ old('title') }}">
            </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Publish Date</label>
              <input type="date" class="form-control mb-3" name="publish_date" required value="{{ old('publish_date') }}">
            </div>
            <div class="col-sm-6">
              <label for="">Image (289x286)</label>
              <input type="file" class="form-control-file mb-3" required name="image">
            </div>
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="col-sm-12">
            <label for="">Title</label>
            <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ old('arabic_title') }}">
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Arabic Pdf</label>
              <input type="file" class="form-control-file mb-3" required name="arabic_pdf">
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Save</button>
    </form>
  </div>
  @endsection
