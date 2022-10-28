@extends('layouts.frontend')

@section('content')
<style type="text/css">
    .estab p {
  font-family: Aileron;
  font-size: 20px;
}
</style>
<section class="splash about">
        <div class="container container-xxl">
            <h1>About Hily</h1>
        </div>
    </section>
    <section class="about-main">
        <div class="container-xxl p-0">
            <div class="row m-0">
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <div class="sidebar h-100">
                        <ul>
                            <li>
                            <a href="{!! route('frontend.who-we-are.about-us') !!}" class="active">About Hily</a>
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
                            <a href="{!! route('frontend.who-we-are.organization-chart') !!}">Organization Chart</a>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 bg-ligit-yell">
                    <div class="row intro p-5">
                        <h2 class="mb-5">About Us</h2>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                        </div>
                    </div>
                    <div class="purpose p-5">
                        <h5>20+ years of experience, driven by our purpose and guided by our values, we want to help shape a world that is better in every way. </h5>
                    </div>
                    <div class="row vision">
                        <div class="col-12 col-md-4 col-lg-4 p-0">
                            <div class="light">
                                <h4 class="mb-4">VISION</h4>
                                <p class="sub-title-vis m-0"><b>Be a support system</b></p>
                                <p>by enacting growth and enabling the best corporate governance practices across all group levels.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 p-0">
                            <div class="highlight">
                                <h4 class="mb-4">MISSION</h4>
                                <p class="sub-title-vis m-0"><b>Act as a mentor</b></p>
                                <p>by ensuring subsidiary companies are properly resourced and well managed to ultimately achieve their core objectives.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 p-0">
                            <div class="light">
                                <h4 class="mb-4">PROMISE</h4>
                                <p class="sub-title-vis m-0"><b>Sustain growth</b></p>
                                <p>by steadily driving resource optimization, improving processes and ensuring quality delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="row full-img">
                        <img src="{{ asset('frontend/asset/img/slider/32055701.jpg')}}" alt="" srcset="" class="w-100 p-0">
                    </div>
                    <div class="about-dig py-5">
                        <h3 class="text-center">5 decades of acomplishments</h3>
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 pe-5 list-style-cus">
                                <div class="item">
                                    <img src="{{ asset('frontend/asset/img/slider/about-item.jpg')}}" alt="" srcset="" class="w-100">
                                    <div class="item-text">
                                        <h6>1979</h6>
                                        <p>Abu Dhabi National Foodstuff Company was established by an Emiri Decree on January 31, 1979, under the patronage of the Crown Prince H.H. Shaikh Khalifa Bin Zayed Al Nahyan.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/asset/img/slider/about-item1.jpg')}}" alt="" srcset="" class="w-100">
                                    <div class="item-text">
                                        <h6>2019</h6>
                                        <p>As a part of the restructuring plans, Foodco National Foodstuff PJSC was formed as the FMCG arm of the mother group. Formed as a merger of two entities, Abu Dhabi National Foodstuff LLC, the company is headquartered in Al Mina Zayed, Abu Dhabi.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/asset/img/slider/about-item2.jpg')}}" alt="" srcset="" class="w-100">
                                    <div class="item-text">
                                        <h6>2021</h6>
                                        <p>Public listing of Hily Holding PJSC mothergroup</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 ps-5 list-style-cus-2">
                                <div class="item">
                                    <img src="{{ asset('frontend/asset/img/slider/about-item3.jpg')}}" alt="" srcset="" class="w-100">
                                    <div class="item-text">
                                        <h6>2006</h6>
                                        <p>A new company, Abu Dhabi National Foodstuff LLC was incorporated to take over the company’s exclusive food storage and distribution business.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/asset/img/slider/about-item4.jpg')}}" alt="" srcset="" class="w-100">
                                    <div class="item-text">
                                        <h6>2020</h6>
                                        <p>Foodco National Foodstuff PJSC, with its head office in Al Mina Zayed, Abu Dhabi, and is the subsidiary of the FMCG parent group.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-5 align-items-center fec-sec">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="row img-fec">
                                <div class="col-6">
                                    <img src="{{ asset('frontend/asset/img/slider/oil-fec.jpg')}}" alt="" srcset="" class="w-100">
                                    <img src="{{ asset('frontend/asset/img/slider/oil-fec-2.jpg')}}" alt="" srcset="" class="w-100">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('frontend/asset/img/slider/oil-fec-3.jpg')}}" alt="" srcset="" class="w-100 h-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 fec-text">
                            <h2>Take a closer look at our businesses</h2>
                            <a href="#">Explore Now</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    @endsection