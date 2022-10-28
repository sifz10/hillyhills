@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Careers Applications</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">List</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <div class="widget-content widget-content-area br-6">
          <div class="table-responsive mb-4 mt-4">
              <table id="zero-config" class="table table-hover" style="width:100%">
                  <thead>
                      <tr>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Country</th>
                          <th>Department</th>
                          <th>Exp</th>
                          <th>Message</th>
                          <th>View Resume</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($get_career as $Acomplishments)
                      <tr>
                        <td>
                          {{ $Acomplishments->full_name }}
                        </td>
                        <td>
                          {{ $Acomplishments->email }}
                        </td>
                        <td>
                           {{ $Acomplishments->mobile }}
                         </td>
                         <td>
                           {{ $Acomplishments->country }}
                         </td>
                         <td>
                           {{ $Acomplishments->department }}
                         </td>
                         <td>
                           {{ $Acomplishments->experience }}
                         </td>
                         <td>
                           {{ $Acomplishments->message }}
                         </td>
                         <td>
                           <a href="{!! asset('') !!}/{{ $Acomplishments->resume }}" target="_blank" class="btn btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                          </a>
                         </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  @endsection
