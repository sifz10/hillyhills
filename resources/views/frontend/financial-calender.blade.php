@extends('layouts.frontend')

@section('content')
<style type="text/css">
    .estab p {
  font-family: Aileron;
  font-size: 20px;
}
</style>
<section class="splash calendar">
        <div class="container container-xxl">
            <h1>Financial Calender</h1>
        </div>
    </section>
    <section class="chairman_message">
        <div class="container-xxl p-0">
            <div class="row m-0">
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <div class="sidebar h-100">
                        <a href="{!! route('frontend.fact-sheet',[app()->getLocale()]) !!}">Fact Sheet</a>
                        <div class="dropdown">
                            <button class="dropdown-toggle text-white p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Financial Information
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-white" href="{!! route('frontend.investors-relations.investors-relation',[app()->getLocale()]) !!}">Quarter Reports</a></li>
                            <li><a class="dropdown-item text-white " href="{!! route('frontend.investors-relations.annual-report',[app()->getLocale()]) !!}">Annual Reports</a></li>
                            <li><a class="dropdown-item text-white" href="{!! route('frontend.investors-relations.earnings-announcements',[app()->getLocale()]) !!}">Earnings Announcements</a></li>
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
                        <a href="{!! route('frontend.investors-relations.financial-calender',[app()->getLocale()]) !!}"  class="this">Financial Calendar</a>
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
                    <section class="search-sec search-sec-fc pb-5">
                        <div class="filter-main">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6 p-0">
                                    <div class="d-flex justify-content-between flex-column flex-lg-row ">
                                        <div class="flex-1 position-relative w-50 me-2">
                                            <select id='selUser'>
                                                <option value='0'>All</option>          
                                                <option value='1'>Lorem Ipsum</option>  
                                                <option value='2'>Lorem Ipsum</option>   
                                                <option value='3'>Lorem Ipsum</option>        
                                                <option value='4'>Lorem Ipsum</option>        
                                                <option value='5'>Lorem Ipsum</option>        
                                                <option value='6'>Lorem Ipsum</option>        
                                                <option value='7'>Lorem Ipsum</option> 
                                            </select>
                                        </div>
                                        <div class="flex-1 position-relative w-50 ms-2">
                                            <select id='selUser'>
                                                <option value='0'>2015-2016</option>          
                                                <option value='1'>2016-2017</option>  
                                                <option value='2'>2017-2018</option>   
                                                <option value='3'>2018-2019</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="d-flex justify-content-end">
                                        <div class="flex-1 position-relative w-50">
                                            <input type="text" name="" placeholder="Search" class="w-100" id="">
                                            <object data="{{ asset('frontend/asset/img/icon/search.svg')}}" type=""></object>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="pdf-block mt-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-area-pdf">
                                <h6>11/08/2022</h6>
                                <h4>IHC Sail Into Turkish Market and 
                                    Acquires 50% of Renewable Energy 
                                    Company “Kalyon Enerji” in AED 1.8 
                                    billion Transaction</h4>
                            </div>
                            <div class="pdf-icon">
                                <p>Press Release</p>
                                <object data="{{ asset('frontend/asset/img/icon/adobe.svg')}}" type=""></object>
                            </div>
                        </div>
                    </div>
                    <div class="pdf-block mt-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-area-pdf">
                                <h6>11/08/2022</h6>
                                <h4>IHC Sail Into Turkish Market and 
                                    Acquires 50% of Renewable Energy 
                                    Company “Kalyon Enerji” in AED 1.8 
                                    billion Transaction</h4>
                            </div>
                            <div class="pdf-icon">
                                <p>Press Release</p>
                                <object data="{{ asset('frontend/asset/img/icon/adobe.svg')}}" type=""></object>
                            </div>
                        </div>
                    </div>
                    <div class="pdf-block mt-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-area-pdf">
                                <h6>11/08/2022</h6>
                                <h4>IHC Sail Into Turkish Market and 
                                    Acquires 50% of Renewable Energy 
                                    Company “Kalyon Enerji” in AED 1.8 
                                    billion Transaction</h4>
                            </div>
                            <div class="pdf-icon">
                                <p>Press Release</p>
                                <object data="{{ asset('frontend/asset/img/icon/adobe.svg')}}" type=""></object>
                            </div>
                        </div>
                    </div>
                    <div class="pdf-block mt-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-area-pdf">
                                <h6>11/08/2022</h6>
                                <h4>IHC Sail Into Turkish Market and 
                                    Acquires 50% of Renewable Energy 
                                    Company “Kalyon Enerji” in AED 1.8 
                                    billion Transaction</h4>
                            </div>
                            <div class="pdf-icon">
                                <p>Press Release</p>
                                <object data="{{ asset('frontend/asset/img/icon/adobe.svg')}}" type=""></object>
                            </div>
                        </div>
                    </div>
                    <div class="pdf-block mt-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-area-pdf">
                                <h6>11/08/2022</h6>
                                <h4>IHC Sail Into Turkish Market and 
                                    Acquires 50% of Renewable Energy 
                                    Company “Kalyon Enerji” in AED 1.8 
                                    billion Transaction</h4>
                            </div>
                            <div class="pdf-icon">
                                <p>Press Release</p>
                                <object data="{{ asset('frontend/asset/img/icon/adobe.svg')}}" type=""></object>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center num-list mt-5">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous"><object data="{{ asset('frontend/asset/img/icon/arrow_back.svg')}}" type=""></object>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link active-page" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <object data="{{ asset('frontend/asset/img/icon/arrow_forward.svg')}}" type=""></object>
                                </a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection