<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ServicesMore</title>
    {{-- Header Section Included Start --}}
    @include('frontend.layouts.includes.head_css')
    {{-- Header Section Included End --}}
</head>

<body>
    {{-- body Container Section Start  --}}
    <div class="col-md-10 offset-1">
        <div class="card mt-3">
            <div class="card-header">
                <div class="backArror d-flex">
                    <a class="btn btn-md" href="{{ Route('home') }}"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            {{-- Services More Content Start  --}}
            <div class="mainContainer m-4">
                {{-- Services Image Start  --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="ServicesMoreImage d-flex justify-content-center">

                            <img src="{{ asset('backend/images/Services/' . $ServicesMoreDetails->ServicesImage) }}"
                                alt="{{ $ServicesMoreDetails->ServicesImage }}">

                        </div>
                    </div>
                    {{-- Services Image End  --}}

                    {{-- Services Text Details Start --}}
                    <div class="col-md-7">
                        <div class="ServicesMoreDetails">
                            <h3>{{ $ServicesMoreDetails->serviceTitle }}</h3>
                            <p>{{ $ServicesMoreDetails->serviceDescription }}</p>
                        </div>
                    </div>
                </div>
                {{-- Services Text Details End --}}

            </div>
            {{-- Services More Content End  --}}
        </div>
    </div>
    {{-- body Container Section End  --}}
</body>
<footer>
    @include('frontend.layouts.includes.footer_js')
</footer>

</html>
