@extends('frontend/layouts/master')

@section('content')

    {{--Header Section Start--}}
    <div class="container allAboutSection">

        <div class="row">
            <div class="row justify-content-center">

                <div class="col-md-3 d-flex align-items-center">
                    <div class="text-left">
                        {{-- Right Side Info --}}
                        <div class="pt-40">
                            <div class="expertise mb-80">
                                <h6>Expertise</h6>
                                <span class="text-u mt-10 sub-title">Backend-END & WEB DEVELOPER</span>
                            </div>
                            <div class="clientReviews">
                                <div class="rate-stars mb-10 fz-14">
                        <span class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="ml-10">4.9</span>
                        </span>
                                </div>
                                <p>7000+ Clients Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>


                {{--                    About Image And Text--}}
                <div class="mb-50 col-md-6 aboutHeaderText text-center pt-5">
                    <h5 class="text-u pt-5">HELLO, I'M</h5>
                    <h1>{{ $aboutDataShow->name }}</h1>
                    <p>PHP Laravel Based Developer in Bangladesh</p>
                    <div class="aboutDetails text-center">

                        <img src="{{ asset('backend/images/About/' . $aboutDataShow->aboutImage) }}" alt="">
                    </div>
                </div>

                <div class="col-md-3 d-flex align-items-center">
                    {{-- Left Side Info --}}
                    <div class="text-right">
                        <div class="pt-40">
                            <div class="experience d-flex align-items-center justify-content-end mb-80">
                                <h6 class="text-u mr-10">YEARS <br> OF EXPERIENCE</h6>
                                <h2>1</h2>
                            </div>

                            <div class="feutuerWork">
                                <span class="text-u mb-15 sub-title">FEATURED WORK</span>
                                <h6>Laravel Vue Js Software Development</h6>
                                <div class="underline mt-15 sub-title">
                                    <a href="{{ Route('aboutMore', $aboutDataShow->id) }}" class="">EXPLORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    {{--Header Section End--}}



    <section>
        <div class="main-marq pt-60 pb-60">
            <div class="slide-har st1">
                <div class="box">
                    <div class="item">
                        <h4 class="d-flex align-items-center fz-70"><span>UI-UX Experience</span>
                            <span class="fz-50 ml-50 stroke icon">*</span>
                        </h4>
                    </div>
                    <div class="item">
                        <h4 class="d-flex align-items-center fz-70"><span>Web Development</span>
                            <span class="fz-50 ml-50 stroke icon">*</span>
                        </h4>
                    </div>
                    <div class="item">
                        <h4 class="d-flex align-items-center fz-70"><span>Digital Marketing</span>
                            <span class="fz-50 ml-50 stroke icon">*</span>
                        </h4>
                    </div>
                    <div class="item">
                        <h4 class="d-flex align-items-center fz-70"><span>Product Design</span>
                            <span class="fz-50 ml-50 stroke icon">*</span>
                        </h4>
                    </div>
                    <div class="item">
                        <h4 class="d-flex align-items-center fz-70"><span>Mobile Solutions</span>
                            <span class="fz-50 ml-50 stroke icon">*</span>
                        </h4>
                    </div>
                </div>
                <div class="box">
                    <div class="item">
                        <h4 class="d-flex align-items-center fz-70"><span>UI-UX Experience</span>
                            <span class="fz-50 ml-50 stroke icon">*</span>
                        </h4>
                    </div>
                    <div class="item">
                        <h4 class="d-flex align-items-center fz-70"><span>Web Development</span>
                            <span class="fz-50 ml-50 stroke icon">*</span>
                        </h4>
                    </div>
                    <div class="item">
                        <h4 class="d-flex align-items-center fz-70"><span>Digital Marketing</span>
                            <span class="fz-50 ml-50 stroke icon">*</span>
                        </h4>
                    </div>
                    <div class="item">
                        <h4 class="d-flex align-items-center fz-70"><span>Product Design</span>
                            <span class="fz-50 ml-50 stroke icon">*</span>
                        </h4>
                    </div>
                    <div class="item">
                        <h4 class="d-flex align-items-center fz-70"><span>Mobile Solutions</span>
                            <span class="fz-50 ml-50 stroke icon">*</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="serv-box section-padding pb-0 sub-bg position-re">
        <div class="container pt-30">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sec-lg-head mb-80">
                        <div class="position-re">
                            <h6 class="dot-titl-non mb-15 wow fadeIn"
                                style="visibility: visible; animation-name: fadeIn;">Featured Services</h6>
                            <h2 class="d-rotate wow animated" style="visibility: visible;">
                                <span class="rotate-text">Our Services</span>
                            </h2>
                            <p class="fz-14 mt-15">Nemo enim ipsam voluptatem quia voluptas sit odit aut
                                fugit, sed quia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="serv-list2">
                        <div class="item pt-30 pb-30 bord-thin-top">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="icon-img-50 md-mb30">
                                        <img src="assets/imgs/serv-icons/0.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <h6>Digital Product Design</h6>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <p>Creating a higher spacing and how people move through a unique.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item pt-30 pb-30 bord-thin-top">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="icon-img-50 mb-30">
                                        <img src="assets/imgs/serv-icons/1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <h6>Branding &amp; Design</h6>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <p>Creating a higher spacing and how people move through a unique.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item pt-30 bord-thin-top">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="icon-img-50 mb-30">
                                        <img src="assets/imgs/serv-icons/2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <h6>Web Development</h6>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <p>Creating a higher spacing and how people move through a unique.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="curve revers">
            <svg version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 500 250"
                 enable-background="new 0 0 500 250" xml:space="preserve" preserveAspectRatio="none">
                            <path fill="#1d1d1d"
                                  d="M250,246.5c-97.85,0-186.344-40.044-250-104.633V250h500V141.867C436.344,206.456,347.85,246.5,250,246.5z">
                            </path>
                        </svg>
        </div>
    </section>


    <section class="portfolio section-padding pb-70 sub-bg">
        <div class="container-fluid">
            <div class="gallery2" style="position: relative; height: 1145.08px;">

                <div class="row">

                    <div class="items web info-overlay mb-50" style="position: absolute; left: 0px; top: 0px;">
                        <div class="item-img o-hidden">
                            <a href="project-details1.html">
                                <div class="inner wow animated" style="visibility: visible;">
                                    <img src="assets/imgs/freelancer/works2/1.jpg" alt="image">
                                </div>
                            </a>
                        </div>
                        <div class="info text-center mt-30">
                                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                                ART</a></span>
                            <h6><a href="project-details1.html">Million Dollar Investment</a></h6>
                        </div>

                    </div>

                    <div class="width2 items app info-overlay mb-50" style="position: absolute; left: 666px; top: 0px;">
                        <div class="item-img o-hidden">
                            <a href="project-details1.html">
                                <div class="inner wow animated" style="visibility: visible;">
                                    <img src="assets/imgs/freelancer/works2/2.jpg" alt="image">
                                </div>
                            </a>
                        </div>
                        <div class="info text-center mt-30">
                                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                                ART</a></span>
                            <h6><a href="project-details1.html">Character Design</a></h6>
                        </div>
                    </div>

                    <div class="width2 items brand info-overlay mb-50"
                         style="position: absolute; left: 999px; top: 0px;">
                        <div class="item-img o-hidden">
                            <a href="project-details1.html">
                                <div class="inner wow animated" style="visibility: visible;">
                                    <img src="assets/imgs/freelancer/works2/3.jpg" alt="image">
                                </div>
                            </a>
                        </div>
                        <div class="info text-center mt-30">
                                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                                ART</a></span>
                            <h6><a href="project-details1.html">Arch Website Design</a></h6>
                        </div>
                    </div>

                    <div class="items app info-overlay mb-50" style="position: absolute; left: 666px; top: 422px;">
                        <div class="item-img o-hidden">
                            <a href="project-details1.html">
                                <div class="inner wow animated" style="visibility: visible;">
                                    <img src="assets/imgs/freelancer/works2/4.jpg" alt="image">
                                </div>
                            </a>
                        </div>
                        <div class="info text-center mt-30">
                                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                                ART</a></span>
                            <h6><a href="project-details1.html">Tamu Swahili Food</a></h6>
                        </div>
                    </div>

                    <div class="width2 items web info-overlay mb-50" style="position: absolute; left: 0px; top: 722px;">
                        <div class="item-img o-hidden">
                            <a href="project-details1.html">
                                <div class="inner wow animated" style="visibility: visible;">
                                    <img src="assets/imgs/freelancer/works2/5.jpg" alt="image">
                                </div>
                            </a>
                        </div>
                        <div class="info text-center mt-30">
                                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                                ART</a></span>
                            <h6><a href="project-details1.html">Sheno Brand Identity</a></h6>
                        </div>
                    </div>

                    <div class="width2 items brand info-overlay mb-50"
                         style="position: absolute; left: 333px; top: 722px;">
                        <div class="item-img o-hidden">
                            <a href="project-details1.html">
                                <div class="inner wow animated" style="visibility: visible;">
                                    <img src="assets/imgs/freelancer/works2/6.jpg" alt="image">
                                </div>
                            </a>
                        </div>
                        <div class="info text-center mt-30">
                                        <span class="sub-title tag mb-5 opacity-8"><a href="project-details1.html">Design
                                                ART</a></span>
                            <h6><a href="project-details1.html">Digital research</a></h6>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <section class="skills-exp section-padding" data-scroll-index="4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-lg-head mb-80">
                        <div class="position-re">
                            <h6 class="dot-titl-non mb-10 wow fadeIn"
                                style="visibility: visible; animation-name: fadeIn;">Skills &amp; Experience</h6>
                            <h2 class="fz-50 d-rotate wow animated" style="visibility: visible;">
                                <span class="rotate-text">My Experience</span>
                            </h2>
                        </div>
                    </div>
                    <div class="skill-item d-flex justify-content-between md-mb50">
                        <div class="item text-center">
                            <div class="icon-img-60 m-auto">
                                <img src="assets/imgs/freelancer/skills/figma.png" alt="">
                            </div>
                            <span class="mt-15">Figma</span>
                        </div>
                        <div class="item text-center">
                            <div class="icon-img-60 m-auto">
                                <img src="assets/imgs/freelancer/skills/wordpress.png" alt="">
                            </div>
                            <span class="mt-15">WordPress</span>
                        </div>
                        <div class="item text-center">
                            <div class="icon-img-60 m-auto">
                                <img src="assets/imgs/freelancer/skills/angular.png" alt="">
                            </div>
                            <span class="mt-15">Angular</span>
                        </div>
                        <div class="item text-center">
                            <div class="icon-img-60 m-auto">
                                <img src="assets/imgs/freelancer/skills/webflow.png" alt="">
                            </div>
                            <span class="mt-15">Webflow</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 valign">
                    <div class="exp-items full-width">
                        <div class="item d-flex pb-30 pt-30 mb-30 bord-thin-top bord-thin-bottom">
                            <div class="title">
                                <h6>Android Studio</h6>
                                <p class="fz-12">Junior Product Designer</p>
                            </div>
                            <div class="date ml-auto text-right">
                                            <span class="icon">
                                                <a href="page-about.html">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </span>
                                <p class="fz-12">2014 - 2015</p>
                            </div>
                        </div>
                        <div class="item d-flex pb-30 mb-30 bord-thin-bottom">
                            <div class="title">
                                <h6>Slack</h6>
                                <p class="fz-12">UI/UX Designer &amp; Developer</p>
                            </div>
                            <div class="date ml-auto text-right">
                                            <span class="icon">
                                                <a href="page-about.html">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </span>
                                <p class="fz-12">2015 - 2019</p>
                            </div>
                        </div>
                        <div class="item d-flex pb-30 bord-thin-bottom">
                            <div class="title">
                                <h6>Apple</h6>
                                <p class="fz-12">ios Developer</p>
                            </div>
                            <div class="date ml-auto text-right">
                                            <span class="icon">
                                                <a href="page-about.html">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </span>
                                <p class="fz-12">2019 - 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="blog-list-half crev section-padding sub-bg">
        <div class="container">
            <div class="sec-lg-head mb-80">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="dot-titl-non mb-15 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            Our Blog</h6>
                        <h2 class="d-rotate wow animated" style="visibility: visible;">
                            <span class="rotate-text">Latest News.</span>
                        </h2>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="full-width d-flex justify-content-end justify-end">
                            <div class="vew-all">
                                <a href="blog-list.html">View All Our News
                                    <span>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeIn" data-wow-delay=".4s"
                 style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="col-lg-6">
                    <div class="item md-mb80">
                        <div class="row rest">
                            <div class="col-md-6">
                                <div class="img">
                                    <img src="assets/imgs/blog/h1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 valign">
                                <div class="cont">
                                                <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6,
                                                    2022</span>
                                    <h5>
                                        <a href="blog-details.html">Free advertising for your online
                                            business.</a>
                                    </h5>
                                    <div class="tags colorbg mt-15">
                                        <a href="blog-half-img.html">Marketing</a>
                                        <a href="blog-half-img.html">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item">
                        <div class="row rest">
                            <div class="col-md-6">
                                <div class="img">
                                    <img src="assets/imgs/blog/h4.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 valign">
                                <div class="cont">
                                                <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6,
                                                    2022</span>
                                    <h5>
                                        <a href="blog-details.html">Business meeting 2023 in San
                                            Francisco.</a>
                                    </h5>
                                    <div class="tags colorbg mt-15">
                                        <a href="blog-half-img.html">Marketing</a>
                                        <a href="blog-half-img.html">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-crev section-padding">
        <div class="contact-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="sec-lg-head md-mb80">
                            <h6 class="dot-titl-non mb-10 wow fadeIn"
                                style="visibility: visible; animation-name: fadeIn;">Get In Touch</h6>
                            <h2 class="fz-50 d-rotate wow animated" style="visibility: visible;">
                                <span class="rotate-text">Let's make your brand brilliant!</span>
                            </h2>
                            <p class="fz-15 mt-10 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">If
                                you would like to work with us or just want to
                                get in
                                touch, we’d love to hear from you!</p>
                            <div class="phone fz-30 fw-600 mt-30 underline wow fadeIn"
                                 style="visibility: visible; animation-name: fadeIn;">
                                <a href="#0">+1 840 841 25 69</a>
                            </div>
                            <ul class="rest social-text d-flex mt-60">
                                <li class="mr-30">
                                    <a href="#0" class="hover-this"><span class="hover-anim">Facebook</span></a>
                                </li>
                                <li class="mr-30">
                                    <a href="#0" class="hover-this"><span class="hover-anim">Twitter</span></a>
                                </li>
                                <li class="mr-30">
                                    <a href="#0" class="hover-this"><span class="hover-anim">LinkedIn</span></a>
                                </li>
                                <li>
                                    <a href="#0" class="hover-this"><span class="hover-anim">Instagram</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 valign">
                        <div class="full-width">
                            <form id="contact-form" method="post" action="contact.php" novalidate="true">

                                <div class="messages"></div>

                                <div class="controls row">

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_name" type="text" name="name" placeholder="Name"
                                                   required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_email" type="email" name="email" placeholder="Email"
                                                   required="required">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group has-error has-danger">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                                      required="required"></textarea>
                                        </div>
                                        <div class="mt-30">
                                            <button type="submit" class="butn butn-full butn-bord radius-30 disabled">
                                                <span class="text">Let's Talk</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact End -->
@endsection
