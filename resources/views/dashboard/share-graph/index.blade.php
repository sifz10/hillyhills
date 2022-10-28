@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Share Graph</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Share Graph</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.share-graph.update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="widget-content widget-content-area br-6">
        <input type="hidden" class="form-control-file mb-3" name="id" value="{{ $edit->id }}">
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex flex-wrap">
            <div class="col-12 col-md-6">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ $edit->title }}">
            </div>
            <div class="col-12 col-md-6">
              <label for="">Title (Arabic)</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}">
            </div>
            <div class="col-12 col-md-3">
              <label for="">Image (1910x660)</label>
              <input type="file" class="form-control-file mb-3" name="image">
            </div>
            <div class="col-12 col-md-3">
              <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 25px;">Update</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <a href="{!! route('dashboard.share-graph-table.index') !!}" class="btn btn-primary mb-2 mr-2">Add Records</a>  
    <div class="widget-content widget-content-area br-6">
          <div class="table-responsive mb-4 mt-4">
              <table id="zero-config" class="table table-hover" style="width:100%">
                  <thead>
                      <tr>
                          <th>Title</th>
                          <th>Last</th>
                          <th>High</th>
                          <th>Low</th>
                          <th>(+/-)</th>
                          <th>Bid</th>
                          <th>Create At</th>
                          <th class="no-content"></th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($get_slider2 as $slider)
                      <tr>
                        <td>
                          {{ $slider->title }}
                        </td>
                        <td>
                          {{ $slider->last }}
                        </td>
                        <td>
                          {{ $slider->high }}
                        </td>
                        <td>
                          {{ $slider->low }}
                        </td>
                        <td>
                          {{ $slider->average }}
                        </td>
                        <td>
                          {{ $slider->bid }}
                        </td>
                        <td>
                           {{ $slider->created_at->format('j M Y h:i A') }}
                         </td>
                        <td>
                          <a href="{!! route('dashboard.share-graph-table.edit', $slider->id) !!}" class="btn btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                          </a>
                          <a href="{!! route('dashboard.share-graph-table.delete', $slider->id) !!}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                        </td>
                      </tr>

                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  @endsection
