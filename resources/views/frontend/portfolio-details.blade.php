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
    <title>Portfolio</title>
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

    <header class="pages-header bg-img valign bg-fixed" data-background="{{ asset('frontend/img/ducminh-nguyen-hG3H6N6VwCY-unsplash.jpg') }}" data-overlay-dark="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1 class="custom-font">My Portfolio Details</h1>
                        <div class="path">
                            <a href="#0">Home</a><span>/</span><a href="#0" class="active">My Portfolio Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

 

        <!-- ==================== Start Intro ==================== -->

        <section class="intro-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="htit">
                            <h4><span>01 </span> Introduction</h4>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1 col-md-8">
                        <div class="text js-scroll__content">
                            <p class="extra-text">{{ $details->headline }}</p>

                            {{ $details->description}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Intro ==================== -->




        <!-- ==================== Start projdtal ==================== -->

        <section class="projdtal">
            <div class="gallery">
                @foreach ($image as $item)
                <div class="items col-lg-3 mb-30">
                    <img alt="" src="{{ asset('storage/images/' . $item->path) }}" />
                </div>
                @endforeach
               
                 
            </div>
        </section>

        <!-- ==================== End projdtal ==================== -->


    

    <!-- ==================== Start Footer ==================== -->

    @include('frontend.layouts.footer')

    <!-- ==================== End Footer ==================== -->
    
    @include('frontend.layouts.js')
</body>
</html>