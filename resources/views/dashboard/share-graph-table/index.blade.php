@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Share Graph Table</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Create</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.share-graph-table.save') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <h4>English Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="col-sm-12">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="">
          </div>
          <div class="d-flex">
            <div class="col-sm-3">
              <label for="">Last</label>
              <input type="text" class="form-control mb-3" name="last" required value="">
            </div>
            <div class="col-sm-3">
              <label for="">High</label>
              <input type="text" class="form-control mb-3" name="high" required value="">
            </div>
            <div class="col-sm-3">
              <label for="">Low</label>
              <input type="text" class="form-control mb-3" name="low" required value="">
            </div>
            <div class="col-sm-3">
              <label for="">(+/-)</label>
              <input type="text" class="form-control mb-3" name="average" required value="">
            </div>
          </div>
          <div class="d-flex">
            <div class="col-sm-3">
              <label for="">%</label>
              <input type="text" class="form-control mb-3" name="percent" required value="">
            </div>
            <div class="col-sm-3">
              <label for="">Bid</label>
              <input type="text" class="form-control mb-3" name="bid" required value="">
            </div>
            <div class="col-sm-3">
              <label for="">Ask</label>
              <input type="text" class="form-control mb-3" name="ask" required value="">
            </div>
            <div class="col-sm-3">
              <label for="">Volume</label>
              <input type="text" class="form-control mb-3" name="valume" required value="">
            </div>
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-12">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}">
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Save</button>
    </form>
  </div>
  @endsection
