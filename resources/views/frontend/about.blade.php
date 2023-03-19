<!DOCTYPE html>
<html lang="zxx" data-scroll-index="0">
<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Byra onepage themeforest" />
    <meta name="description" content="Byra - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>About us</title>
    <!-- Favicon -->
    <link rel="icon shortcut" type="image/x-icon" href="{{ asset('frontend/favicon.ico') }}">
        
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

    <nav class="navbar navbar-expand-lg light">
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


    <!-- ==================== Start wrapper ==================== -->

    <div class="wrapper">


        <!-- ==================== Start Header ==================== -->

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-9">
                        <div class="cont">
                            <h4>it is an  <span class="stroke">incredibly</span> versatile  
                                 and durable material  that is perfect for <span
                                 class="stroke">furniture</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-wrapper bg-img bg-fixed" data-background="{{ asset('frontend/img/about.jpg') }}" data-overlay-dark="3">
                <div class="title">
                    <div class="container">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== Start Header ==================== -->



        <!-- ==================== Start Intro ==================== -->

        <section class="intro-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="htit">
                            <h4>Who We Are ?</h4>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1 col-md-8 mb-30">
                        <div class="text">
                            <p>Welcome to our bamboo furniture business, where we believe in creating high-quality, sustainable furniture that is both beautiful and functional. We are passionate about bamboo as a material and the many benefits it offers to both our customers and the environment.</p>
                            <p>Our business was founded with the goal of creating furniture that is both beautiful and environmentally friendly. We believe that furniture should be made to last, using materials that are sustainable and can be harvested in a responsible manner. This is where bamboo comes in – it is an incredibly versatile and durable material that is perfect for furniture.</p>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="item mt-30">
                            <h6></h6>
                            <p>Bamboo is a highly renewable resource, which means that it can be harvested without damaging the environment. Unlike traditional hardwoods, which can take decades to grow back, bamboo can be harvested in just a few years, making it a more sustainable choice for furniture. Additionally, bamboo is incredibly strong and durable, making it an excellent material for furniture that needs to withstand daily use.</p>
                           <br> <p>At our bamboo furniture business, we work with skilled artisans who are experts in working with this material. They use traditional techniques and modern technology to create furniture that is both beautiful and functional. Whether you are looking for a sleek modern design or something more traditional, our team can create a custom piece that fits your style and needs.</p>
                            <br> <p>One of the many benefits of bamboo furniture is its versatility. It can be used to create everything from chairs and tables to bed frames and bookcases. The natural beauty of the material also makes it a popular choice for decorative items, such as wall art and sculptures.</p>
                        <p>In addition to being beautiful and sustainable, bamboo furniture is also easy to care for. It is naturally resistant to moisture and pests, which means that it requires little maintenance. To clean your bamboo furniture, simply wipe it down with a damp cloth and mild soap.</p>

                            <br><p>At our bamboo furniture business, we are committed to using only the highest quality bamboo in our products. We source our bamboo from trusted suppliers who follow sustainable harvesting practices. We also work with our suppliers to ensure that they are paid fair wages and that their working conditions are safe and ethical.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- ==================== End Intro ==================== -->




        <!-- ==================== Start Minimal-Area ==================== -->

        <section class="min-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img">
                            <img class="thumparallax-down" src="{{ asset('frontend/img/min-area.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 valign">
                        <div class="content">
                            <h4 class="wow" data-splitting>Our Features.</h4>
                            <p class="wow txt" data-splitting>Our sustainable bamboo furniture is both beautiful and eco-friendly. Made from renewable bamboo, it's durable, versatile, and long-lasting.
                            </p>
                            <ul class="feat">
                                <li class="wow fadeInUp" data-wow-delay=".2s">
                                    <h6><span>1</span> Eco-friendly</h6>
                                    <p>Made from highly renewable bamboo</p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".4s">
                                    <h6><span>2</span>Durable</h6>
                                    <p> Strong and long-lasting material</p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".6s">
                                    <h6><span>3</span> Versatile</h6>
                                    <p>Can be used for a variety of furniture pieces</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Minimal-Area ==================== -->


 
 
 


        <!-- ==================== Start call-to-action ==================== -->

        <section class="call-action section-padding light bg-repeat bg-img" data-background="img/bg-pattern.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="content sm-mb30">
                            <h6 class="wow" data-splitting>Get In Touch</h6>
                            <h2 class="wow" data-splitting>Let's Work <b>Together</b>.</h2>
                            <h3><a href="#0">{{ $profile->email }}</a></h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 valign">
                        <a href="{{route('frontend.contact')}}" class="btn-curve btn-blc"><span>Get In Touch</span></a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================== End call-to-action ==================== -->



        <!-- ==================== Start Footer ==================== -->

        @include('frontend.layouts.footer')

        <!-- ==================== End Footer ==================== -->


    </div>

    <!-- ==================== End wrapper ==================== -->



    @include('frontend.layouts.js')

</body>
</html>