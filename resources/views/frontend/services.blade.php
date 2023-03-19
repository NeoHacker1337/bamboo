<!DOCTYPE html>
<html lang="zxx" data-scroll-index="0">


<!-- Mirrored from ui-themez.smartinnovates.net/items/byra/byra-light/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 07:11:35 GMT -->
<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Byra onepage themeforest" />
    <meta name="description" content="Byra - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Services</title>
    @include('frontend.layouts.css')
</head>

<body>

 

    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar change navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="" href="{{ url('/') }}">
                <img src="{{ asset('frontend/logo.png') }}" alt="logo" style="width: 33%;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            @include('frontend.layouts.menu')
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start Slider ==================== -->

    <header class="pages-header bg-img valign bg-fixed" data-background="{{ asset('frontend/img/b0.jpg') }}" data-overlay-dark="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1 class="custom-font">Our Services</h1>
                        <div class="path">
                            <a href="#0">Home</a><span>/</span><a href="#0" class="active">Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->


    <!-- ==================== Start Services ==================== -->

    <section id="services" class="services section-padding bg-repeat bg-img" data-background="{{ asset('frontend/img/bg-pattern.jpg') }}">
        <div class="container">

            <div class="sec-head custom-font text-center">
                <h6 class="wow fadeIn" data-wow-delay=".5s">Best Features</h6>
                <h3 class="wow" data-splitting>Services.</h3>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="item wow fadeInUp md-mb50" data-wow-delay=".3s">
                        <h6 class="custom-font"><span class="letr bg-img custom-font"
                                data-background="{{ asset('frontend/img/s0.jpg') }}">F</span>urniture</h6>
                        <p>Bamboo is an excellent material for furniture, as it is durable, lightweight, and eco-friendly. Bamboo chairs, tables, and beds are popular among eco-conscious consumers.</p>
                        <span class="icon pe-7s-phone"></span>
                        <a href="{{ route('frontend.services') }}" class="more custom-font">Read More <i
                                class="pe-7s-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item wow fadeInUp md-mb50" data-wow-delay=".5s">
                        <h6 class="custom-font"><span class="letr bg-img custom-font"
                                data-background="{{ asset('frontend/img/s1.jpg') }}">T</span>extiles</h6>
                        <p>Bamboo can be processed to create soft and breathable textiles, making it an ideal material for clothing, towels, and bedding..</p>
                        <span class="icon pe-7s-browser"></span>
                        <a href="{{ route('frontend.services') }}" class="more custom-font">Read More <i
                                class="pe-7s-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item wow fadeInUp sm-mb50" data-wow-delay=".7s">
                        <h6 class="custom-font"><span class="letr bg-img custom-font"
                                data-background="{{ asset('frontend/img/s2.jpg') }}">F</span>looring</h6>
                        <p>Bamboo flooring is an alternative to traditional hardwood flooring, and it is eco-friendly, durable, and easy to maintain.</p>
                        <span class="icon pe-7s-vector"></span>
                        <a href="{{ route('frontend.services') }}" class="more custom-font">Read More <i
                                class="pe-7s-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay=".9s">
                        <h6 class="custom-font"><span class="letr bg-img custom-font"
                                data-background="{{ asset('frontend/img/s3.jpg') }}">K</span>itchenware</h6>
                        <p>Bamboo utensils, cutting boards, and serving trays are popular among consumers who want eco-friendly alternatives to plastic.</p>
                        <span class="icon pe-7s-note2"></span>
                        <a href="{{ route('frontend.services') }}" class="more custom-font">Read More <i
                                class="pe-7s-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->



    

    <!-- ==================== Start Footer ==================== -->

    @include('frontend.layouts.footer')

    <!-- ==================== End Footer ==================== -->
    
    @include('frontend.layouts.js')
</body>
</html>