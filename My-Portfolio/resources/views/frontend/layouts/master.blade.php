<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FreeFolio - Freelancer Portfolio Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/assets') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/assets') }}/css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">

    <!-- Navbar Start -->
    @include('frontend/layouts/includes/header')
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    @include('frontend/layouts/includes/footer')
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript {{ asset('frontend/assets') }}/Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/lib/typed/typed.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('frontend/assets') }}/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/assets') }}/js/main.js"></script>
</body>

</html>