@extends('layouts.frontend')

@section('content')
<section class="splash media">
        <div class="container">
            <h1>Media Center</h1>
        </div>
    </section>
    <section class="search-sec search-sec-fc py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
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
                            <input type="text" name="" placeholder="Search" id="" class="w-100">
                            <object data="{{ asset('frontend/asset/img/icon/search.svg')}}" type=""></object>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="{{ asset('frontend/asset/img/orgnization/media.jpg')}}" alt="" srcset="" class="w-100 first-media">
                </div>
                <div class="col-12 col-md-5 col-lg-5">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                            <div class="d-flex date-title">
                                <h6>DEVELOPMENT</h6>
                                <p>23 September 2020</p>
                            </div>
                            <h2 class="blok-title">How to make a website look more attractive with llustrations</h2>
                            <p class="blok-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                        </div>
                        <div class="mb-4">
                            <a href="#" class="blok-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5 grid-gap">
                <div class="col-12 col-md-4 col-lg-4">
                    <img src="{{ asset('frontend/asset/img/orgnization/media.jpg')}}" alt="" srcset="" class="w-100">
                    <div class="d-flex date-title mt-4">
                        <h6>DEVELOPMENT</h6>
                        <p>23 September 2020</p>
                    </div>
                    <h3 class="bloak-title">8 Rules of Thumb in UI Design</h3>
                    <p class="bloak-text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, solution.</p>
                    <a href="#" class="blok-btn">Read more</a>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <img src="{{ asset('frontend/asset/img/orgnization/media.jpg')}}" alt="" srcset="" class="w-100">
                    <div class="d-flex date-title mt-4">
                        <h6>DEVELOPMENT</h6>
                        <p>23 September 2020</p>
                    </div>
                    <h3 class="bloak-title">How to build strong portfolio and get a Job in UI/UX</h3>
                    <p class="bloak-text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.</p>
                    <a href="#" class="blok-btn">Read more</a>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <img src="{{ asset('frontend/asset/img/orgnization/media.jpg')}}" alt="" srcset="" class="w-100">
                    <div class="d-flex date-title mt-4">
                        <h6>DEVELOPMENT</h6>
                        <p>23 September 2020</p>
                    </div>
                    <h3 class="bloak-title">How to make a website look more attractive with illustrations</h3>
                    <p class="bloak-text">Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop.</p>
                    <a href="#" class="blok-btn">Read more</a>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <img src="{{ asset('frontend/asset/img/orgnization/media.jpg')}}" alt="" srcset="" class="w-100">
                    <div class="d-flex date-title mt-4">
                        <h6>DEVELOPMENT</h6>
                        <p>23 September 2020</p>
                    </div>
                    <h3 class="bloak-title">New Software for UI Design</h3>
                    <p class="bloak-text">Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </p>
                    <a href="#" class="blok-btn">Read more</a>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <img src="{{ asset('frontend/asset/img/orgnization/media.jpg')}}" alt="" srcset="" class="w-100">
                    <div class="d-flex date-title mt-4">
                        <h6>DEVELOPMENT</h6>
                        <p>23 September 2020</p>
                    </div>
                    <h3 class="bloak-title">How to build Creative Agency in Pandemic</h3>
                    <p class="bloak-text">At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution.</p>
                    <a href="#" class="blok-btn">Read more</a>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <img src="{{ asset('frontend/asset/img/orgnization/media.jpg')}}" alt="" srcset="" class="w-100">
                    <div class="d-flex date-title mt-4">
                        <h6>DEVELOPMENT</h6>
                        <p>23 September 2020</p>
                    </div>
                    <h3 class="bloak-title">How to make easy money in Pandemic situation</h3>
                    <p class="bloak-text">Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                    <a href="#" class="blok-btn">Read more</a>
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
    </section>
    @endsection