@extends('layouts.frontend')

@section('content')
    <section class="splash">
        <div class="container  container-xxl">
            <h1>Our Businesses</h1>
        </div>
      </section>
      <section class="my-5">
        <div class="container  container-xxl">
            <p class="m-0 business-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
        </div>
        <div class="center-bus-sli">
            @foreach($Our_Businesses as $Businesses)
            <div class="cen-sli">
                <img src="{{ asset('') }}{{ $Businesses->background_image }}" alt="" srcset="" class="w-100">
                <div class="slide-text">
                    <object data="{{ asset('') }}{{ $Businesses->logo_image }}" type=""></object>
                    <h4 class="m-0 text-white">{{ $Businesses->title }}</h4>
                </div>
                <div class="overlay">
                    <object data="{{ asset('') }}{{ $Businesses->logo_image }}" type=""></object>
                    <p class="mt-4">{{ $Businesses->short_description }}</p>
                    <a href="{!! route('frontend.our-businesses-detail', $Businesses->slug,[app()->getLocale()]) !!}">Read more</a>
                </div>
            </div>
            @endforeach
        </div>
      </section>
      <section class="my-5">
        <div class="center-bus-sli">
            @foreach($Our_Businesses as $Businesses)
            <div class="cen-sli">
                <img src="{{ asset('') }}{{ $Businesses->background_image }}" alt="" srcset="" class="w-100">
                <div class="slide-text">
                    <object data="{{ asset('') }}{{ $Businesses->logo_image }}" type=""></object>
                    <h4 class="m-0 text-white">{{ $Businesses->title }}</h4>
                </div>
                <div class="overlay">
                    <object data="{{ asset('') }}{{ $Businesses->logo_image }}" type=""></object>
                    <p class="mt-4">{{ $Businesses->short_description }}</p>
                    <a href="{!! route('frontend.our-businesses-detail', $Businesses->slug,[app()->getLocale()]) !!}" class="">
                        Read more
                    </a>
                </div>
            </div>
            @endforeach
        </div>
      </section>
@endsection