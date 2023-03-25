<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HireMe</title>
    {{-- Header Section Included Start --}}
    @include('frontend.layouts.includes.head_css')
    {{-- Header Section Included End --}}
    {{-- Hire Me Design Css File Links Start  --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/hireMe.css') }}">
    {{-- Hire Me Design Css File Links End --}}
</head>

<body>
    {{-- body Container Section Start  --}}
    <div class="col-md-10 offset-1">
        <div class="card mt-3">
            <div class="card-header">
                <div class="backArror d-flex">
                    <a class="btn btn-md" href="{{ Route('hireMe') }}"><i class="fas fa-arrow-left"></i></a>
                    <h4 class="pt-2">Order Place Form</h4>
                </div>
            </div>

            <div class="mainContainer m-4">
                <form action="" method="post">
                    <div class="row">
                        {{-- Order Form Left Side Start  --}}
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">What's Your Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="">Your Country Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>
                        </div>{{-- Order Form Left Side End  --}}
                        {{-- Order Form Right Side Start  --}}
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Your Email Eddress</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="">Your Budget</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>
                        </div>
                        {{-- Order Form Right Side End  --}}
                        <div class="col-md-12">
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <label for="">Discriptions</label>
                                </div>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-sm btn-info" href="">Message Send</a>
                </div>
            </div>
        </div>
    </div>
    {{-- body Container Section End  --}}
</body>
<footer>
    @include('frontend.layouts.includes.footer_js')
</footer>

</html>
