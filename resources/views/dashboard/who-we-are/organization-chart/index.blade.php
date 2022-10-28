@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Who We Are</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Organization Chart</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.who-we-are.organization-chart.update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <div class="table-responsive mb-4 mt-4">
          <input type="hidden" name="id" value="{{ $edit->id }}">
          <div class="col-sm-12">
              <label for="">Organization Chart Image</label>
              <input type="file" class="form-control-file mb-3" name="image">
            </div>          
          <button type="submit" class="btn btn-primary ml-3" name="button">Update</button>
        </div>
      </div>
    </form>
  </div>
  </script>
  @endsection
