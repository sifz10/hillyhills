@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Home Financial Calender</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Create</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('financial_calender_save') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <h4>English Version:</h4>
        <div class="table-responsive mb-4 mt-4">
            <div class="col-sm-12">
              <label for="">Details</label>
              <input type="text" class="form-control mb-3" name="details" required value="{{ old('details') }}">
            </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Date</label>
              <input type="date" class="form-control mb-3" name="upload_date" required value="{{ old('upload_date') }}">
            </div>
            <div class="col-sm-6">
              <label for="">Upload Pdf (1910x660)</label>
              <input type="file" class="form-control-file mb-3" required name="pdf_upload">
            </div>
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="col-sm-12">
            <label for="">Details</label>
            <input type="text" class="form-control mb-3" name="arabic_details" required value="{{ old('arabic_details') }}">
          </div>
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Upload Pdf (1910x660)</label>
              <input type="file" class="form-control-file mb-3" required name="arabic_pdf_upload">
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Save</button>
    </form>
  </div>
  @endsection
