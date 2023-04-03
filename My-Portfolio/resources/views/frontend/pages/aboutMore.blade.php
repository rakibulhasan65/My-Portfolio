@extends('frontend.layouts.master')

@section('content')
    {{-- About Banner Start  --}}

    <!-- Header Start -->
    <div class="container-fluid about_bannerImage d-flex align-items-center mb-5 py-5" id="home"
        style="min-height: 90vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center text-lg-center">
                    <h2>About Us</h2>
                    <h3>Home <i class="fas fa-arrow-right"></i> About Us</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    {{-- About body Container Section Start  --}}
    {{-- About Image Start  --}}
    <div class="row m-4">
        <div class="col-md-5">
            <div class="aboutMoreImage">
                <img class="rounded shadow-md" src="{{ asset('backend/images/About/' . $aboutMoreDetails->aboutImage) }}"
                    alt="aboutImage">
            </div>
        </div>
        {{-- About Image End  --}}
        {{-- About Text Details Start --}}
        <div class="col-md-7">
            <div class="aboutMoreText">
                <h3>{{ $aboutMoreDetails->name }}</h3>
                <h4>{{ $aboutMoreDetails->aboutTitle }}</h4>
                <br>
                <p>{{ $aboutMoreDetails->aboutDescription }}</p>
            </div>
        </div>
    </div>
    {{-- About Text Details End --}}
    {{-- About body Container Section End  --}}
@endsection
