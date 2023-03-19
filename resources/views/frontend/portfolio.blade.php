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

    <header class="pages-header bg-img valign bg-fixed" data-background="{{ asset('frontend/img/portfolio.jpg') }}" data-overlay-dark="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1 class="custom-font">My Portfolio</h1>
                        <div class="path">
                            <a href="#0">Home</a><span>/</span><a href="#0" class="active">My Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

 
   <!-- ==================== Start works ==================== -->

   <section class="portfolio section-padding pt-0">
    <div class="container">
        <div class="row">

            <!-- filter links -->
            <div class="filtering col-12">
                <div class="filter">
                    <span data-filter='*' class="active">All</span>
                    @foreach ($category as $c)
                        <span data-filter='.{{$c->slug}}'>{{ $c->title }}</span>
                    @endforeach 
                </div>
            </div>

            <!-- gallery -->
            <div class="gallery full-width">

                @foreach ($port as $item)
                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items {{$item->catSlug}}">
                            <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                                <a href="{{ url('portfolio-details')}}/{{$item->id}}">
                                    <img src="{{ asset($item->image)}}" alt="image">
                                    <div class="item-img-overlay valign">
                                        <div class="overlay-info full-width">
                                            <h5 data-splitting>{{ $item->title}}</h5>
                                            <p class="wow txt" data-splitting>{{ $item->headline }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                @endforeach


               

                     

            </div>

        </div>
    </div>
</section>

<!-- ==================== End works ==================== -->
  

    

    <!-- ==================== Start Footer ==================== -->

    @include('frontend.layouts.footer')

    <!-- ==================== End Footer ==================== -->
    
    @include('frontend.layouts.js')
</body>
</html>