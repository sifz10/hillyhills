@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">User</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Settings</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <div class="widget-content widget-content-area br-6">
    <form class="" action="{!! route('dashboard.user.settings.save') !!}" method="post" enctype="multipart/form-data">
        @csrf
      <label for="">Avatar</label>
      <p>Current Image : </p> <br>
      <img src="{!! asset($user->avatar) !!}" width="100px" alt="">
      <br>
      <br>
      <input type="file" class="form-control-file mb-3" name="avatar">
      <label for="">Name</label>
      <input type="text" class="form-control mb-3" name="name" value="{{ $user->name }}">
      <label for="">Email</label>
      <input type="email" class="form-control mb-3" name="email" value="{{ $user->email }}">
      <label for="">Password</label>
      <input type="password" class="form-control mb-3" name="password">
      <button type="submit" class="btn btn-primary" name="button">Save</button>
    </form>
    </div>
  </div>
@endsection
