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
        <div class="card mt-2">
            <div class="card-header">
                <div class="backArror d-flex">
                    <a class="btn btn-md" href="{{ Route('home') }}"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row mt-2">
                        <!---Web Design Pricing Section Start --->
                        <div class="col-md-4">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4>
                                        Web Design
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="webDesignContent">
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Sample web Design</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Multiple Page Design
                                        </p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Landing Page Design
                                        </p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Email Template Design
                                        </p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>SEO Freindly Code
                                            Writting
                                        </p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Email Template Design
                                        </p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Revision Error Support
                                        </p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>User Freindly</p>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="btn btn-info btn-sm">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---Web Design Pricing Section End --->
                        <!---Web Development Pricing Section Start --->
                        <div class="col-md-4">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4>
                                        Web Development
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="webDevelopment">
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>PHP Larevel
                                            Development</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>PHP Larevel With Ajax
                                        </p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Blog Site Web Page</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Personal Portfolio
                                            website</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Ecommerce Website</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Enventory Software</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Schole Management</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Shop Management</p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="btn btn-info btn-sm">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---Web Development Pricing Section End --->
                        <!---API Development Pricing Section Start --->
                        <div class="col-md-4">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4>
                                        API Development
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="apiDevelopment">
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>PHP Larevel
                                            API Intregete</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Rest Full API</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Social Link SignUp</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Payment Getway</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Banking API</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Routing API Connect
                                        </p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>API Development</p>
                                        <p class="h6"><i class="fas fa-check-double mx-2"></i>Web API Developmnet
                                        </p>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="btn btn-info btn-sm">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---API Developmnet Pricing Section Start --->
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <h4 class="text-center">Good Support 24/7</h4>
            </div>
        </div>
    </div>
    {{-- body Container Section End  --}}
</body>
<footer>
    @include('frontend.layouts.includes.footer_js')
</footer>

</html>
