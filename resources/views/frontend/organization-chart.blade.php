@extends('layouts.frontend')

@section('content')
<section class="splash organization">
        <div class="container">
            <h1>Organization Chart</h1>
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
                            <a href="{!! route('frontend.who-we-are.chairman-profile') !!}">Chairman Message</a>
                        </li>
                        <li>
                            <a href="{!! route('frontend.who-we-are.board-of-directors') !!}">Board of Directors</a>
                        </li>
                        <li>
                            <a href="{!! route('frontend.who-we-are.leadership-team') !!}">Leadership Team</a>
                        </li>
                        <li>
                            <a href="{!! route('frontend.who-we-are.organization-chart') !!}" class="active">Organization Chart</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 bg-ligit-yell p-5">
                <img src="{{ asset('') }}{{ $OrganizationChart->image }}" class="w-100 img-fit-screen"/>
            </div>
        </div>
    </section>
    @endsection