<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aboutMore</title>
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
            {{-- About More Content Start  --}}
            <div class="mainContainer m-4">
                {{-- About Image Start  --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="aboutMoreImage">
                            <img class="img-fluid rounded"
                                src="{{ asset('backend/images/About/' . $aboutMoreDetails->aboutImage) }}"
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

            </div>
            {{-- About More Content End  --}}
        </div>
    </div>
    {{-- body Container Section End  --}}
</body>
<footer>
    @include('frontend.layouts.includes.footer_js')
</footer>

</html>
