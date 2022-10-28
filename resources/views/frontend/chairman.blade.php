@extends('layouts.frontend')

@section('content')
<section class="splash chairman">
    <div class="container">
        <h1>Chairman Message</h1>
    </div>
</section>
<section class="container-xxl p-0">
    <div class="row m-0">
        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
            <div class="sidebar h-100">
                <ul>
                    <li>
                            <a href="{!! route('frontend.who-we-are.about-us') !!}">About Hily</a>
                        </li>
                        <li>
                            <a href="{!! route('frontend.who-we-are.chairman-profile') !!}" class="active">Chairman Message</a>
                        </li>
                        <li>
                            <a href="{!! route('frontend.who-we-are.board-of-directors') !!}">Board of Directors</a>
                        </li>
                        <li>
                            <a href="{!! route('frontend.who-we-are.leadership-team') !!}">Leadership Team</a>
                        </li>
                        <li>
                            <a href="{!! route('frontend.who-we-are.organization-chart') !!}">Organization Chart</a>
                        </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 bg-ligit-yell p-5">
            <div class="d-flex align-items-end">
                <div class="custon-flex-col">
                    <img src="{{ asset('') }}{{ $ChairmanMessage->image }}" alt="" srcset="" class="w-100 lg-wid-auto">
                </div>
                <div class="custon-flex-col-2">
                    <div class="chairman-name">
                        <h2>{{ $ChairmanMessage->name }}</h2>
                        <h6>{{ $ChairmanMessage->position }}</h6>
                    </div>
                </div>
            </div>
            <div class="estab mt-4">
                <p>{!! $ChairmanMessage->description !!}</p>
            </div>
            <img src="{{ asset('') }}{{ $ChairmanMessage->sign_image }}" alt="" srcset="" class="mt-4">
        </div>
    </div>
</section>
    @endsection