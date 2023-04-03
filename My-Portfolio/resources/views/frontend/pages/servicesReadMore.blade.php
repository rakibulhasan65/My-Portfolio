@extends('frontend.layouts.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid ServicesMoreBannerImage d-flex align-items-center mb-5 py-5" id="home"
        style="min-height: 90vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center text-lg-center">
                    <h2>Services</h2>
                    <h3>Home <i class="fas fa-arrow-right"></i> Services</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    {{-- Services More Content Start  --}}
    <div class="mainContainer m-5">
        {{-- Services Image Start  --}}
        <div class="row">
            <div class="col-md-5 col-ms-12">
                <div class="ServicesMoreImage d-flex justify-content-center">
                    <img class="rounded shadow-md"
                        src="{{ asset('backend/images/Services/' . $ServicesMoreDetails->ServicesImage) }}"
                        alt="{{ $ServicesMoreDetails->ServicesImage }}">
                </div>
            </div>
            {{-- Services Image End  --}}

            {{-- Services Text Details Start --}}
            <div class="col-md-7 col-ms-12">
                <div class="ServicesMoreDetails text-left">
                    <h3>{{ $ServicesMoreDetails->serviceTitle }}</h3>
                    <br>
                    <br>
                    <p>{{ $ServicesMoreDetails->serviceDescription }}</p>
                </div>
            </div>
        </div>
        {{-- Services Text Details End --}}

    </div>
    {{-- Services More Content End  --}}
@endsection
