@php

$get_heading = $Businesses->timeline_heading;
$heading_decode = json_decode($get_heading);

$get_description = $Businesses->timeline_description;
$description_decode = json_decode($get_description);
$our_businesses = DB::table('our_businesses')->get();
//print_r($our_businesses[0]->slug);die;
@endphp
@extends('layouts.frontend')

@section('content')
<section class="splash">
        <div class="container container-xxl">
            <h1>{{ $Businesses->title }}</h1>
        </div>
    </section>
    <section>
        <div class="container-xxl p-0">
        <div class="row m-0">
            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                <div class="sidebar h-100">
                    <div class="dropdown">
                        <button class="dropdown-toggle text-white {{ (request()->is('our-businesses-detail/abu-dhabi-national-foodstuff')) ? 'show' : '' }} {{ (request()->is('our-businesses-detail/foodco-national-foodstuff')) ? 'show' : '' }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consumer Goods
                        </button>
                        <ul class="dropdown-menu {{ (request()->is('our-businesses-detail/abu-dhabi-national-foodstuff')) ? 'show' : '' }} {{ (request()->is('our-businesses-detail/foodco-national-foodstuff')) ? 'show' : '' }}">
                        <li><a class="dropdown-item text-white {{ (request()->is('our-businesses-detail/abu-dhabi-national-foodstuff')) ? 'this' : '' }}" href="{!! route('frontend.our-businesses-detail', $our_businesses[0]->slug,[app()->getLocale()]) !!}">Abu Dhabi National Foodstuff</a></li>
                        <li><a class="dropdown-item text-white {{ (request()->is('our-businesses-detail/foodco-national-foodstuff')) ? 'this' : '' }}" href="{!! route('frontend.our-businesses-detail', $our_businesses[1]->slug,[app()->getLocale()]) !!}">Foodco National Foodstuff</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle text-white {{ (request()->is('our-businesses-detail/oasis-national-foodstuff')) ? 'show' : '' }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hospitality & Catering
                        </button>
                        <ul class="dropdown-menu {{ (request()->is('our-businesses-detail/oasis-national-foodstuff')) ? 'show' : '' }}">
                        <li><a class="dropdown-item text-white {{ (request()->is('our-businesses-detail/oasis-national-foodstuff')) ? 'this' : '' }}" href="{!! route('frontend.our-businesses-detail', $our_businesses[2]->slug,[app()->getLocale()]) !!}">Oasis National Foodstuff</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle text-white {{ (request()->is('our-businesses-detail/dana-plaza-real-estate')) ? 'show' : '' }} {{ (request()->is('our-businesses-detail/nurana-real-estate')) ? 'show' : '' }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Real Estate Investments
                        </button>
                        <ul class="dropdown-menu {{ (request()->is('our-businesses-detail/dana-plaza-real-estate')) ? 'show' : '' }} {{ (request()->is('our-businesses-detail/nurana-real-estate')) ? 'show' : '' }}">
                        <li><a class="dropdown-item text-white {{ (request()->is('our-businesses-detail/dana-plaza-real-estate')) ? 'this' : '' }}" href="{!! route('frontend.our-businesses-detail', $our_businesses[3]->slug,[app()->getLocale()]) !!}">Dana Plaza Real Estate</a></li>
                        <li><a class="dropdown-item text-white {{ (request()->is('our-businesses-detail/nurana-real-estate')) ? 'this' : '' }}" href="{!! route('frontend.our-businesses-detail', $our_businesses[5]->slug,[app()->getLocale()]) !!}">Nurana Real Estate</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle text-white {{ (request()->is('our-businesses-detail/5pl-solution')) ? 'show' : '' }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Logistics & Distribution
                        </button>
                        <ul class="dropdown-menu {{ (request()->is('our-businesses-detail/5pl-solution')) ? 'show' : '' }}">
                        <li><a class="dropdown-item text-white {{ (request()->is('our-businesses-detail/5pl-solution')) ? 'this' : '' }}" href="{!! route('frontend.our-businesses-detail', $our_businesses[4]->slug,[app()->getLocale()]) !!}">5pl Solutions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 bg-ligit-yell">
                <div class="row justify-content-between align-items-center pb-4">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <img src="{{ asset('frontend/asset/img/our-business-detail/focco-remove.svg')}}" alt="" srcset="" class="w-100">
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                        <div class="custom-flex">
                            <h2 class="detail-title">{!! $Businesses->short_description !!}</h2>
                        </div>
                        @foreach($heading_decode as $key => $heading)
                        <div class="custom-flex counter-tit">
                            <div>
                                <h2>{{ $heading }}</h2>
                                <p class="m-0">{{ $description_decode[$key] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                <div class="estab">
                    <p>{!! $Businesses->description !!}</p>
                </div>
                <div class="d-flex justify-content-between mb-4">
                <div class="info-area">
                    <div class="loc">
                        <img src="{{ asset('frontend/asset/img/our-business-detail/loc.svg')}}" alt="" srcset=""> <span><b>{{ $Businesses->address }}</b></span>
                    </div>
                    <div class="loc">
                        <img src="{{ asset('frontend/asset/img/our-business-detail/call.svg')}}" alt="" srcset=""> <span>{{ $Businesses->phone }}</span>
                    </div>
                    <div class="loc">
                        <img src="{{ asset('frontend/asset/img/our-business-detail/at.svg')}}" alt="" srcset=""> <span>{{ $Businesses->email }}</span>
                    </div>
                </div>
                <div class="socal-menu d-flex justify-content-start justify-content-lg-center flex-column mt-4">
                        <ul class="d-flex align-items-end justify-content-center p-0 m-0">
                            <li>
                                <a href="#">
                                    <object data="{{ asset('frontend/asset/img/icon/Vector1.svg')}}" type=""></object>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <object data="{{ asset('frontend/asset/img/icon/instagram1.svg')}}" type=""></object>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <object data="{{ asset('frontend/asset/img/icon/linkdin1.svg')}}" type=""></object>
                                </a>
                            </li>
                        </ul>
                        <div class="info-area d-flex justify-content-center align-items-center">
                            <a href="{{ $Businesses->website_link }}"><img src="{{ asset('frontend/asset/img/our-business-detail/bi_box-arrow-in-up-right.svg')}}" alt="" srcset=""> vist website</a>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        </div>
    </section>
@endsection