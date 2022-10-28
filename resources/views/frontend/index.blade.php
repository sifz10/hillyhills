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
        <div class="">
        <div class="row m-0">
            <div class="col-lg-5 col-md-6 col-sm-12 p-0">
                <div class="about-img"></div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 px-5 py-4 home-about-section">
                <div class="text-about">
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
                <div class="row py-4 text-grids counter">
                    <div class="col-lg-3 col-md-6 col-sm-12 active-grid">
                        <h2><span class="count-number timer" data-to="12.8" data-speed="1500"></span>K</h2>
                        <p>Years Experience</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h2><span class="count-number timer" data-to="375" data-speed="1500"></span>K</h2>
                        <p>Work Completed</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h2><span class="count-number timer" data-to="19.2" data-speed="1500"></span>K</h2>
                        <p>Client Satisfied</p>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div></div>
        </div>
    </div>
    </section>
    <section class="business py-5">
        <div class="section-title">
            <div class="container">
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
                    <div class="slide-1 m-2 position-relative mb-0">
                        <img src="{{ asset('frontend/asset/img/window-view-abu-dhabi-2.jpg')}}" alt="" srcset="" class="w-100">
                        <div class="text">
                            <h4>DANA PLAZA REAL ESTATE</h4>
                            <p class="normal">
                                We believe that real estate is a people business, and our success depends on identifying and acquiring
                            </p>
                            <p class="hover">
                                We believe that real estate is a people business, and our success depends on identifying and acquiring properties that people want to use and experience.
                            </p>
                            <a href="our_business_detail_2.html" class="magna">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-1 m-2 position-relative mb-0">
                        <img src="{{ asset('frontend/asset/img/window-view-abu-dhabi-3.jpg')}}" alt="" srcset="" class="w-100">
                        <div class="text">
                            <h4>FOODCO NATIONAL FOODSTUFF</h4>
                            <p class="normal">
                                Created in the year 2006, Foodco National Foodstuff PJSC was earlier known as Sense Gourmet Food Company.
                            </p>
                            <p class="hover">
                                Created in the year 2006, Foodco National Foodstuff PJSC was earlier known as Sense Gourmet Food Company. 
                            </p>
                            <a href="#" class="magna">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-1 m-2 position-relative mb-0">
                        <img src="{{ asset('frontend/asset/img/window-view-abu-dhabi-4.jpg')}}" alt="" srcset="" class="w-100">
                        <div class="text">
                            <h4>5PL SOLUTIONS</h4>
                            <p class="normal">
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat
                            </p>
                            <p class="hover">
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat
                            </p>
                            <a href="#" class="magna">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-1 m-2 position-relative mb-0">
                        <img src="{{ asset('frontend/asset/img/window-view-abu-dhabi-4.jpg')}}" alt="" srcset="" class="w-100">
                        <div class="text">
                            <h4>Abu Dhabi National Foodstuff</h4>
                            <p class="normal">
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat
                            </p>
                            <p class="hover">
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat
                            </p>
                            <a href="#" class="magna">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-1 m-2 position-relative mb-0">
                        <img src="{{ asset('frontend/asset/img/window-view-abu-dhabi-4.jpg')}}" alt="" srcset="" class="w-100">
                        <div class="text">
                            <h4>Oasis National Foodstuff</h4>
                            <p class="normal">
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat
                            </p>
                            <p class="hover">
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat
                            </p>
                            <a href="#" class="magna">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-1 m-2 position-relative mb-0">
                        <img src="{{ asset('frontend/asset/img/window-view-abu-dhabi-4.jpg')}}" alt="" srcset="" class="w-100">
                        <div class="text">
                            <h4>Nurana Properties</h4>
                            <p class="normal">
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat
                            </p>
                            <p class="hover">
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat
                            </p>
                            <a href="#" class="magna">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-1 m-2 position-relative mb-0">
                        <img src="{{ asset('frontend/asset/img/window-view-abu-dhabi-4.jpg')}}" alt="" srcset="" class="w-100">
                        <div class="text">
                            <h4>Abu Dhabi National Catering</h4>
                            <p class="normal">
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat
                            </p>
                            <p class="hover">
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat
                            </p>
                            <a href="#" class="magna">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
        </div></div>
    </section>
    <section class="blogs">
        <div class="">
        <div class="blog-inner px-4">
            <div class="container">
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
        </div>
        <div class="row m-0">
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="bg-blog holding">
                    <div class="animation">
                        <p class="text-white">Augest 8, 2022</p>
                        <h3 class="text-white">Hily Holding joins Enduring Earth initiative to accelerate global conservation
                            efforts</h3>
                        <a href="#" class="hover-btn-media">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="d-flex dead-end flex-column flex-md-row">
                    <div class="col">
                        <div class="blog-2"></div>
                    </div>
                    <div class="col">
                        <div class="bg-blog">
                            <div class="animation">
                                <p class="text-black">July 22, 2022</p>
                                <h3 class="text-black">No such thing as a dead-end job, new Hily holdings research finds</h3>
                                <a href="#" class="hover-btn-media">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex businesses">
                    <div class="col">
                        <div class="bg-blog">
                            <div class="animation">
                                <p class="text-white">July 22, 2022</p>
                                <h3 class="text-white">Hily Holding and Workday team up to unleash the power of finance and people data for businesses</h3>
                                <a href="#" class="hover-btn-media">Read more</a>
                            </div>
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
                            <div class="animation">
                                <p class="text-black">July 22, 2022</p>
                                <h3 class="text-black">No such thing as a dead-end job, new Hily holdings research finds</h3>
                                <a href="#" class="hover-btn-media">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col h-100">
                        <div class="blog-3"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="d-flex dead-end flex-column flex-md-row ">
                    <div class="col d-flex flex-column justify-content-between">
                        <div class="bg-blog">
                            <p class="text-black">July 12, 2022</p>
                            <h3 class="text-black">No such thing as a dead-end job, new Hily holdings research finds</h3>
                        </div>
                        <a href="media-singal.html" class="blog-btns">Read more on our blog <img src="{{ asset('frontend/asset/img/icon/btn-arrow.svg')}}" alt="" srcset=""></a>
                    </div>
                    <div class="col">
                        <div class="blog-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="carrer py-5">
        <div class="">
            <div class="row m-0 align-items-center">
                <div class="col-lg-5 col-md-6 col-sm-12 p-5 my-5">
                    <div class="carrier-text">
                        <h2 class="mb-3">
                            Join Hily<br> Holding
                        </h2>
                        <p class="mb-4">Come to Hily Holding to do the best work, with the best teams and truly be 
                        at your best.</p>
                        <a href="#">Careers</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 p-0">
                    <div class="carrir-img"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
