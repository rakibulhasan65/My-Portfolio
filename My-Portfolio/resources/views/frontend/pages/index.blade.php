@extends('frontend/layouts/master')

@section('content')
    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <img class="img-fluid w-100 rounded-circle shadow-sm"
                        src="{{ asset('backend/images/Banners/' . $bannerDataShow->image) }}" alt="Banner">
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">
                        {{ $bannerDataShow->name }}</h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">
                        @foreach ($skillsDataShow as $skillsData)
                            <text>{{ $skillsData->devSkillsCategory }},</text>
                        @endforeach
                    </div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="{{ asset('backend/images/Banners/' . $bannerDataShow->resume) }}"
                            class="btn btn-outline-light mr-5">Download CV</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="{{ $bannerDataShow->resumeVideo }}" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100"
                        src="{{ asset('backend/images/About/' . $aboutDataShow->aboutImage) }}" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">{{ $aboutDataShow->aboutTitle }}</h3>
                    <p>{{ $aboutDataShow->aboutDescription }}</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2">
                            <h6>Name: <span class="text-secondary">{{ $aboutDataShow->name }}</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Birthday: <span class="text-secondary">{{ $aboutDataShow->birth }}</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Degree: <span class="text-secondary">{{ $aboutDataShow->degree }}</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Experience: <span class="text-secondary">{{ $aboutDataShow->experience }}</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Phone: <span class="text-secondary">{{ $aboutDataShow->phone }}</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Email: <span class="text-secondary">{{ $aboutDataShow->email }}</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Address: <span class="text-secondary">{{ $aboutDataShow->address }}</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Freelance: <span class="text-secondary">
                                    @if ($aboutDataShow->freelance == 1)
                                        Avaiable
                                    @else
                                        Not Avaiable
                                    @endif
                                </span></h6>
                        </div>
                    </div>
                    <a href="" class="btn btn-outline-primary mr-4">Hire Me</a>
                    <a href="" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        @foreach ($educationDataShow as $educationData)
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute"
                                    style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">{{ $educationData->educationTitle }}</h5>
                                <p class="mb-2"><strong>{{ $educationData->instituteName }}</strong> |
                                    <small>{{ $educationData->passingYears }}</small>
                                </p>
                                <p>{{ $educationData->description }}</p>
                            </div>
                            <!--End Education -->
                        @endforeach
                        {{-- End Education Foreach  --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Expericence</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        @foreach ($experienceDataShow as $experienceData)
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute"
                                    style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">{{ $experienceData->experienceTitle }}</h5>
                                <p class="mb-2"><strong>{{ $experienceData->companyName }}</strong> |
                                    <small>{{ $experienceData->years }}</small>
                                </p>
                                <p>{{ $experienceData->description }}</p>
                            </div> <!-- Job Experiance End -->
                        @endforeach
                        <!-- foreach End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">HTML</h6>
                            <h6 class="font-weight-bold">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">CSS</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PHP</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Javascript</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Angular JS</h6>
                            <h6 class="font-weight-bold">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Wordpress</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Services</h1>
            </div>
            <div class="row pb-3">
                @foreach ($serviceDataShow as $serviceData)
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i
                                class="fas fa-2x fa-{{ $serviceData->serviceIcon }} service-icon bg-primary text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0">{{ $serviceData->serviceTitle }}</h4>
                        </div>
                        <p>{{ $serviceData->serviceDescription }}</p>
                        <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                    </div>
                    <!--End Services-->
                @endforeach

            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Portfolio</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Web Design</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Web Development</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                @foreach ($galleryDataShow as $galleryDataShow)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100"
                                src="{{ asset('backend/images/Gallery/' . $galleryDataShow->galleryImage) }}"
                                alt="gallery">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="{{ asset('backend/images/Gallery/' . $galleryDataShow->galleryImage) }}"
                                    data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--//Web Design--->
                <!---//Web Design end---->
                {{-- @foreach ($galleryDataShow as $galleryShow) --}}
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="{{ asset('backend/images/Gallery/') }}"
                            alt="gallery">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ asset('backend/images/Gallery/') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--//Web Development--->
                {{-- @endforeach --}}
                <!---//Web Development end---->
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonial">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">SUPPORT</h1>
                <h1 class="position-absolute text-uppercase text-primary">TECHNICAL SUPPORT</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($supportDataShow as $supportData)
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-light mb-4">{{ $supportData->description }}</h4>
                                <img class="img-fluid rounded-circle mx-auto mb-3"
                                    src="{{ asset('backend/images/Support/' . $supportData->image) }}"
                                    style="width: 80px; height: 80px;">
                                <h5 class="font-weight-bold m-0">{{ $supportData->name }}</h5>
                                <span>{{ $supportData->profession }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->




    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                <h1 class="position-absolute text-uppercase text-primary">Contact Me</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>
                        <form action="{{ Route('sendMessage') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" name="name"
                                        placeholder="Your Name" required="required"
                                        data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" name="email"
                                        placeholder="Your Email" required="required"
                                        data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" name="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" name="message" placeholder="Message" required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" type="submit">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
