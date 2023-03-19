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
    <title>Contact Us</title>
 
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
    <header class="pages-header bg-img valign bg-fixed" data-background="{{ asset('frontend/img/b0.jpg') }}" data-overlay-dark="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1 class="custom-font">Contact Us</h1>
                        <div class="path">
                            <a href="#0">Home</a><span>/</span><a href="#0" class="active">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- ==================== Start wrapper ==================== -->

    <div class="wrapper">


        <!-- ==================== Start Header ==================== -->

        

        <!-- ==================== Start Header ==================== -->



        <!-- ==================== Start Contact ==================== -->

        <section class="contact section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="form">
                            <form id="contact-form" method="post" action="https://ui-themez.smartinnovates.net/items/byra/byra-light/contact.php">

                                <div class="messages"></div>

                                <div class="controls row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Your Name"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Your Email"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input id="form_phone" type="text" name="phone" placeholder="Your Phone">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message"
                                                required="required"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn-curve btn-blc"><span>Send
                                                Message</span></button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->


    <!-- ==================== Start Footer ==================== -->

    @include('frontend.layouts.footer')

    <!-- ==================== End Footer ==================== -->
    
    @include('frontend.layouts.js')

</body>
</html>