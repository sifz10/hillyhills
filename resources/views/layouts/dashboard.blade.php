<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> {{ env('APP_NAME') }} - @yield('dashboard_title') </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="{!! asset('back') !!}/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="{!! asset('back') !!}/assets/js/loader.js"></script>
    <link href="https://designreset.com/cork/ltr/demo4/assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{!! asset('back') !!}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{!! asset('back') !!}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{!! asset('back') !!}/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('back') !!}/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{!! asset('back') !!}/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{!! asset('back') !!}/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="{!! asset('back') !!}/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{!! asset('back') !!}/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="{!! asset('back') !!}/plugins/table/datatable/dt-global_style.css">

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <style media="screen">
    .navbar .theme-brand li.theme-logo img {
        width: 68px;
        height: 30px;
        border-radius: 5px;
      }
    </style>
</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="{!! route('dashboard') !!}">
                        <img src="{!! asset('frontend') !!}/asset/img/logo/logo.png" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    {{-- <a href="index.html" class="nav-link"> CORK </a> --}}
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-auto">

                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="{!! asset($user->avatar) !!}" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="{!! route('dashboard.user.settings') !!}">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                  Profile
                                </a>
                            </div>

                            <div class="dropdown-item">
                                <a class="" href="{!! route('logout') !!}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              @yield('dashboard_breadcum')
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </header>

    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container mt-4" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('components.dashbaord.sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
          <div class="layout-px-spacing">

              <div class="row layout-top-spacing">
                @yield('dashboard_content')
              </div>

          </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © {{ \Carbon\Carbon::now()->format('Y') }} <a target="_blank" href="{!! route('frontend.index',[app()->getLocale()]) !!}"> {!! env('APP_NAME') !!} </a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{!! asset('back') !!}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{!! asset('back') !!}/bootstrap/js/popper.min.js"></script>
    <script src="{!! asset('back') !!}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{!! asset('back') !!}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{!! asset('back') !!}/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{!! asset('back') !!}/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{!! asset('back') !!}/plugins/apex/apexcharts.min.js"></script>
    <script src="{!! asset('back') !!}/assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{!! asset('back') !!}/plugins/file-upload/file-upload-with-preview.min.js"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    <script src="{!! asset('back') !!}/plugins/table/datatable/datatables.js"></script>
      <script>
          $('#zero-config').DataTable({
              "oLanguage": {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                 "sLengthMenu": "Results :  _MENU_",
              },
              "stripeClasses": [],
              "lengthMenu": [7, 10, 20, 50],
              "pageLength": 7
          });
      </script>
      <script>
          $(document).ready(function(){
            $("#Add").click(function(){
            var newRowAdd = '<div id="row"><div class="d-flex"><div class="col-sm-6"><i class="fa fa-minus-square" id="remove"></i><label for="">Establishments Year</label><input type="text" class="form-control mb-3" name="timeline_heading[]" required value=""></div><div class="col-sm-6"><label for="">Establishments Details</label><input type="text" class="form-control mb-3" name="timeline_description[]" required value=""></div></div></div>';
            $('#newinput').append(newRowAdd);
            });
            $("body").on("click", "#remove", function () {
                $(this).parents("#row").remove();
            });
            $("#Add_arabic").click(function(){
            var newRowAdd_arabic = '<div id="row_arabic"><div class="d-flex"><div class="col-sm-6"><i class="fa fa-minus-square" id="remove_arabic"></i><label for="">Establishments Year</label><input type="text" class="form-control mb-3" name="arabic_timeline_heading[]" required value=""></div><div class="col-sm-6"><label for="">Establishments Details</label><input type="text" class="form-control mb-3" name="arabic_timeline_description[]" required value=""></div></div></div>';
            $('#newinput_arabic').append(newRowAdd_arabic);
            });
            $("body").on("click", "#remove_arabic", function () {
                $(this).parents("#row_arabic").remove();
            });
          });
      </script>
</body>
</html>
