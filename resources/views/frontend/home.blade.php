@extends('layouts.frontend')

@section('content')
<section>
    <div id="carouselExampleDark" class="carousel carousel-dark slide vh-83" data-bs-ride="carousel">
        <div class="carousel-indicators">
           @foreach($get_slider as $key => $sliders)
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}" class="{{ $key ==  '0' ? 'active' : ''  }}" aria-current="true" aria-label="{{ $sliders->title }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner vh-83">
            @foreach($get_slider as $key => $sliders_img)
              <div class="carousel-item {{ $key ==  '0' ? 'active' : ''  }} vh-100">
                <img src="{{ asset('') }}{{ $sliders_img->slider_image }}" class="d-block w-100 h-100" alt="...">
                <div class="container-xxl p-0">
                    <div class="carousel-caption d-block text-box">
                        <h5 class="slider-title">{{ $sliders_img->description }}</h5>
                        <a href="#" class="announce-btn">Read more</a>
                    </div>
                </div>
              </div>
          @endforeach
        </div>
      </div>
</section>
    <section class="home-about">
        <div class="row m-0 align-items-center">
            <div class="col-lg-5 col-md-6 col-sm-12 p-0">
                <img src="{{ asset('frontend/asset/img/home-about.jpg')}}" alt="" srcset="" class="w-100">
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 px-5 py-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="col-title">
                        <h2 class="sec-title m-0">
                            About Us
                        </h2>
                    </div>
                    <div class="col-tit-btn">
                        <a href="#">Read more</a>
                    </div>
                </div>
                <h4 class="enabler">
                    AN ENABLER OF ABU DHABI'S PROSPERITY COMMITTED TO FUTURE GENERATIONS
                </h4>
                <p class="my-4">
                    We believe that to build a prosperous society in Abu Dhabi, we must
                    drive the development of high performing companies that consistently
                    deliver value as well as support the realisation of Abu Dhabi's
                    economic vision.
                </p>
                <p class="my-4">
                    We believe that to build a prosperous society in Abu Dhabi, we must
                    drive the development of high performing companies that consistently
                    deliver value as well as support the realisation of Abu Dhabi's
                    economic vision.
                </p>
                <div class="row py-4 text-grids">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <h2>2018</h2>
                        <p>ADQ was established in 2018 with headquarters in Abu Dhabi</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <h2>2019</h2>
                        <p>ADQ was established in 2018 with headquarters in Abu Dhabi</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <h2>2020</h2>
                        <p>ADQ was established in 2018 with headquarters in Abu Dhabi</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <h2>2022</h2>
                        <p>ADQ was established in 2018 with headquarters in Abu Dhabi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="business py-5">
        <div class="section-title px-5">
            <div class="d-flex justify-content-between align-items-start align-items-md-center mb-4 flex-column flex-md-row">
                <div class="col-title">
                    <h2 class="sec-title m-0">
                        Our Businesses
                    </h2>
                    <p>Our services are integrated to cater of client needs from strategy to execution</p>
                </div>
                <div class="col-tit-btn">
                    <a href="#">Explore all</a>
                </div>
            </div>
            <div class="grid-slider position-relative">
                <div>
                    <div class="slide-1 m-2 position-relative">
                        <img src="{{ asset('frontend/asset/img/business/slide-1.jpg')}}" alt="" srcset="" class="w-100">
                        <div class="text">
                            <img src="{{ asset('frontend/asset/img/logo/site 1.svg')}}" alt="" srcset="">
                            <h4>Bussiness Three</h4>
                            <p>
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus
                                suscipit tortor eget felis porttitor volutpat
                            </p>
                            <a href="#" class="magna">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-1 m-2 position-relative">
                        <img src="{{ asset('frontend/asset/img/business/slide-1.jpg')}}" alt="" srcset="" class="w-100">
                        <div class="text">
                            <img src="{{ asset('frontend/asset/img/logo/site 1.svg')}}" alt="" srcset="">
                            <h4>Bussiness Three</h4>
                            <p>
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus
                                suscipit tortor eget felis porttitor volutpat
                            </p>
                            <a href="#" class="magna">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-1 m-2 position-relative">
                        <img src="{{ asset('frontend/asset/img/business/slide-1.jpg')}}" alt="" srcset="" class="w-100">
                        <div class="text">
                            <img src="{{ asset('frontend/asset/img/logo/site 1.svg')}}" alt="" srcset="">
                            <h4>Bussiness Three</h4>
                            <p>
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus
                                suscipit tortor eget felis porttitor volutpat
                            </p>
                            <a href="#" class="magna">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-1 m-2 position-relative">
                        <img src="{{ asset('frontend/asset/img/business/slide-1.jpg')}}" alt="" srcset="" class="w-100">
                        <div class="text">
                            <img src="{{ asset('frontend/asset/img/logo/site 1.svg')}}" alt="" srcset="">
                            <h4>Bussiness Three</h4>
                            <p>
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus
                                suscipit tortor eget felis porttitor volutpat
                            </p>
                            <a href="#" class="magna">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <section class="blogs">
        <div class="blog-inner px-4">
            <div class="d-flex justify-content-between align-items-start align-items-md-center mb-4 flex-column flex-md-row">
                <div class="col-title">
                    <h2 class="sec-title m-0">
                        Media Center
                    </h2>
                </div>
                <div class="col-tit-btn">
                    <a href="#">Explore all</a>
                </div>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="bg-blog holding">
                    <p class="text-white">Augest 8, 2022</p>
                    <h3 class="text-white">Hily Holding joins Enduring Earth initiative to accelerate global conservation
                        efforts</h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="d-flex dead-end flex-column flex-md-row">
                    <div class="col">
                        <img src="{{ asset('frontend/asset/img/blog/blog-2.jpg')}}" alt="" srcset="" class="w-100">
                    </div>
                    <div class="col">
                        <div class="bg-blog">
                            <p class="text-black">July 22, 2022</p>
                            <h3 class="text-black">No such thing as a dead-end job, new Hily holdings research finds</h3>
                        </div>
                    </div>
                </div>
                <div class="d-flex businesses">
                    <div class="col">
                        <div class="bg-blog">
                            <p class="text-white">July 22, 2022</p>
                            <h3 class="text-white">Hily Holding and Workday team up to unleash the power of finance and people data for businesses</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="d-flex dead-end flex-column flex-md-row h-100">
                    <div class="col">
                        <div class="bg-blog">
                            <p class="text-black">July 22, 2022</p>
                            <h3 class="text-black">No such thing as a dead-end job, new Hily holdings research finds</h3>
                        </div>
                    </div>
                    <div class="col h-100">
                        <img src="{{ asset('frontend/asset/img/blog/blog-3.jpg')}}" alt="" srcset="" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="d-flex dead-end flex-column flex-md-row">
                    <div class="col">
                        <div class="bg-blog">
                            <p class="text-black">July 12, 2022</p>
                            <h3 class="text-black">No such thing as a dead-end job, new Hily holdings research finds</h3>
                        </div>
                        <a href="#" class="blog-btns">Read more on our blog <img src="{{ asset('frontend/asset/img/icon/btn-arrow.svg')}}" alt="" srcset=""></a>
                    </div>
                    <div class="col">
                        <img src="{{ asset('frontend/asset/img/blog/blog-4.jpg')}}" alt="" srcset="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="carrer">
        <div class="row m-0 align-items-center">
            <div class="col-lg-5 col-md-6 col-sm-12 p-5">
                <h2 class="mb-3">
                    Join Hily<br> Holding
                </h2>
                <p class="mb-4">Come to Hily Holding to do the best work, with the best teams and truly be 
                at your best.</p>
                <a href="#">Careers</a>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 p-0">
                <img src="{{ asset('frontend/asset/img/career.jpg')}}" alt="" srcset="" class="w-100">
            </div>
        </div>
    </section>
@endsection
