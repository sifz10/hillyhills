@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">About Acomplishments</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Add</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.about-acomplishments.save') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <h4>English Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-6">
              <label for="">Year</label>
              <input type="tex" class="form-control mb-3 year_custom" name="year" required value="{{ old('year') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="4">
            </div>
            <div class="col-sm-6">
              <label for="">Image (289x286)</label>
              <input type="file" class="form-control-file mb-3" required name="image">
            </div>
          </div>
          <div class="col-sm-12">
            <label for="">Detail</label>
            <input type="text" class="form-control mb-3" name="detail" required value="{{ old('detail') }}"> 
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4">
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="col-sm-12">
            <label for="">Detail</label>
            <input type="text" class="form-control mb-3" name="arabic_detail" required value="{{ old('arabic_detail') }}"> 
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Save</button>
    </form>
  </div>
  @endsection
