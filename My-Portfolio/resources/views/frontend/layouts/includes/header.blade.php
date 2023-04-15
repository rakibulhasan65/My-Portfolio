<nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
    <a href="index.html" class="navbar-brand ml-lg-3">
        <img class="m-0 display-5" src="{{ asset('backend/images/Website/'.$websiteSettingData->siteLogo) }}" alt="logo">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
        <div class="navbar-nav m-auto py-0">
            <a href="{{ Route('home') }}" class="nav-item nav-link active">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#qualification" class="nav-item nav-link">Quality</a>
            <a href="#skill" class="nav-item nav-link">Skill</a>
            <a href="#service" class="nav-item nav-link">Service</a>
            <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
            <a href="#testimonial" class="nav-item nav-link">Support</a>
            <a href="#contact" class="nav-item nav-link">Contact</a>
        </div>
        <a href="#contact" class="btn btn-outline-primary d-none d-lg-block">Hire Me</a>
    </div>
</nav>
