<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $websiteSettingData->websiteTitle }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    {{-- All Css File Included Start --}}
    @include('frontend.layouts.includes.head_css')
    {{-- All Css File Included End --}}
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

    {{-- All js File Included Start --}}
    @include('frontend.layouts.includes.footer_js')
    {{-- All js File Included End --}}

</body>

</html>
