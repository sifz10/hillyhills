@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Our Businesses</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">List</a></li>
@endsection
@section('dashboard_content')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <link rel="stylesheet" href="/richtexteditor/rte_theme_default.css"/>
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
      
    <div class="widget-content widget-content-area br-6">
          <div class="table-responsive mb-4 mt-4">
              <table id="zero-config" class="table table-hover" style="width:100%">
                  <thead>
                      <tr>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <!-- <th>Create At</th> -->
                          <th class="no-content"></th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($get_businesses as $businesses)
                      <tr>
                        <td>
                          <img src="{!! asset('') !!}/{{ $businesses->background_image }}" width="100px" alt="">
                        </td>
                        <td>
                          {{ $businesses->title }}
                        </td>
                        <td>
                          {{ $businesses->address }}
                        </td>
                        <td>
                          {{ $businesses->phone }}
                        </td>
                        <td>
                          {{ $businesses->email }}
                        </td>
                        <!-- <td>
                           {{ \Carbon\Carbon::parse($businesses->created_at)->diffForHumans() }}
                         </td> -->
                        <td>
                          <a href="{!! route('dashboard.our-businesses.edit', $businesses->id) !!}" class="btn btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                          </a>
                          <a href="{!! route('dashboard.our-businesses.delete', $businesses->id) !!}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                        </td>
                      </tr>

                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <script type="text/javascript" src="/richtexteditor/rte.js"></script>
  <script type="text/javascript" src="/richtexteditor/plugins/all_plugins.js"></script>
  <script type="text/javascript">
  var editor1 = new RichTextEditor("#inp_editor1");
  var editor2 = new RichTextEditor("#inp_editor2");
  </script>
  @endsection
