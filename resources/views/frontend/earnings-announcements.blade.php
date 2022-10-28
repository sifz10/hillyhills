@extends('layouts.frontend')

@section('content')
<style type="text/css">
    .estab p {
  font-family: Aileron;
  font-size: 20px;
}
</style>
<section class="splash investor">
        <div class="container container-xxl">
            <h1>Investor Relations</h1>
        </div>
    </section>
    <section class="chairman_message">
        <div class="container-xxl p-0">
            <div class="row m-0">
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <div class="sidebar h-100">
                        <a href="{!! route('frontend.fact-sheet',[app()->getLocale()]) !!}">Fact Sheet</a>
                        <div class="dropdown">
                            <button class="dropdown-toggle text-white p-0 show" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Financial Information
                            </button>
                            <ul class="dropdown-menu show">
                            <li><a class="dropdown-item text-white" href="{!! route('frontend.investors-relations.investors-relation',[app()->getLocale()]) !!}">Quarter Reports</a></li>
                            <li><a class="dropdown-item text-white " href="{!! route('frontend.investors-relations.annual-report',[app()->getLocale()]) !!}">Annual Reports</a></li>
                            <li><a class="dropdown-item text-white this" href="{!! route('frontend.investors-relations.earnings-announcements',[app()->getLocale()]) !!}">Earnings Announcements</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle text-white p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Share Information
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-white" href="{!! route('frontend.share-information',[app()->getLocale()]) !!}">Share Series</a></li>
                                <li><a class="dropdown-item text-white" href="{!! route('frontend.share-information-graph',[app()->getLocale()]) !!}">Share Graph</a></li>
                            </ul>
                        </div>
                        <a href="{!! route('frontend.investors-relations.corporate-governance',[app()->getLocale()]) !!}">Corporate Governance</a>
                        <a href="{!! route('frontend.investors-relations.financial-calender',[app()->getLocale()]) !!}">Financial Calendar</a>
                        <a href="{!! route('frontend.investors-relations.reports-presentations',[app()->getLocale()]) !!}">Reports & Presentations</a>
                        <a href="{!! route('frontend.investors-relations.investor-contact',[app()->getLocale()]) !!}">Investor Contact</a>
                        <div class="dropdown">
                            <button class="dropdown-toggle text-white p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Others
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-white" href="#">Corporate Governance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 bg-ligit-yell p-5">
                    <h2 class="report-title">Earnings Announcements</h2>
                    <hr class="report-border"/>
                    <div class="row my-4">
                        <div class="col-12 col-md-2 col-lg-2">
                            <h4 class="year">2022</h4>
                        </div>
                        <div class="col-12 col-md-10 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="card-custom">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex align-items-end justify-content-end">
                                                <object data="{{ asset('frontend/asset/img/icon/bi_box-arrow-in-up-right.svg')}}" type=""></object>
                                            </div>
                                            <h4>Announcements 1</h4>
                                            <p>Published Date:  13-May-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="report-border"/>
                    <div class="row my-4">
                        <div class="col-12 col-md-2 col-lg-2">
                            <h4 class="year">2021</h4>
                        </div>
                        <div class="col-12 col-md-10 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="card-custom">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex align-items-end justify-content-end">
                                                <object data="{{ asset('frontend/asset/img/icon/bi_box-arrow-in-up-right.svg')}}" type=""></object>
                                            </div>
                                            <h4>Announcements 1</h4>
                                            <p>Published Date:  13-May-2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="card-custom">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex align-items-end justify-content-end">
                                                <object data="{{ asset('frontend/asset/img/icon/bi_box-arrow-in-up-right.svg')}}" type=""></object>
                                            </div>
                                            <h4>Announcements 1</h4>
                                            <p>Published Date:  13-May-2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="card-custom">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex align-items-end justify-content-end">
                                                <object data="{{ asset('frontend/asset/img/icon/bi_box-arrow-in-up-right.svg')}}" type=""></object>
                                            </div>
                                            <h4>Announcements 1</h4>
                                            <p>Published Date:  13-May-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="report-border"/>
                    <div class="row my-4">
                        <div class="col-12 col-md-2 col-lg-2">
                            <h4 class="year">2020</h4>
                        </div>
                        <div class="col-12 col-md-10 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="card-custom">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex align-items-end justify-content-end">
                                                <object data="{{ asset('frontend/asset/img/icon/bi_box-arrow-in-up-right.svg')}}" type=""></object>
                                            </div>
                                            <h4>Announcements 1</h4>
                                            <p>Published Date:  13-May-2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="card-custom">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex align-items-end justify-content-end">
                                                <object data="{{ asset('frontend/asset/img/icon/bi_box-arrow-in-up-right.svg')}}" type=""></object>
                                            </div>
                                            <h4>Announcements 1</h4>
                                            <p>Published Date:  13-May-2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="card-custom">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex align-items-end justify-content-end">
                                                <object data="{{ asset('frontend/asset/img/icon/bi_box-arrow-in-up-right.svg')}}" type=""></object>
                                            </div>
                                            <h4>Announcements 1</h4>
                                            <p>Published Date:  13-May-2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="card-custom">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex align-items-end justify-content-end">
                                                <object data="{{ asset('frontend/asset/img/icon/bi_box-arrow-in-up-right.svg')}}" type=""></object>
                                            </div>
                                            <h4>Announcements 1</h4>
                                            <p>Published Date:  13-May-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="report-border"/>
                    <div class="row my-4">
                        <div class="col-12 col-md-2 col-lg-2">
                            <h4 class="year">2019</h4>
                        </div>
                        <div class="col-12 col-md-10 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="card-custom">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex align-items-end justify-content-end">
                                                <object data="{{ asset('frontend/asset/img/icon/bi_box-arrow-in-up-right.svg')}}" type=""></object>
                                            </div>
                                            <h4>Announcements 1</h4>
                                            <p>Published Date:  13-May-2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="card-custom">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex align-items-end justify-content-end">
                                                <object data="{{ asset('frontend/asset/img/icon/bi_box-arrow-in-up-right.svg')}}" type=""></object>
                                            </div>
                                            <h4>Announcements 1</h4>
                                            <p>Published Date:  13-May-2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="card-custom">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex align-items-end justify-content-end">
                                                <object data="{{ asset('frontend/asset/img/icon/bi_box-arrow-in-up-right.svg')}}" type=""></object>
                                            </div>
                                            <h4>Announcements 1</h4>
                                            <p>Published Date:  13-May-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection