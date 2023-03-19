<!DOCTYPE html>
<html lang="zxx" data-scroll-index="0">
<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Byra onepage themeforest" />
    <meta name="description" content="Byra - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="LeetShield Pvt. Ltd." />

    <!-- Title  -->
    <title>Bamboo - The Sustainable Wonder Plant</title>

    
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

    <header class="slider slider-prlx fixed-slider">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                @foreach ($slider as $s)
    
              
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ asset($s->image) }}" data-overlay-dark="6">

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-9 offset-md-1">
                                    <div class="caption">
                                        <h1 data-splitting class="custom-font">{{ $s->title }}</h1>
                                        <h4 data-splitting class="custom-font">  {{ $s->headline }}</h4>
                                        <p>{{ $s->description }}</p>
                                        <a href="#0" class="btn-dis custom-font mt-30">
                                            <span>Discover More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>

            <!-- slider setting -->
            <div class="control-text custom-font">
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <span class="arrow prv">Prev</span>
                </div>
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <span class="arrow nxt">Next</span>
                </div>
            </div>
            <div class="swiper-pagination custom-font"></div>

            <div class="social-icon">
                <a href="#0">Tw</a>
                <a href="#0">Fb</a>
                <a href="#0">Be</a>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <div class="main-content">


        <!-- ==================== Start about ==================== -->

        <section id="about" class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="main-tit">
                            <h2 class="custom-font wow" data-splitting>We Make Creative Solutions</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content">
                            <p class="wow txt" data-splitting>Discover innovative and sustainable solutions made possible by bamboo. Our team specializes in designing and creating custom solutions for various industries, using bamboo as a versatile and eco-friendly material. From furniture to packaging, we offer a wide range of creative bamboo solutions for your business or project.</p>
                            <div class="exp">
                                <h3 class="custom-font">10</h3>
                                <h5 class="custom-font valign">
                                    <span class="wow" data-splitting>years <br> Of Experiences</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid office">
                <div class="row">
                    <div class="col-lg-3 lg-padding">
                        <div class="item bg-img wow imago" data-background="{{ asset('frontend/img/b00.jpg') }}">
                            <div class="num">
                                01
                            </div>
                            <span class="tit custom-font">Toronto Office</span>
                        </div>
                    </div>
                    <div class="col-lg-6 lg-padding">
                        <div class="item bg-img wow imago" data-background="{{ asset('frontend/img/b0.jpg') }}">
                            <div class="num">
                                02
                            </div>
                            <span class="tit custom-font">Toronto Office</span>
                        </div>
                    </div>
                    <div class="col-lg-3 lg-padding">
                        <div class="item bg-img wow imago" data-background="{{ asset('frontend/img/b000.jpg') }}">
                            <div class="num">
                                03
                            </div>
                            <span class="tit custom-font">Toronto Office</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End about ==================== -->



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



        <!-- ==================== Start Works ==================== -->

        <section id="works" class="work-carousel section-padding metro position-re cstm-padding light">
            <div class="container-fluid">

                <div class="sec-head custom-font text-center">
                    <h6 class="wow fadeIn" data-wow-delay=".5s">Best Works</h6>
                    <h3 class="wow" data-splitting>Portfolio.</h3>
                </div>

                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                              @foreach ($port as $p)
                                
                                <div class="swiper-slide">
                                    <div class="content wow fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="{{ asset($p->image) }}">
                                        </div>
                                        <div class="cont">
                                            <h6><a href="{{ url('portfolio-details')}}/{{$p->id}}">{{ $p->title }}</a></h6>
                                            <h4><a href="{{ url('portfolio-details')}}/{{$p->id}}">{{ $p->headline }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>

                            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                                <span class="arrow prv">Prev</span>
                            </div>
                            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                                <span class="arrow nxt">Next</span>
                            </div>

                            <div class="set-control">
                                <div class="swiper-pagination"></div>
                                <div class="activeslide custom-font"></div>
                                <div class="totalslide custom-font">{{ $totalSlides }}</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Works ==================== -->



        <!-- ==================== Start Testimonials ==================== -->
 

        <!-- ==================== End Testimonials ==================== -->
  
        <!-- ==================== Start Blog ==================== -->

        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3505.974451447881!2d77.41133001507984!3d28.510416382466175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDMwJzM3LjUiTiA3N8KwMjQnNDguNyJF!5e0!3m2!1sen!2sin!4v1678816606894!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <!-- ==================== End Blog ==================== -->


        <!-- ==================== Start call-to-action ==================== -->

        <section class="call-action section-padding bg-blc">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="content sm-mb30">
                            <h6 class="wow" data-splitting>Get In Touch</h6>
                            <h2 class="wow" data-splitting>DharamVeer Bamboo <br><b>Chick Maker</b>.</h2>
                            <h3><a href="#0">{{ $profile->email }}</a></h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 valign">
                        <a href="{{route('frontend.contact')}}" class="btn-curve btn-lit"><span>Get In Touch</span></a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================== End call-to-action ==================== -->



        <!-- ==================== Start Footer ==================== -->

     @include('frontend.layouts.footer')
        <!-- ==================== End Footer ==================== -->


    </div>


@include('frontend.layouts.js')
 
    <script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        centeredSlides: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            slideChange: function () {
                var activeSlide = swiper.realIndex + 1;
                $('.activeslide').text(('0' + activeSlide).slice(-2));
            },
        },
    });
</script>


</body>
</html>