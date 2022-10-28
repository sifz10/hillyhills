<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/font.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/slick.css')}}">
    <title>Hili holding</title>
</head>
<?php
$data = Illuminate\Support\Facades\Route::currentRouteName();
//print_r($data);
?>
@if($data == 'frontend.index')
<body class="home">
@elseif($data == 'frontend.who-we-are.chairman-profile')
<body class="chairman-main">    
@elseif($data == 'frontend.our-businesses')
<body class="business-page bg-ligit-yell"> 
@elseif(request()->is('our-businesses-detail*')) 
  <body class="our_business-detail"> 
    @elseif(request()->is('media')) 
  <body class="media-main">
@else
<body class="about-main">
@endif
    <nav class="navbar navbar-expand-lg bg-custom p-0">
        <div class="container our-custom-container">
            <a class="navbar-brand" href="{!! route('frontend.index',[app()->getLocale()]) !!}">
                <img src="{{ asset('frontend/asset/img/logo/logo2.png')}}" alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex w-100 flex-column">
                    <div class="socal-menu d-lg-flex justify-content-end d-none mt-3">
                        <ul class="d-flex align-items-end p-0 m-0">
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="{{ asset('frontend/asset/img/icon/Vector.svg')}}" alt="" srcset="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="{{ asset('frontend/asset/img/icon/instagram.svg')}}" alt="" srcset="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="{{ asset('frontend/asset/img/icon/linkdin.svg')}}" alt="" srcset="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="leng-trans">عربي</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item list-drop">
                                <a class="nav-link text-white {{ (request()->is('who-we-are*')) ? 'active' : '' }}" href="#">Who are we <object data="{{ asset('frontend/asset/img/icon/down-arrow.svg')}}" type=""></object></a>
                                <div class="dropdown-menu-list">
                                    <a href="{!! route('frontend.who-we-are.about-us') !!}">About Hily Holding</a>
                                <a href="{!! route('frontend.who-we-are.chairman-profile') !!}">Chairman Message</a>
                                <a href="{!! route('frontend.who-we-are.board-of-directors') !!}">Board of Directors</a>
                                <a href="{!! route('frontend.who-we-are.leadership-team') !!}">Leadership Team</a>
                                <a href="{!! route('frontend.who-we-are.organization-chart') !!}">Organization Chart</a>
                                </div>
                            </li>
                            @php
                            $our_businesses = DB::table('our_businesses')->get();
                            @endphp
                            <li class="nav-item">
                                <a class="nav-link list-drop text-white {{ (request()->is('our-businesses-detail*')) ? 'active' : '' }}" href="{!! route('frontend.our-businesses',[app()->getLocale()]) !!}" >Our Businesses <object data="{{ asset('frontend/asset/img/icon/down-arrow.svg')}}" type=""></object></a>
                                <div class="dropdown-menu-list">
                                    @foreach($our_businesses as $businesses)
                                    <a href="{!! route('frontend.our-businesses-detail', [$businesses->slug]) !!}">{{ $businesses->title }}</a>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link list-drop text-white {{ (request()->is('investors-relations*')) ? 'active' : '' }}" href="#">Investors Relations <object data="{{ asset('frontend/asset/img/icon/down-arrow.svg')}}" type=""></object></a>
                                <div class="dropdown-menu-list">
                                    <a href="{!! route('frontend.fact-sheet') !!}">Fact Sheet</a>
                                    <a href="{!! route('frontend.investors-relations.investors-relation',[app()->getLocale()]) !!}">Financial Information</a>
                                    <a href="{!! route('frontend.share-information') !!}">Share Information</a>
                                    <a href="{!! route('frontend.investors-relations.corporate-governance',[app()->getLocale()]) !!}">Corporate Governance</a>
                                    <a href="{!! route('frontend.investors-relations.financial-calender',[app()->getLocale()]) !!}">Financial Calendar</a>
                                    <a href="{!! route('frontend.investors-relations.reports-presentations',[app()->getLocale()]) !!}">Reports & Presentations</a>
                                    <a href="{!! route('frontend.investors-relations.investor-contact',[app()->getLocale()]) !!}">Investor Contact</a>
                                    <a href="#">Other</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ (request()->is('media')) ? 'active' : '' }}" href="{!! route('frontend.media',[app()->getLocale()]) !!}">Media Center</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ (request()->is('careers')) ? 'active' : '' }}" href="{!! route('frontend.careers',[app()->getLocale()]) !!}">Careers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ (request()->is('contact-us')) ? 'active' : '' }}" href="{!! route('frontend.contact-us',[app()->getLocale()]) !!}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    @php
    $Contact_Info = DB::table('contact_info')->where('id', 1)->first();
    $footer_about = DB::table('footer_about')->where('id', 1)->first();
    @endphp
    <footer class="pt-5">
        <div class="container our-custom-container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('') }}{{ $footer_about->footer_logo }}" alt="" srcset="">
                    </a>
                    <p class="text-white text-footer">
                        {{ $footer_about->footer_about }}
                    </p>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pt-3">
                    <div class="d-flex justify-content-center flex-column">
                    <h5 class="footer-title text-white text-center">Contact info</h5>
                    <div class="mt-4">
                        <div class="d-flex align-items-start justify-content-center my-2">
                            <div class="list-icon">
                                <figure>
                                    <img src="{{ asset('frontend/asset/img/icon/location.svg')}}" alt="">
                                </figure>
                            </div>
                            <div class="list-text text-white">
                                {{ $Contact_Info->address }}
                            </div>
                        </div>
                        <div class="d-flex align-items-start justify-content-center my-2">
                            <div class="list-icon">
                                <figure>
                                    <img src="{{ asset('frontend/asset/img/icon/phone.svg')}}" alt="">
                                </figure>
                            </div>
                            <div class="list-text text-white">
                                {{ $Contact_Info->primary_phone }}
                            </div>
                        </div>
                        <div class="d-flex align-items-start justify-content-center my-2">
                            <div class="list-icon">
                                <figure>
                                    <img src="{{ asset('frontend/asset/img/icon/print.svg')}}" alt="">
                                </figure>
                            </div>
                            <div class="list-text text-white">
                                {{ $Contact_Info->secondry_phone }}
                            </div>
                        </div>
                        <div class="d-flex align-items-start justify-content-center my-2">
                            <div class="list-icon">
                                <figure>
                                    <img src="{{ asset('frontend/asset/img/icon/mail.svg')}}" alt="">
                                </figure>
                            </div>
                            <div class="list-text text-white">
                                {{ $Contact_Info->email }}
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pt-3 d-flex flex-column align-items-center">
                    <h5 class="footer-title text-white m-0">Who are we</h5>
                    <ul class="footer-menu-list p-0 m-0 mt-4">
                        <li>
                           <a href="#" class="text-white">About Hilly Holdings</a>
                        </li>
                        <li>
                            <a href="#" class="text-white">Chairman Message</a>
                         </li>
                         <li>
                            <a href="#" class="text-white">Board Of Directors</a>
                         </li>
                         <li>
                            <a href="#" class="text-white">Leadership Team</a>
                         </li>
                         <li>
                            <a href="#" class="text-white">Organization Chart</a>
                         </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pt-3">
                    <div class="d-flex justify-content-center flex-column align-items-center">
                        <h5 class="footer-title text-white">Quick Links</h5>
                        <div class="d-flex menu-gap-footer">
                            <ul class="footer-menu-list p-0 mt-4">
                                <li>
                                <a href="#" class="text-white">Our Businesses</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">Investor Relations</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">Media Center</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">Careers</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pt-3">
                    <div class="d-flex justify-content-center flex-column align-items-center">
                        <h5 class="footer-title text-white">&nbsp</h5>
                    <ul class="footer-menu-list p-0 mt-4">
                        <li>
                            <a href="#" class="text-white">Sitemap</a>
                        </li>
                        <li>
                            <a href="#" class="text-white">Terms And Conditions</a>
                        </li>
                        <li>
                            <a href="#" class="text-white">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pt-3">
                    <h5 class="footer-title text-white text-start text-lg-center m-0">Follow us</h5>
                    <p class="text-start text-lg-center text-white account">@hilyholding</p>
                    <div class="socal-menu d-flex justify-content-start justify-content-lg-center mt-4">
                        <ul class="d-flex align-items-end p-0 m-0">
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="{{ asset('frontend/asset/img/icon/Vector.svg')}}" alt="" srcset="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="{{ asset('frontend/asset/img/icon/instagram.svg')}}" alt="" srcset="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="{{ asset('frontend/asset/img/icon/linkdin.svg')}}" alt="" srcset="">
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <img src="{{ asset('frontend/asset/img/digram/dig.svg')}}" alt="" srcset="" class="w-100 mt-5">
                </div>
            </div>
            <p class="text-white text-center py-3 m-0">Copyright &#169; 2022 Hily Holding. All Rights Reserved.</p>
        </div>
    </footer>
</body>
<script src="{{ asset('frontend/asset/js/jquery-1.11.0.min.js')}}"></script>
<script src="{{ asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('frontend/asset/js/slick.min.js')}}"></script>
<script src="{{ asset('frontend/asset/js/index.js')}}"></script>
</html>