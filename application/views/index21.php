<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107208144-1"></script>
    <script>
        function gtag() {
            dataLayer.push(arguments)
        }
        window.dataLayer = window.dataLayer || [], gtag("js", new Date), gtag("config", "UA-107208144-1")
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><? echo $detail['company_name']; ?></title>
    <meta name="description" content="<? echo $detail['company_name']; ?>">
    <meta name="keywords" content="">
    <meta name="author" content="GoldEyes">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/1.5.25/jquery.isotope.min.js"
        integrity="sha512-ZYeIS5cMze3XxDC3kcrULFj/CcEm6/6q+0gxzBv+t3OKmRIj8homuq2N8+sio09Z025JJ4m/MbM2E/j05NskdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" type="image/x-icon" href="<? echo base_url().'assets/user_assets/favicon/'.$detail['favicon_image']; ?>">
    <!-- <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> -->
    <link rel="stylesheet" href="<? echo base_url().'assets/template2/css/plugins.css'; ?>">
    <link rel="stylesheet" href="<? echo base_url().'assets/template2/css/style.css?v=2.0'; ?>">
    <link rel="stylesheet" href="<? echo base_url().'assets/template2/css/font-awesome.min.css'; ?>">
    <style>
    #navigation
    {
        /* color:red; */
        background-color:<? echo $detail['header_color']; ?>;
    }
    .modern-nav.fixed:not(.scrolled)
    {
        background-color:<? echo $detail['header_color']; ?> !important;
    }
    .modern-nav.link-hover-01 .nav-links .nav-link:before,
    .modern-nav.link-hover-02 .nav-links .nav-link:before,
    .bg-colored-hover:hover,
    .bg-colored
    {
        background-color:<? echo $detail['button_color']; ?> !important;
    }
    .modern-nav.link-hover-01 .nav-container li>a.nav-link:not(.lg).active,
    .modern-nav.link-hover-01 .nav-container .nav-menu .nav-links li:not(.extra-links):hover>a.nav-link:not(.lg),
    .colored
    {
        color:<? echo $detail['button_color']; ?> !important;
    }
    </style>
</head>

<body>
    <div class="page-loader loader-wrapper bg-white">
        <div class="loader width-60 height-60 b-3 circle b-colored spin fast2x"></div>
    </div>
    <nav id="navigation" class="modern-nav fixed fixed-height fs-12 bs-xs link-hover-01 nav-white nav-lg " data-offset="75">
        <div class="container nav-container">
            <div class="row nav-wrapper justify-content-end">
                <div class="col"><a href="#home" class="logo mt-2" >
                <img style="height: 50px; max-width:150px;" src="<? echo base_url().'assets/user_assets/logo/'.$detail['logo_image']; ?>" alt="website logo" class="logo-white" > 
                <img src="<? echo base_url().'assets/user_assets/logo/'.$detail['logo_image']; ?>" style="height: 50px; max-width:150px;" alt="website logo" class="logo-dark"></a>
                </div>
                <div id="nav-menu"
                    class="col ml-auto nav-menu">
                    <ul class="nav-links justify-content-end">
                        <li class="logo-for-mobile-navigation"><img src="<? echo base_url().'assets/user_assets/logo/'.$detail['logo_image']; ?>" alt="website logo" class="logo-white" style="height: 50px; max-width:150px;"></li>
                        <li><a href="#home" class="nav-link">Home</a></li>
                        <li><a href="#profile" class="nav-link">Profile</a></li>
                        <li><a href="#contact" class="nav-link">Contact Us</a></li>
                        <li><a href="#about" class="nav-link">About Us</a></li>
                        <? if($brands['service_display']==1) { ?>
                        <li><a href="#brand" class="nav-link">Brands</a></li> <? } ?>
                        <li><a href="#product" class="nav-link">Products</a></li>
                        <li><a href="#gallery" class="nav-link">Gallery</a></li>
                        <li><a href="#feedback" class="nav-link">Feedback</a></li>
                        <li><a href="#qr" class="nav-link">QR</a></li>
                        
                        
                    </ul>
                </div>
                <div id="hamburger-menu" class="mobile-nb">
                    <div class="hamburger-menu">
                        <div class="top-bun"></div>
                        <div class="meat"></div>
                        <div class="bottom-bun"></div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div id="mobile-nav-bg" class="mobile-nav-bg slow"></div>
    </nav>
    <style>
        /* .wrapper1 {
    max-width: 1100px;
    }
    .wrapper1 nav {
    display: flex;
    justify-content: center;
    }
    .wrapper1 .items1 {
    display: flex;
    max-width: auto;
    width: 100%;
    justify-content: space-between;
    }
    .items1 span {
    padding: 7px 25px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    color:<? echo $detail['button_color']; ?>;
    border-radius: 50px;
    border: 2px solid <? echo $detail['button_color']; ?>;
    transition: all 0.3s ease;
    }
    .items1 span.active,
    .items1 span:hover {
    color: #fff;
    background: <? echo $detail['button_color']; ?>;
    }
        .gallery1 {
        display: flex;
        flex-wrap: wrap;
        margin-top: 30px;
        }
        .gallery1 .image1 {
        width: calc(100% / 4);
        padding: 7px;
        }
        .gallery1 .image1 span {
        display: flex;
        width: 100%;
        overflow: hidden;
        }
        .gallery1.image1 img {
        width: 100%;
        vertical-align: middle;
        transition: all 0.3s ease;
        }
        .gallery1 .image1:hover img {
        transform: scale(1.1);
        }
        .gallery1 .image1 .hide {
        display: none;
        }
        .gallery1 .image1.show {
        animation: animate 0.4s ease;
        }
        @media (max-width: 1000px) {
        .gallery1 .image1 {
            width: calc(100% / 3);
        }
        }
        @media (max-width: 800px) {
        .gallery1 .image1 {
            width: calc(100% / 2);
        }
        }
        @keyframes animate {
        0% {
            transform: scale(0.5);
        }
        100% {
            transform: scale(1);
        }
        }
            @media (max-width: 700px) {
        .wrapper1 nav .items1 {
            max-width: 600px;
        }
        nav .items1 span {
            padding: 7px 15px;
        }
        }
        @media (max-width: 600px) {
        .wrapper1 {
            margin: 30px auto;
        }
        .wrapper1 nav .items1 {
            flex-wrap: wrap;
            justify-content: center;
        }
        nav .items1 span {
            margin: 5px;
        }
        } */
        @import url(https://fonts.googleapis.com/css?family=Raleway);

        .containerbrands {
            padding: 1em 0;
            float: left;
            width: 50%;
            font-family: 'Raleway', sans-serif;
        }

        @media screen and (max-width: 640px) {
            .containerbrands {
                display: block;
                width: 100%;
            }
        }

        @media screen and (min-width: 900px) {
            .containerbrands {
                width: 33.33333%;
            }
        }

        .containerbrands .title {
            color: #1a1a1a;
            text-align: center;
            margin-bottom: 10px;
        }

        .content {
            position: relative;
            width: 90%;
            max-width: 400px;
            margin: auto;
            overflow: hidden;
        }

        .content .content-overlay {
            background: rgba(0, 0, 0, 0.7);
            position: absolute;
            height: 99%;
            width: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s;
        }

        .content:hover .content-overlay {
            opacity: 1;
        }

        .content-image {
            width: 100%;
        }

        .content-details {
            position: absolute;
            text-align: center;
            padding-left: 1em;
            padding-right: 1em;
            width: 100%;
            top: 50%;
            left: 50%;
            opacity: 0;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }

        .content:hover .content-details {
            top: 50%;
            left: 50%;
            opacity: 1;
        }

        .content-details h3 {
            color: #fff;
            font-weight: 500;
            letter-spacing: 0.15em;
            margin-bottom: 0.5em;
            text-transform: uppercase;
        }

        .content-details p {
            color: #fff;
            font-size: 0.8em;
        }



        .fadeIn-top {
            top: 20%;
        }



        .fadeIn-right {
            left: 80%;
        }
        @media only screen and (max-width: 767px) {
            #home {
                height: 270px !important;
                width: 100%;
            }
    
            .custom-slider .swiper-wrapper .swiper-slide {
                height: 270px !important;
                width: 100% !important;
            }
    
            .custom-slider .swiper-wrapper {
                height: 270px !important;
                width: 100% !important;
            }
    
            .custom-slider {
                width: 100% !important;
                height:270px !important;
            }
        }
    </style>

    <section id="home" class="relative fullscreen d-flex align-items-center c-default">
        <div id="home-background-slider" class="custom-slider fai zi-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide nav-to--white" data-bg="<? echo base_url().'assets/user_assets/slider/'.$detail['slider_image1']; ?>" data-swiper-autoplay="3000"></div>
                <div class="swiper-slide nav-to--white" data-bg="<? echo base_url().'assets/user_assets/slider/'.$detail['slider_image2']; ?>" data-swiper-autoplay="3000"></div>
              
            </div>
        </div>
        <div class="fai pointer-events-none zi-10 d-flex align-items-center justify-content-between">
            <div class="slider-prev pointer-events-all white bg-blur slow icon-lg zoom-out-focus bg-colored-hover mr-auto" tabindex="0" role="button" aria-label="Previous slide" aria-controls="home-background-slider"><i class="bi-chevron-left fs-25"></i></div>
            <div class="slider-next pointer-events-all white bg-blur slow icon-lg zoom-out-focus bg-colored-hover" tabindex="0" role="button" aria-label="Next slide" aria-controls="home-background-slider"><i class="bi-chevron-right fs-25"></i></div>
        </div>
        
    </section>
    <section id="profile" class="py-20" >
        <div class="container t-center">
            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h1 class="gray8 fs-50 fs-40-sm lh-50 lh-45-sm medium font-secondary uppercase"><? echo $detail['company_name']; ?><span class="colored"></span></h1>
                    <h3 class="gray8 fs-50 fs-30-sm lh-50 lh-45-sm medium font-secondary uppercase"><? echo $detail['owner_name']; ?></h3>
                   
                </div>
                <div class="col-lg-4 col-md-6 col-6 mt-30 d-flex flex-column align-items-center hover-container c-default">
                    <div class="icon-xxl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2 bg-dark-hover-item c-default dark white-hover-item slow arrow-bottom"><a href="tel:<? echo $detail['contact_no']; ?>"><i style="font-size:40px; font-weight:600; color:<? echo $detail['button_color']; ?>" class="fa fa-phone"></i></a></div>
                    <a href="tel:<? echo $detail['contact_no']; ?>"><h4 class="uppercase fs-20 mt-20">Call</h4></a>
                   
                </div>
                <div class="col-lg-4 col-md-6 col-6 mt-30 d-flex flex-column align-items-center hover-container c-default">
                    <div
                        class="icon-xxl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2 bg-dark-hover-item c-default dark white-hover-item slow arrow-bottom">
                        <a target="_blank" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']; ?>"><i style="font-size:40px; font-weight:600; color:<? echo $detail['button_color']; ?>;" class="fa fa-whatsapp"></i></a></div>
                    <a target="_blank" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']; ?>"><h4 class="uppercase fs-20 mt-20">Whatsapp</h4></a>
                
                </div>
                <div class="col-lg-4 col-md-6 col-6 mt-30 d-flex flex-column align-items-center hover-container c-default">
                    <div
                        class="icon-xxl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2 bg-dark-hover-item c-default dark white-hover-item slow arrow-bottom">
                        <a href="mailto:<? echo $detail['email']; ?>"><i style="font-size:40px; color: <? echo $detail['button_color']; ?>; font-weight:600;" class="fa fa-envelope-o"></i></a></div>
                    <a href="mailto:<? echo $detail['email']; ?>"><h4 class="uppercase fs-20 mt-20">Email</h4></a>
                
                </div>
                <div class="col-lg-4 col-md-6 col-6 mt-30 d-flex flex-column align-items-center hover-container c-default">
                    <div
                        class="icon-xxl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2 bg-dark-hover-item c-default dark white-hover-item slow arrow-bottom">
                        <a target="_blank" href="<? echo $detail['mapurl']; ?>"><i style="font-size:40px; font-weight:600; color: <? echo $detail['button_color']; ?>;" class="fa fa-map-marker"></i></a></div>
                    <a target="_blank" href="<? echo $detail['mapurl']; ?>"><h4 class="uppercase fs-20 mt-20">Location</h4></a>
                
                </div>
                <div class="col-lg-4 col-md-6 col-6 mt-30 d-flex flex-column align-items-center hover-container c-default">
                    <div
                        class="icon-xxl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2 bg-dark-hover-item c-default dark white-hover-item slow arrow-bottom">
                        <a target="_blank" href="<? echo $detail['website']; ?>"><i style="font-size:40px; color: <? echo $detail['button_color']; ?>; font-weight:600;" class="fa fa-globe"></i></a></div>
                    <a target="_blank" href="<? echo $detail['website']; ?>"><h4 class="uppercase fs-20 mt-20">Website</h4></a>
                
                </div>
                <div class="col-lg-4 col-md-6 col-6 mt-30 d-flex flex-column align-items-center hover-container c-default">
                    <div
                        class="icon-xxl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2 bg-dark-hover-item c-default dark white-hover-item slow arrow-bottom">
                        <a href="#product"><i style="font-size:40px; color:<? echo $detail['button_color']; ?>; font-weight:600;" class="fa fa-shopping-cart  "></i></a></div>
                    <a href="#"><h4 class="uppercase fs-20 mt-20">Shop</h4></a>
                
                </div>
                
            </div>
        </div>
    </section>

    <section id="contact" class="has-parallax" style="padding-top:50px; padding-bottom:50px;">
        <div class="parallax" data-bg="<? echo base_url().'assets/template2/images/i1.jpg'; ?>" data-target="#services" data-bottom-top="transform:translate3d(0px,-200px,0px);" data-top-bottom="transform:translate3d(0px,200px,0px);"></div>
        <div class="container t-center">
            <div class="row">
                <div class="container">
                    <div class="col-lg-12" style="padding-bottom:20px;">
                        <h2 style="color:#fff; text-align:center;">Get in Touch</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt-30 d-flex flex-column align-items-center hover-container c-info" data-bs-toggle="tooltip" data-bs-placement="top" data-animation="false" data-bs-html="true" title="<a href='mailto:<? echo $detail['email']; ?>'><p class='fs-16'><? echo $detail['email']; ?></p></a>">
                    <div class="icon-xl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2-hover-item c-info gray2 dark-hover-item slow arrow-bottom"><a href='mailto:<? echo $detail['email']; ?>'><i class="fa fa-envelope-o fs-23"></i></a></div>
                    <a href='<? echo $detail['email']; ?>'><h4 class="fs-17 mt-30 gray2">Email</h4></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt-30 d-flex flex-column align-items-center hover-container c-info" data-bs-toggle="tooltip" data-bs-placement="top" data-animation="false" data-bs-html="true" title="<a href='tel:<? echo $detail['contact_no']; ?>'><p class='fs-16'>+<? echo $detail['contact_no']; ?></p></a>">
                    <div class="icon-xl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2-hover-item c-info gray2 dark-hover-item slow arrow-bottom"><a href='tel:<? echo $detail['contact_no']; ?>'><i class="bi-laptop fs-23"></i></a></div>
    <? if($detail['contact_no']!="") { ?><a href='tel:<? echo $detail['contact_no']; ?>'>
    <h4 class="fs-17 mt-30 gray2">Phone</h4></a><? } ?>
   

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt-30 d-flex flex-column align-items-center hover-container c-info" data-bs-toggle="tooltip" data-bs-placement="top" data-animation="false" data-bs-html="true" title="<a href='tel:<? echo $detail['alternate_contact1']; ?>'><p class='fs-16'>+<? echo $detail['alternate_contact1']; ?></p></a>">
                    <div class="icon-xl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2-hover-item c-info gray2 dark-hover-item slow arrow-bottom"><a href='tel:<? echo $detail['alternate_contact1']; ?>'><i class="bi-laptop fs-23"></i></a></div>
    <? if($detail['alternate_contact1']!="") { ?><a href='tel:<? echo $detail['alternate_contact1']; ?>'>
    <h4 class="fs-17 mt-30 gray2">Phone</h4></a><? } ?>
   

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt-30 d-flex flex-column align-items-center hover-container c-info" data-bs-toggle="tooltip" data-bs-placement="top" data-animation="false" data-bs-html="true" title="<a href='tel:<? echo $detail['alternate_contact2']; ?>'><p class='fs-16'>+<? echo $detail['alternate_contact2']; ?></p></a>">
                    <div class="icon-xl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2-hover-item c-info gray2 dark-hover-item slow arrow-bottom"><a href='tel:<? echo $detail['alternate_contact2']; ?>'><i class="bi-laptop fs-23"></i></a></div>
    <? if($detail['alternate_contact2']!="") { ?><a href='tel:<? echo $detail['alternate_contact2']; ?>'>
    <h4 class="fs-17 mt-30 gray2">Phone</h4></a><? } ?>
   

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt-30 d-flex flex-column align-items-center hover-container c-info" data-bs-toggle="tooltip" data-bs-placement="top" data-animation="false" data-bs-html="true" title="<a href='tel:<? echo $detail['alternate_contact3']; ?>'><p class='fs-16'>+<? echo $detail['alternate_contact3']; ?></p></a>">
                    <div class="icon-xl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2-hover-item c-info gray2 dark-hover-item slow arrow-bottom"><a href='tel:<? echo $detail['alternate_contact3']; ?>'><i class="bi-laptop fs-23"></i></a></div>
    <? if($detail['alternate_contact3']!="") { ?><a href='tel:<? echo $detail['alternate_contact3']; ?>'>
    <h4 class="fs-17 mt-30 gray2">Phone</h4></a><? } ?>
   

                </div>  
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt-30 d-flex flex-column align-items-center hover-container c-info" data-bs-toggle="tooltip" data-bs-placement="top" data-animation="false" data-bs-html="true" title="<a href='<? echo $detail['mapurl'] ?>' target='_blank'><p class='fs-16'><? echo $detail['address']; ?></p></a>">
                    <div class="icon-xl radius-md b-1 b-gray3 b-dark-hover-item bg-gray2-hover-item c-info gray2 dark-hover-item slow arrow-bottom"><a href='<? echo $detail['mapurl']; ?>'' target='_blank'><i class="bi-journals fs-23"></i></a></div>
                    <a href='<? echo $detail['mapurl']; ?>' target='_blank'>
                        <h4 class="fs-17 mt-30 gray2">Address</h4></a>
                </div>
                
            </div>
        </div>
    </section>

    <section>
        <? echo $detail['maptag']; ?>
    </section>

    <section class="py-10">
        <div class="container">
            
        </div>
        <div class="container mt-30">
            <div class="row">
                
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <style>
                        
                            .p-1 {
                                padding: 0.25rem !important;
                            }

                            .mb-2,
                            .my-2 {
                                margin-bottom: 0.5rem !important;
                            }

                            .rounded {
                                border-radius: 0.25rem !important;
                            }

                            .border {
                                border: 1px solid #dee2e6 !important;
                            }

                            .input-group {
                                position: relative;
                                display: -ms-flexbox;
                                display: flex;
                                -ms-flex-wrap: wrap;
                                flex-wrap: wrap;
                                -ms-flex-align: stretch;
                                align-items: stretch;
                                width: 100%;
                            }

                            .pr-0,
                            .px-0 {
                                padding-right: 0 !important;
                            }

                            .input-group-prepend {
                                margin-right: -1px;
                                display: flex;
                            }

                            .input-group>.custom-select:not(:first-child),
                            .input-group>.form-control:not(:first-child) {
                                border-top-left-radius: 0;
                                border-bottom-left-radius: 0;
                            }

                            .input-group>.custom-select:not(:last-child),
                            .input-group>.form-control:not(:last-child) {
                                border-top-right-radius: 0;
                                border-bottom-right-radius: 0;
                            }

                            .input-group>.custom-file,
                            .input-group>.custom-select,
                            .input-group>.form-control,
                            .input-group>.form-control-plaintext {
                                position: relative;
                                -ms-flex: 1 1 auto;
                                flex: 1 1 auto;
                                width: 1%;
                                min-width: 0;
                                margin-bottom: 0;
                            }

                            .input-group-append {
                                margin-left: -1px;
                                display: flex;
                            }

                            .input-group>.input-group-append>.btn,
                            .input-group>.input-group-append>.input-group-text,
                            .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
                            .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
                            .input-group>.input-group-prepend:not(:first-child)>.btn,
                            .input-group>.input-group-prepend:not(:first-child)>.input-group-text {
                                border-top-left-radius: 0;
                                border-bottom-left-radius: 0;
                            }

                            .btn:not(:disabled):not(.disabled) {
                                cursor: pointer;
                            }

                            .input-group-append .btn,
                            .input-group-prepend .btn {
                                position: relative;
                                z-index: 2;
                            }

                            .list-inline>li {
                                padding-top: 10px;
                            }

                            .input-group .form-control {
                                border: 0px;
                            }


                            @media only screen and (max-width: 767px) {
                                .input-group-prepend .input-group-prepend-part1 {
                                    width: 10%;
                                }

                                .input-group-prepend input {
                                    width: 35%;
                                }

                                .input-group-append {
                                    width: 45%;
                                }

                                .input-group-append button {
                                    width: 100%;
                                }

                                .input-group-append .input-group-append-part1 .btn-medium {
                                    padding-right: 3px;
                                    padding-left: 3px;
                                }
                            }
                        
                    </style>
                    <div class="p-1 rounded border mb-2">
                        <div class="input-group">
                            <div class="input-group-prepend pr-5" style="margin-top:10px;">
                                <div class="input-group-prepend-part1" style="text-align: center;"
                                    class="input-group-text bg-white border-0 pr-1">
                                    +91
                                </div>
                            </div>
                            <input style="height: auto;" type="text" placeholder="Phone Number"
                                 class="form-control border-0 shadow-0 whatsapp-input-container pl-0"
                                id="myInput" pattern="[0-9]{10}" required>
                            <div class="input-group-append">
                                <div class="input-group-append-part1">
                                    <div class="modern-nav" style="width: 100%; height: 50px;">
                                        <!-- <a id="whatsappshare" href="" target="" class="nav-button bg-colored bg-colored1-hover white fs-11 uppercase extrabold py-15"
                                        title="Instagram">Share On Whatsapp </a> -->
                                        <button id="whatsappshare" type="button"  class="nav-button bg-colored bg-colored1-hover white fs-11 uppercase extrabold py-15"
                                            style="margin-top:0px;color:#fff;background-color:">


                                            Share on Whatsapp <i class="fa fa-whatsapp"></i>

                                        </button>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                            <script>
                                    $("#whatsappshare").on("click",function(){
                                        var txt;
                                        var person =document.getElementById("myInput").value;
                                        if (person == null || person == "") {
                                            alert("Please Enter Mobile Number.");
                                            }
                                            else if(isNaN(person) || person.length != 10)
                                        {
                                        alert("Please Enter Only 10 digit Mobile Number.");
                                        }
                                        else {
                                            window.open("https://wa.me/91"+person+"?text=You%20Can%20see%20my%20digital%20card%20and%20share%20to%20other%20persons");
                                        } 
                                    });
                                </script>
                          
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="modern-nav" style="width: 100%;">
                        <a href="" target="_blank"
                            class="nav-button bg-colored bg-colored1-hover white fs-11 uppercase extrabold py-15" title="Instagram">Save my Card </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover" style="text-align: center;">
                    <div class="modern-nav" style="width: 100%;">
                        <a href="" target="_blank"
                            class="nav-button bg-colored bg-colored1-hover white fs-11 uppercase extrabold py-15" >Follow</a>
                    </div>
                </div> 
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="modern-nav" style="width: 100%;">
                        <a href="" target="_blank" id="web-share"
                            class="nav-button bg-colored bg-colored1-hover white fs-11 uppercase extrabold py-15" >Share</a>
                            
                    </div>
                </div>-->
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="modern-nav" style="width: 100%;">
                        <a href="<? echo site_url().'vcard_front/vcard_generate/'.$detail['user_id']; ?>" target="_blank" class="nav-button bg-colored bg-colored1-hover white fs-11 uppercase extrabold py-15"
                            >Add Contact</a>
                            
                    </div>
                </div>





                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover" style="text-align: center;">
                    <div class="modern-nav" style="width: 100%;">
                        <a id="socialshare"
                            data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false"
                            class="nav-button bg-colored bg-colored1-hover white fs-11 uppercase extrabold py-15">Social Share<i class="fa fa-arrow-circle-down" style="padding-left: 4px;"></i></a>

                            <div class="dropdown-menu" aria-labelledby="socialshare">
                                <ul class="list-inline">
                                    <li class="list-inline-item m-1">
                                        <a target="_blank" href="https://facebook.com/sharer/sharer.php?u=https%3A//dizitalcard.in/topaz-furniture/"
                                            class="text-decoration-none p-2" title="Facebook">
                                            <i class="fa fa-facebook fa-2x text-dark"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item m-1">
                                        <a target="_blank" href="https://plus.google.com/share?url=https%3A//dizitalcard.in/topaz-furniture/"
                                            class="text-decoration-none p-2" title="Google+">
                                            <i class="fa fa-instagram fa-2x text-dark"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item m-1">
                                        <a target="_blank"
                                            href="https://news.ycombinator.com/submitlink?u=https%3A//dizitalcard.in/topaz-furniture/&t=TOPAZ%20FURNITURE"
                                            class="text-decoration-none p-2" title="Hacker News">
                                            <i class="fa fa-linkedin fa-2x text-dark"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item m-1">
                                        <a target="_blank"
                                            href="https://news.ycombinator.com/submitlink?u=https%3A//dizitalcard.in/topaz-furniture/&t=TOPAZ%20FURNITURE"
                                            class="text-decoration-none p-2" title="Hacker News">
                                            <i class="fa fa-twitter fa-2x text-dark"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                
    
            </div>
        </div>
    </section>

    <section id="about" class="pt-100 pb-80 has-parallax">
        <div class="parallax" data-bg="<? echo base_url().'assets/user_assets/about/'.$detail['about_image']; ?>" data-target="#why-we"
            data-bottom-top="transform:translate3d(0px,-200px,0px);"
            data-top-bottom="transform:translate3d(0px,200px,0px);">
            <div class="overlay">
                <style>
                    .overlay {
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.7);
                    }
                </style>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12" style="text-align: center;">
                    <h1 style="padding-top: 5px; padding-bottom:20px; color:#fff;" class=" fs-40 lh-40 medium font-secondary uppercase">About Us</h1>
                    <h1 class="gray8 fs-40 lh-40 medium font-secondary uppercase"><span
                                    class="font-tertiary colored capitalize fs-40"><? echo $detail['est_year']; ?></span></h1>
                    <h1 style="padding-top: 5px; padding-bottom:20px;" class="gray8 fs-40 lh-40 medium font-secondary uppercase"><span class="font-tertiary colored capitalize fs-40" ><? echo $detail['business_type']; ?></span></h1>
                    <h2 style="color:#fff;"><? echo $detail['about_title']; ?></h2>
                    <? $me=str_replace(['<p>', '</p>'], '', $detail['about_description']); ?>
                    <p style="text-align: justify; color:#fff;"><? echo $me; ?></p>
                    <!-- <p style="color:#fff; padding-bottom: 20px;"><i class="fa fa-check" style="padding-right: 8px; color:#fff;"></i>Manufacturer of All kind of premium
                        and Highend luxurious furnitures</p> -->
                    
                    <button class="btn btn-medium btn-greenish dropdown-toggle" type="button" id="socialshare" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color:#fff;">
                        Opening Hours 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="socialshare" style="padding-bottom:0px; margin-bottom: 0px ;">
                        <ul class="list-inline" style="padding-bottom:0px; margin-bottom: 0px ;">
                            <li class="list-inline-item m-1" style="padding-bottom:0px; margin-bottom: 0px ;">
                                <p
                                    style="color:black; font-weight: 500; padding-left:10px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                <div class="row">
                                    <div class="col-lg-3"
                                        style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                        MONDAY: 11:00 AM - 09:00 PM
                                    </div>
                                    <div class="col-lg-3"
                                        style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                        TUESDAY: 11:00 AM - 09:00 PM
                                    </div>
                                    <div class="col-lg-3"
                                        style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                        WEDNESDAY: 11:00 AM - 09:00 PM
                                    </div>
                                    <div class="col-lg-3"
                                        style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                        THURSDAY: 11:00 AM - 09:00 PM
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3"
                                        style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                        FRIDAY: 11:00 AM - 09:00 PM
                                    </div>
                                    <div class="col-lg-3"
                                        style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                        SATURDAY: 11:00 AM - 09:00 PM
                                    </div>
                                    <div class="col-lg-3"
                                        style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                        SUNDAY: 11:00 AM - 09:00 PM
                                    </div>
                                </div>
                                </p>>
                            </li>
                    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway);

        .container123 {
            padding: 1em 0;
            float: left;
            width: 50%;
            font-family: 'Raleway', sans-serif;
        }

        @media screen and (max-width: 640px) {
            .container123 {
                display: block;
                width: 100%;
            }
        }

        @media screen and (min-width: 900px) {
            .container123 {
                width: 33.33333%;
            }
        }

        .container123 .title123 {
            color: #1a1a1a;
            text-align: center;
            margin-bottom: 10px;
        }

        .content123 {
            position: relative;
            width: 90%;
            max-width: 400px;
            margin: auto;
            overflow: hidden;
        }

        .content123 .content-overlay123 {
            background: rgba(0, 0, 0, 0.7);
            position: absolute;
            height: 99%;
            width: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s;
        }

        .content123:hover .content-overlay123 {
            opacity: 1;
        }

        .content-image123 {
            width: 100%;
        }

        .content-details123 {
            position: absolute;
            text-align: center;
            padding-left: 1em;
            padding-right: 1em;
            width: 100%;
            top: 50%;
            left: 50%;
            opacity: 0;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }

        .content123:hover .content-details123 {
            top: 50%;
            left: 50%;
            opacity: 1;
        }

        .content-details123 h3 {
            color: #fff;
            font-weight: 500;
            letter-spacing: 0.15em;
            margin-bottom: 0.5em;
            text-transform: uppercase;
        }

        .content-details123 p {
            color: #fff;
            font-size: 0.8em;
        }



        .fadeIn-top123 {
            top: 20%;
        }



        .fadeIn-right123 {
            left: 80%;
        }
    </style>
    <section id="brand" class="py-10" style="background-color:#fafafa">
        <div class="container">
            <div class="d-flex flex-column align-items-center t-center">
                <h1 class="gray8 fs-50 fs-40-sm lh-50 lh-45-sm medium font-secondary uppercase">Our Brands</h1>
               
            </div>
        </div>
        <div class="container mt-30">
            <div class="row">

            <? if($brands['service_name1']!="") { ?>
            <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name1']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image1']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name1']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>

             <? if($brands['service_name2']!="") { ?>
             <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name2']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image2']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name2']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>

             <? if($brands['service_name3']!="") { ?>
             <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name3']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image3']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name3']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>

             <? if($brands['service_name4']!="") { ?>
             <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name4']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image4']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name4']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>

            <? if($brands['service_name5']!="") { ?>
             <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name5']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image5']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name5']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
            <? } ?>

            <? if($brands['service_name6']!="") { ?>
             <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name6']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image6']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name6']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>

             <? if($brands['service_name7']!="") { ?>
             <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name7']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image7']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name7']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>

             <? if($brands['service_name8']!="") { ?>
             <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name8']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image8']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name8']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>

             <? if($brands['service_name9']!="") { ?>
             <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name9']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image9']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name9']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>

             <? if($brands['service_name10']!="") { ?>
             <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name10']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image10']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name10']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>

             <? if($brands['service_name11']!="") { ?>
             <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name11']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image11']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name11']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>

             <? if($brands['service_name12']!="") { ?>
             <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name12']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image12']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <h3><? echo $brands['service_name12']; ?></h3>
                                <!-- <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>
                <!-- <? if($gallery['gallery_image1']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image1']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image1']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image1']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?> -->

                <!-- <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/template2/images/gallery/img2.jpg'; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/template2/images/gallery/img2.jpg'; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/template2/images/gallery/img2.jpg'; ?>" alt="example employee photo"></a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/template2/images/gallery/img3.jpg'; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/template2/images/gallery/img3.jpg'; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/template2/images/gallery/img3.jpg'; ?>" alt="example employee photo"></a>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/template2/images/gallery/img4.jpg'; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/template2/images/gallery/img4.jpg'; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/template2/images/gallery/img4.jpg'; ?>" alt="example employee photo"></a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/template2/images/gallery/img5.jpg'; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/template2/images/gallery/img5.jpg'; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/template2/images/gallery/img5.jpg'; ?>" alt="example employee photo"></a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/template2/images/gallery/img6.jpg'; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/template2/images/gallery/img6.jpg'; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/template2/images/gallery/img6.jpg'; ?>" alt="example employee photo"></a>
                        
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>


    <script>
        $(window).load(function () {
            var $container = $('.portfolioContainer1');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });

            $('.portfolioFilter a').click(function () {
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        });
    </script>
    <style>
        .container {
            max-width: 1200px;
            padding: 20px;
        }


        /* Critical Styles Below*/

        .portfolioFilter {
            text-align: center;
            width: 100%;
        }

        .portfolioFilter ul {
            display: inline-block;
        }

        .portfolioFilter a {
            margin-right: 10px;
            color: #666;
            text-decoration: none;
            display: inline;
        }

        .portfolioFilter a.current {
            font-weight: bold;
        }

        .sort-nav {
            width: auto;
            margin: 0 auto;
            height: auto;
            display: block;
        }

        .sort-nav li {
            float: left;
            margin-bottom: 0.2em;
            margin-right: 2px;
            list-style-type: none;
        }

        .sort-nav a {
            padding: 10px;
            background: transparent;
            color: #666;
            border: 1px solid #989898;
            border-radius: 10px;
            display: block;
            text-decoration: none;
        }

        .sort-nav a:focus,
        .sort-nav a:hover,
        .sort-nav a:active {
            color: <? echo $detail['button_color']; ?>;
            border: 1px solid <? echo $detail['button_color']; ?>;
            outline: 0;
        }

        .portfolioContainer1 img {
            margin: 5px;
            width: 550px;
            height: auto;
            padding: 10px;
        }

                @media (max-width: 1000px) {
                    .portfolioContainer1 img {
                        width: 340px;
                    }
                }

        @media (max-width: 740px) {
        .portfolioContainer1 img {
            width: 100%;
        }
        }

        @media (max-width: 475px) {
        .portfolioContainer1 img {
            width: 100%;
        }
        }

        .portfolioContainer1 div,
        img {
            /* float: left; */
        }

        .isotope-item {
            z-index: 2;
            margin: 0 auto;
        }

        .isotope-hidden.isotope-item {
            pointer-events: none;
            z-index: 1;
        }

        .z2-client {
            position: absolute;
            bottom: 35px;
            z-index: 200;
            left: 14px;
            padding: 1% 5%;
        }

        .z2-client h2 {
            font: 700 20px "Open Sans", sans-serif;
            color: #FFF !important;
            margin-bottom: 5px !important;
            text-transform: uppercase;
            text-shadow: 0px 0px 5px #000;
        }

        .z2-client .see_btn {
            font: 700 12px "Open Sans", sans-serif;
            color: #FFF !important;
            padding: 3px 8px !important;
            border: 1px solid #FFF;
            display: inline-block !important;
            text-transform: uppercase;
            text-decoration: none;
            text-shadow: 0px 0px 2px #000;
            box-shadow: 0px 0px 2px 0px #000;
        }

        .z-hovr {
            opacity: 1;
            -webkit-transform: scale(1, 1);
            -webkit-transition-timing-function: ease-out;
            -webkit-transition-duration: 250ms;
            -moz-transform: scale(1, 1);
            -moz-transition-timing-function: ease-out;
            -moz-transition-duration: 250ms;
        }

        .z-hovr:hover {
            opacity: .9;
            -webkit-transform: scale(1.02, 1.02);
            -webkit-transition-timing-function: ease-out;
            -webkit-transition-duration: 250ms;
            -moz-transform: scale(1.02, 1.02);
            -moz-transition-timing-function: ease-out;
            -moz-transition-duration: 250ms;
            position: relative;
            z-index: 99;
        }

        .isotope,
        .isotope .isotope-item {
            -webkit-transition-duration: 0.8s;
            -moz-transition-duration: 0.8s;
            transition-duration: 0.8s;
        }

        .overlay1 {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
            z-index: 2;
        }

        .overlay1:target {
            visibility: visible;
            opacity: 1;
        }

        .popup {
            margin: 70px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 80%;
            position: relative;
            transition: all 5s ease-in-out;
        }

        .popup h2 {
            margin-top: 0;
            color: #333;
            font-family: Tahoma, Arial, sans-serif;
        }

        .popup .close {
            position: absolute;
            top: 8px;
            right: 17px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
            z-index: 3;
        }

        .popup .close:hover {
            color: rgba(241, 93, 42);
        }

        .popup .content {
            overflow: hidden;
            height: auto;
        }

        .popup h2,
        .popup h3 {
            border-bottom: 1px solid #efefef;
        }

        .popup h2 {
            padding-bottom: 5px;
        }

        .client-desc {
            border-left: 1px solid #efefef;
        }

        .popup-list li {
            list-style-type: none;
        }

        .popup-list a {
            text-decoration: none;
            color: #333;
        }

        .popup-list a:hover {
            color: #F15D2A;
        }

        .pop-btn {
            border-radius: 5px;
            padding: 5px 25px;
            text-decoration: none;
            margin: 20px;
            color: #fff;
            position: relative;
            display: block;
            width: -moz-max-content;
            width: max-content;
            transition: all 0.5s ease 0s;
        }

        .pop-btn:active {
            transform: translate(0px, 5px);
            -webkit-transform: translate(0px, 5px);
            box-shadow: 0px 1px 0px 0px;
        }

        .orng {
            border: 1px solid rgb(230, 126, 34);
            color: rgb(230, 126, 34);
        }

        .orng:hover {
            background-color: #E78E57;
        }

        .popup-btns a:hover {
            color: #fff;
            text-decoration: none;
        }

        .blu {
            border: 1px solid #55acee;
            color: #55acee;
        }

        .blu:hover {
            background-color: #6FC6FF;
        }

        .client-desc blockquote {
            background: #f8f8f8;
            display: block;
            border-left: 5px solid #e67e22;
        }

        blockquote::after {
            content: "”";
            right: 26px;
            bottom: -20px;
            position: absolute;
            font-size: 80px;
            line-height: 1;
            color: #999;
            font-style: normal;
        }

        @media screen and (max-width: 700px) {
            .box {
                width: 70%;
            }

            .popup {
                width: 70%;
            }
        }
    </style>



    <section id="product" class="pt-80">
        <div class="container">
            <div class="d-flex flex-column align-items-center t-center">
                <h1 class="gray8 fs-50 fs-40-sm lh-50 lh-45-sm medium font-secondary uppercase">OUR PRODUCTS
                </h1>
            </div>
            <br>
            <div class="portfolioFilter">
            <ul class='sort-nav'>

                <li>
                    <a href="#" data-filter="*" class="current">All Categories</a>
                </li>
                <? $arr=array();
                    $test=rtrim($product['product_category'],",");
                    $arr=explode(",",$test);
                ?>
                <? foreach($arr as $procat) {?>
                <li>
                    <a href="#" data-filter=".<? echo $procat ?>"><? echo $procat; ?></a>
                </li>
                <? } ?>
            </ul>
            </div>

            <div style='clear: both;'></div>

            <div class="portfolioContainer1">

                <div class="<? echo $product['product_cat1']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image1']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client">
                            <h2><? echo $product['product_name1']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name1']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>


                <div class="<? echo $product['product_cat2']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image2']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client">
                            <h2><? echo $product['product_name2']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name2']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>


                <div class="<? echo $product['product_cat3']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image3']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client">
                            <h2><? echo $product['product_name3']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name3']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="<? echo $product['product_cat4']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image4']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client design">
                            <h2><? echo $product['product_name4']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name4']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="<? echo $product['product_cat5']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image5']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client">
                            <h2><? echo $product['product_name5']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name5']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="<? echo $product['product_cat6']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image6']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client">
                            <h2><? echo $product['product_name6']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name6']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="<? echo $product['product_cat7']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image7']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client">
                            <h2><? echo $product['product_name7']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name7']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="<? echo $product['product_cat8']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image8']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client">
                            <h2><? echo $product['product_name8']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name8']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="<? echo $product['product_cat9']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image9']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client">
                            <h2><? echo $product['product_name9']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name9']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="<? echo $product['product_cat10']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image10']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client">
                            <h2><? echo $product['product_name10']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name10']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="<? echo $product['product_cat11']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image11']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client">
                            <h2><? echo $product['product_name11']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name11']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="<? echo $product['product_cat12']; ?>">
                    <div class='z-hovr'>
                        <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image12']; ?>" alt="image" style="width:360px;height:360px;">
                        <div class="z2-client">
                            <h2><? echo $product['product_name12']; ?></h2>
                            <a class="showoverlay see_btn" href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']."*"; echo $product['product_name12']."*"; ?>">Inquiry Now  <i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>  
                    </div>
                </div>
            </div>
                        
        </div>
        
        <div class="container-fluid mt-50 ">
            <div id="portfolio" 
                class="row block-img unselectable row-cols-xl-4 row-cols-lg-4 row-cols-md-4 row-cols-sm-4 row-cols-xs-1 ">

            <!-- <div class="gallery1"> -->
            
                

                <!-- <div class="col work-item pb-25 nnew" data-groups="design branding" title="" data-name="<? echo $product['product_cat2']; ?>">
                    <div data-project="project-01.html" class="ajax-link has-overlay-hover d-flex c-pointer"><img
                            src="<? echo base_url().'assets/user_assets/product/'.$product['product_image2']; ?>" data-src="<? echo base_url().'assets/user_assets/product/'.$product['product_image2']; ?>"
                            alt="Portfolio picture template" class="slow">
                        <div class="overlay-hover bg-soft-6 bg-soft-dark8 slow-lg"><a href="<? echo base_url().'assets/user_assets/product/'.$product['product_image2']; ?>" title="" data-fslightbox="portfolio"><i class="bi-plus-lg white fs-26"></i></a>
                        </div>
                    </div>
                    <div class="details bg-white b-1 bt-0 b-gray3">
                        <div class="row row-eq-height justify-content-between mx-0">
                            <div class="col-9 px-20 py-20 lh-normal">
                                <h2 class=" mt-3 dark4 lh-normal" title="How long can rocks withstand waves?"><? echo $product['product_name2']; ?></h2>
                                
                            </div><a target="_blank"
                                    href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['product_message']."*"; echo $product['product_name2']."*"; ?>"   class="col-3 mxw-80 bl-1 b-gray3 d-flex align-items-center justify-content-center t-center bg-gray-hover"><i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col work-item pb-25 nnew" data-groups="design branding" title="" data-name="<? echo $product['product_cat3']; ?>">
                    <div data-project="project-01.html" class="ajax-link has-overlay-hover d-flex c-pointer"><img
                            src="<? echo base_url().'assets/user_assets/product/'.$product['product_image1']; ?>" data-src="<? echo base_url().'assets/user_assets/product/'.$product['product_image3']; ?>"
                            alt="Portfolio picture template" class="slow">
                        <div class="overlay-hover bg-soft-6 bg-soft-dark8 slow-lg"><a href="<? echo base_url().'assets/user_assets/product/'.$product['product_image3']; ?>" title="" data-fslightbox="portfolio"><i class="bi-plus-lg white fs-26"></i></a>
                        </div>
                    </div>
                    <div class="details bg-white b-1 bt-0 b-gray3">
                        <div class="row row-eq-height justify-content-between mx-0">
                            <div class="col-9 px-20 py-20 lh-normal">
                                <h2 class=" mt-3 dark4 lh-normal" title="How long can rocks withstand waves?"><? echo $product['product_name3']; ?></h2>
                                
                            </div><a target="_blank"
                                    href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['product_message']."*"; echo $product['product_name3']."*"; ?>"   class="col-3 mxw-80 bl-1 b-gray3 d-flex align-items-center justify-content-center t-center bg-gray-hover"><i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col work-item pb-25 nnew" data-groups="design branding" title="" data-name="<? echo $product['product_cat4']; ?>">
                    <div data-project="project-01.html" class="ajax-link has-overlay-hover d-flex c-pointer"><img
                            src="<? echo base_url().'assets/user_assets/product/'.$product['product_image4']; ?>" data-src="<? echo base_url().'assets/user_assets/product/'.$product['product_image4']; ?>"
                            alt="Portfolio picture template" class="slow">
                        <div class="overlay-hover bg-soft-6 bg-soft-dark8 slow-lg"><a href="<? echo base_url().'assets/user_assets/product/'.$product['product_image4']; ?>" title="" data-fslightbox="portfolio"><i class="bi-plus-lg white fs-26"></i></a>
                        </div>
                    </div>
                    <div class="details bg-white b-1 bt-0 b-gray3">
                        <div class="row row-eq-height justify-content-between mx-0">
                            <div class="col-9 px-20 py-20 lh-normal">
                                <h2 class=" mt-3 dark4 lh-normal" title="How long can rocks withstand waves?"><? echo $product['product_name4']; ?></h2>
                                
                            </div><a target="_blank"
                                    href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['product_message']."*"; echo $product['product_name4']."*"; ?>"   class="col-3 mxw-80 bl-1 b-gray3 d-flex align-items-center justify-content-center t-center bg-gray-hover"><i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col work-item pb-25 nnew" data-groups="design branding" title="" data-name="<? echo $product['product_cat5']; ?>">
                    <div data-project="project-01.html" class="ajax-link has-overlay-hover d-flex c-pointer"><img
                            src="<? echo base_url().'assets/user_assets/product/'.$product['product_image5']; ?>" data-src="<? echo base_url().'assets/user_assets/product/'.$product['product_image5']; ?>"
                            alt="Portfolio picture template" class="slow">
                        <div class="overlay-hover bg-soft-6 bg-soft-dark8 slow-lg"><a href="<? echo base_url().'assets/user_assets/product/'.$product['product_image5']; ?>" title="" data-fslightbox="portfolio"><i class="bi-plus-lg white fs-26"></i></a>
                        </div>
                    </div>
                    <div class="details bg-white b-1 bt-0 b-gray3">
                        <div class="row row-eq-height justify-content-between mx-0">
                            <div class="col-9 px-20 py-20 lh-normal">
                                <h2 class=" mt-3 dark4 lh-normal" title="How long can rocks withstand waves?"><? echo $product['product_name5']; ?></h2>
                                
                            </div><a target="_blank"
                                    href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['product_message']."*"; echo $product['product_name5']."*"; ?>"   class="col-3 mxw-80 bl-1 b-gray3 d-flex align-items-center justify-content-center t-center bg-gray-hover"><i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col work-item pb-25 nnew" data-groups="design branding" title="" data-name="<? echo $product['product_cat6']; ?>">
                    <div data-project="project-01.html" class="ajax-link has-overlay-hover d-flex c-pointer"><img
                            src="<? echo base_url().'assets/user_assets/product/'.$product['product_image6']; ?>" data-src="<? echo base_url().'assets/user_assets/product/'.$product['product_image6']; ?>"
                            alt="Portfolio picture template" class="slow">
                        <div class="overlay-hover bg-soft-6 bg-soft-dark8 slow-lg"><a href="<? echo base_url().'assets/user_assets/product/'.$product['product_image6']; ?>" title="" data-fslightbox="portfolio"><i class="bi-plus-lg white fs-26"></i></a>
                        </div>
                    </div>
                    <div class="details bg-white b-1 bt-0 b-gray3">
                        <div class="row row-eq-height justify-content-between mx-0">
                            <div class="col-9 px-20 py-20 lh-normal">
                                <h2 class=" mt-3 dark4 lh-normal" title="How long can rocks withstand waves?"><? echo $product['product_name6']; ?></h2>
                                
                            </div><a target="_blank"
                                    href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['product_message']."*"; echo $product['product_name6']."*"; ?>"   class="col-3 mxw-80 bl-1 b-gray3 d-flex align-items-center justify-content-center t-center bg-gray-hover"><i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->

                <!-- <div class="col work-item pb-25" data-groups="design branding" title="">
                    <div data-project="project-01.html" class="ajax-link has-overlay-hover d-flex c-pointer"><img
                            src="<? echo base_url().'assets/template2/images/products/img2.jpg'; ?>" data-src="<? echo base_url().'assets/template2/images/products/img2.jpg'; ?>" alt="Portfolio picture template"
                            class="slow">
                        <div class="overlay-hover bg-soft-6 bg-soft-dark8 slow-lg"><a href="<? echo base_url().'assets/template2/images/products/img2.jpg'; ?>" title=""
                                data-fslightbox="portfolio"><i class="bi-plus-lg white fs-26"></i></a>
                        </div>
                    </div>
                    <div class="details bg-white b-1 bt-0 b-gray3">
                        <div class="row row-eq-height justify-content-between mx-0">
                            <div class="col-9 px-20 py-20 lh-normal">
                                <h2 class=" mt-3 dark4 lh-normal" title="How long can rocks withstand waves?">Sofa Chairs</h2>
                
                            </div><a target="_blank"
                                href="https://wa.me/919687810000?text=Hi%2C%20I%20want%20to%20buy%20%2ASofa%20Chairs%2A.%0Ahttps%3A%2F%2Fdizitalcard.in/topaz-furniture/%23product344706%0A"
                                class="col-3 mxw-80 bl-1 b-gray3 d-flex align-items-center justify-content-center t-center bg-gray-hover"><i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col work-item pb-25" data-groups="design branding" title="">
                    <div data-project="project-01.html" class="ajax-link has-overlay-hover d-flex c-pointer"><img
                            src="<? echo base_url().'assets/template2/images/products/img3.jpg'; ?>" data-src="<? echo base_url().'assets/template2/images/products/img3.jpg'; ?>" alt="Portfolio picture template"
                            class="slow">
                        <div class="overlay-hover bg-soft-6 bg-soft-dark8 slow-lg"><a href="<? echo base_url().'assets/template2/images/products/img3.jpg'; ?>" title=""
                                data-fslightbox="portfolio"><i class="bi-plus-lg white fs-26"></i></a>
                        </div>
                    </div>
                    <div class="details bg-white b-1 bt-0 b-gray3">
                        <div class="row row-eq-height justify-content-between mx-0">
                            <div class="col-9 px-20 py-20 lh-normal">
                                <h2 class=" mt-3 dark4 lh-normal" title="How long can rocks withstand waves?">Table</h2>
                
                            </div><a target="_blank"
                                href="https://wa.me/919687810000?text=Hi%2C%20I%20want%20to%20buy%20%2ATable%2A.%0Ahttps%3A%2F%2Fdizitalcard.in/topaz-furniture/%23product344701%0A"
                                class="col-3 mxw-80 bl-1 b-gray3 d-flex align-items-center justify-content-center t-center bg-gray-hover"><i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col work-item pb-25" data-groups="design branding" title="">
                    <div data-project="project-01.html" class="ajax-link has-overlay-hover d-flex c-pointer"><img
                            src="<? echo base_url().'assets/template2/images/products/img4.jpg'; ?>" data-src="<? echo base_url().'assets/template2/images/products/img4.jpg'; ?>" alt="Portfolio picture template"
                            class="slow">
                        <div class="overlay-hover bg-soft-6 bg-soft-dark8 slow-lg"><a href="<? echo base_url().'assets/template2/images/products/img4.jpg'; ?>" title=""
                                data-fslightbox="portfolio"><i class="bi-plus-lg white fs-26"></i></a>
                        </div>
                    </div>
                    <div class="details bg-white b-1 bt-0 b-gray3">
                        <div class="row row-eq-height justify-content-between mx-0">
                            <div class="col-9 px-20 py-20 lh-normal">
                                <h2 class=" mt-3 dark4 lh-normal" title="How long can rocks withstand waves?">Sofa Chairs</h2>
                
                            </div><a target="_blank"
                                href="https://wa.me/919687810000?text=Hi%2C%20I%20want%20to%20buy%20%2ASofa%20Chairs%2A.%0Ahttps%3A%2F%2Fdizitalcard.in/topaz-furniture/%23product344706%0A"
                                class="col-3 mxw-80 bl-1 b-gray3 d-flex align-items-center justify-content-center t-center bg-gray-hover"><i
                                    class="fa fa-whatsapp fs-25"></i></a>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>


    <section id="gallery" class="py-10" style="background-color:#fafafa">
        <div class="container">
            <div class="d-flex flex-column align-items-center t-center">
                <h1 class="gray8 fs-50 fs-40-sm lh-50 lh-45-sm medium font-secondary uppercase">Our Gallery</h1>
               
            </div>
        </div>
        <div class="container mt-30">
            <div class="row">
                <? if($gallery['gallery_image1']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image1']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image1']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image1']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image2']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image2']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image2']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image2']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image3']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image3']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image3']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image3']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image4']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image4']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image4']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image4']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image5']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image5']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image5']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image5']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image6']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image6']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image6']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image6']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image7']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image7']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image7']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image7']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image8']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image8']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image8']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image8']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image9']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image9']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image9']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image9']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image10']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image10']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image10']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image10']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image11']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image11']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image11']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image11']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image12']!="") { ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image12']; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image12']; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image12']; ?>" ></a>
                        
                    </div>
                </div>
                <? } ?>
                <!-- <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/template2/images/gallery/img2.jpg'; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/template2/images/gallery/img2.jpg'; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/template2/images/gallery/img2.jpg'; ?>" alt="example employee photo"></a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/template2/images/gallery/img3.jpg'; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/template2/images/gallery/img3.jpg'; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/template2/images/gallery/img3.jpg'; ?>" alt="example employee photo"></a>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/template2/images/gallery/img4.jpg'; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/template2/images/gallery/img4.jpg'; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/template2/images/gallery/img4.jpg'; ?>" alt="example employee photo"></a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/template2/images/gallery/img5.jpg'; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/template2/images/gallery/img5.jpg'; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/template2/images/gallery/img5.jpg'; ?>" alt="example employee photo"></a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="has-overlay animated-container block-img"><a href="<? echo base_url().'assets/template2/images/gallery/img6.jpg'; ?>" data-fancybox="group1" ><img src="<? echo base_url().'assets/template2/images/gallery/img6.jpg'; ?>"
                        style="height:300px;"    data-src="<? echo base_url().'assets/template2/images/gallery/img6.jpg'; ?>" alt="example employee photo"></a>
                        
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>

    <section class="py-50">
        <div class="container">
            <div class="d-flex flex-column align-items-center t-center">
                <h1 class="gray8 fs-50 fs-40-sm lh-50 lh-45-sm medium font-secondary uppercase">Videos</h1>
    
            </div>
        </div>
        <div class="container mt-30">
            <div class="row">
            <? if($detail['video_link1']!="") { 
                $url=$detail['video_link1'];    
                $substr="=";
                if(strpos($url,$substr)!=false)
                {
                    $url_arr=explode("=",$url);
                    $video_id=$url_arr[1];
                }    
                else
                {
                    $url_arr=explode("/",$url);
                    $video_id=$url_arr[3];
                }
                $embed_url1="https://www.youtube.com/embed/".$video_id;
            } ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <iframe width="100%" height="300" src="<? echo $embed_url1; ?>" title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

                <? if($detail['video_link2']!="") { 
                $url=$detail['video_link2'];    
                $substr="=";
                if(strpos($url,$substr)!=false)
                {
                    $url_arr=explode("=",$url);
                    $video_id=$url_arr[1];
                }    
                else
                {
                    $url_arr=explode("/",$url);
                    $video_id=$url_arr[3];
                }
                $embed_url2="https://www.youtube.com/embed/".$video_id;
            } ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <iframe width="100%" height="300" src="<? echo $embed_url2; ?>" title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

                <? if($detail['video_link3']!="") { 
                $url=$detail['video_link3'];    
                $substr="=";
                if(strpos($url,$substr)!=false)
                {
                    $url_arr=explode("=",$url);
                    $video_id=$url_arr[1];
                }    
                else
                {
                    $url_arr=explode("/",$url);
                    $video_id=$url_arr[3];
                }
                $embed_url3="https://www.youtube.com/embed/".$video_id;
            } ?>
                <div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <iframe width="100%" height="300" src="<? echo $embed_url3; ?>" title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                
    
            </div>
        </div>
    </section>

    <section id="feedback">
        <div id="testimonials-51235612" class="pt-100 pb-100 has-parallax">
            <div class="container t-center">
                <div class="row">
                    <h2 style="color:#fff; padding-bottom:20px;"> FEEDBACK</h2>
                </div>
            </div>
            <div class="parallax" data-bg="<? echo base_url().'assets/template2/images/i2.jpg'; ?>" data-target="#testimonials-51235612"
                data-bottom-top="transform:translate3d(0px,-200px,0px);"
                data-top-bottom="transform:translate3d(0px,200px,0px);"></div>
            <div class="container t-center">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-12">
                        <div class="text-slider o-hidden fullwidth">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-swiper-autoplay="2000">
                                    <div
                                        class="d-flex fullwidth fullheight flex-column align-items-center justify-content-center t-center">
                                        <q class="white  bold fs-25 fs-22-sm lh-40 lh-30-sm"><? echo $testimonial['testimonial_description1'] ?></q>
                                     
                                    <a href=""><img style="border-radius:50%" src="<? echo base_url().'assets/user_assets/testimonial/'.$testimonial['testimonial_image1']; ?>" alt=""></a>
                      
                                        <abbr class="uppercase mt-30" style="color: #fff;"><? echo $testimonial['testimonial_name1']; ?></abbr>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-autoplay="2000">
                                    <div
                                        class="d-flex fullwidth fullheight flex-column align-items-center justify-content-center t-center">
                                        <q class="white  bold fs-25 fs-22-sm lh-40 lh-30-sm"><? echo $testimonial['testimonial_description2'] ?></q>
                                        <div class="author-img">
                                    <a href=""><img style="border-radius:50%" src="<? echo base_url().'assets/user_assets/testimonial/'.$testimonial['testimonial_image2']; ?>" alt=""></a>
                                </div>
                                        <abbr class="uppercase mt-30" style="color: #fff;"><? echo $testimonial['testimonial_name2']; ?></abbr>
                                    </div>
                                </div>
                                <!-- <div class="swiper-slide" data-swiper-autoplay="2000">
                                    <div
                                        class="d-flex fullwidth fullheight flex-column align-items-center justify-content-center t-center">
                                        <q class="white  bold fs-25 fs-22-sm lh-40 lh-30-sm">Amazing Collection. Loved the
                                            customer service. Got 8 Seater Dinning Table for my
                                            house. Perfect finishing 👌😍</q>
                                        <abbr class="uppercase mt-30" style="color: #fff;">Ria Bajaj</abbr>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="mt-30 mt-30-sm mb-20 d-flex justify-content-center">
                            <div class="text-slider-prev white bg-blur slow icon-md bg-soft-1 zoom-out-focus bg-soft-white circle bg-colored-hover mr-10"
                                tabindex="0" role="button" aria-label="Previous slide"
                                aria-controls="swiper-wrapper-284101c8261f8f8a"><i class="bi-chevron-left fs-17"></i></div>
                            <div class="text-slider-next white bg-blur slow icon-md bg-soft-1 zoom-out-focus bg-soft-white circle bg-colored-hover"
                                tabindex="0" role="button" aria-label="Next slide"
                                aria-controls="swiper-wrapper-284101c8261f8f8a"><i class="bi-chevron-right fs-17"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        @media only screen and (max-width: 765px) {
            .our-work-area .single-work {
                float: none !important;
            }
    
            .our-work-area .single-work .single-work123 img {
                height: 430px !important;
            }
        }
    </style>

    <section id="qr" class="py-50">
        <style>
            .float-qr .col-12{
                text-align: center;
            }
        </style>
        <div class="container mt-30">
            <div class="row float-qr">
                <div class="col-lg-6 col-sm-6 col-12 has-overlay-hover" style="text-align: center;">
                    <img src="<? echo base_url().'assets/user_assets/qrcode/'.$detail['qrimage']; ?>" style="height:200px" alt="footer logo template">
                </div>
    
                <div class="col-lg-6 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <div class="modern-nav" style="width: 100%; text-align: center;">
                        <a download="<? echo $detail['company_name']; ?>"
                            href="<? echo base_url().'assets/user_assets/qrcode/'.$detail['qrimage']; ?>"
                            class="nav-button bg-colored bg-colored1-hover white fs-11 uppercase extrabold py-15">Download QR</a>
                    
                    </div>
                </div>
    
                <!--<div class="col-lg-4 col-sm-6 col-12 mt-30 has-overlay-hover">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/UAk30oa-hC0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>-->
    
    
            </div>
        </div>
    </section>


        <!--<div id="socials" class="pt-30">
            <div class="container d-flex justify-content-center align-items-center flex-column">
                <div class="d-flex justify-content-center"><a href="https://twitter.com/gldeyes" target="_blank" class="mx-10 icon-md fs-20 gray8 white-hover bg-twitter-hover"><i class="bi-twitter"></i></a><a href="https://facebook.com/gldeyes" target="_blank" class="mx-10 icon-md fs-20 gray8 white-hover bg-facebook-hover"><i class="bi-facebook"></i></a>
                    <a
                        href="https://instagram.com/goldeyestheme" target="_blank" class="mx-10 icon-md fs-20 gray8 white-hover bg-instagram-hover"><i class="bi-instagram"></i></a><a href="https://www.linkedin.com/company/gold-eyes-studio" target="_blank" class="mx-10 icon-md fs-20 gray8 white-hover bg-linkedin-hover"><i class="bi-linkedin"></i></a></div>
                <div class="mt-20 width-40 height-1 bg-gray5"></div>
                <p class="mt-20 uppercase bold ls--04 fs-14"><a href="tel:0123456789" class="underline-hover">01234 56 78 90</a> & <a href="mailto:goldeyestheme@gmail.com" class="underline-hover">goldeyestheme@gmail.com</a><br><address>1234 Street Name, City Name</address></p><a href="#top" class="icon-md mt-20 bg-dark5 gray3 white-hover"><i class="bi-chevron-double-up"></i></a></div>
        </div>-->
        <footer id="footer" class="bg-dark5" style="background-color:<? echo $detail['footer_color']; ?> !important">
            <div class="container py-90">
                <div class="row row-eq-height align-items-center">
                    <div class="col-lg col-12 mt-30-sm">
                        <div class="t-center">
                            <p class="mt-15 gray4 uppercase fs-14 medium">©2023 All Rights Reserved.<br>Designed by <a href="https://www.icedinfotech.com/" target="_blank" class="colored underline-hover">ICED Infotech</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        
        <style>
            .modal-open {
                overflow: hidden
            }
        
            .modal-open .modal {
                overflow-x: hidden;
                overflow-y: auto
            }
        
            .modal {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 1050;
                display: none;
                width: 100%;
                height: 100%;
                overflow: hidden;
                outline: 0
            }
        
            .modal-dialog {
                position: relative;
                width: auto;
                margin: .5rem;
                pointer-events: none
            }
        
            .modal.fade .modal-dialog {
                transition: -webkit-transform .3s ease-out;
                transition: transform .3s ease-out;
                transition: transform .3s ease-out, -webkit-transform .3s ease-out;
                -webkit-transform: translate(0, -50px);
                transform: translate(0, -50px)
            }
        
            @media (prefers-reduced-motion:reduce) {
                .modal.fade .modal-dialog {
                    transition: none
                }
            }
        
            .modal.show .modal-dialog {
                -webkit-transform: none;
                transform: none
            }
        
            .modal-dialog-scrollable {
                display: -ms-flexbox;
                display: flex;
                max-height: calc(100% - 1rem)
            }
        
            .modal-dialog-scrollable .modal-content {
                max-height: calc(100vh - 1rem);
                overflow: hidden
            }
        
            .modal-dialog-scrollable .modal-footer,
            .modal-dialog-scrollable .modal-header {
                -ms-flex-negative: 0;
                flex-shrink: 0
            }
        
            .modal-dialog-scrollable .modal-body {
                overflow-y: auto
            }
        
            .modal-dialog-centered {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                min-height: calc(100% - 1rem)
            }
        
            .modal-dialog-centered::before {
                display: block;
                height: calc(100vh - 1rem);
                content: ""
            }
        
            .modal-dialog-centered.modal-dialog-scrollable {
                -ms-flex-direction: column;
                flex-direction: column;
                -ms-flex-pack: center;
                justify-content: center;
                height: 100%
            }
        
            .modal-dialog-centered.modal-dialog-scrollable .modal-content {
                max-height: none
            }
        
            .modal-dialog-centered.modal-dialog-scrollable::before {
                content: none
            }
        
            .modal-content {
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                width: 100%;
                pointer-events: auto;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, .2);
                border-radius: .3rem;
                outline: 0
            }
        
            .modal-backdrop {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 1040;
                width: 100vw;
                height: 100vh;
                background-color: #000
            }
        
            .modal-backdrop.fade {
                opacity: 0
            }
        
            .modal-backdrop.show {
                opacity: .5
            }
        
            .modal-header {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: start;
                align-items: flex-start;
                -ms-flex-pack: justify;
                justify-content: space-between;
                padding: 1rem 1rem;
                border-bottom: 1px solid #dee2e6;
                border-top-left-radius: .3rem;
                border-top-right-radius: .3rem
            }
        
            .modal-header .close {
                padding: 1rem 1rem;
                margin: -1rem -1rem -1rem auto
            }
        
            .modal-title {
                margin-bottom: 0;
                line-height: 1.5
            }
        
            .modal-body {
                position: relative;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                padding: 1rem
            }
        
            .modal-footer {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: end;
                justify-content: flex-end;
                padding: 1rem;
                border-top: 1px solid #dee2e6;
                border-bottom-right-radius: .3rem;
                border-bottom-left-radius: .3rem
            }
        
            .modal-footer>:not(:first-child) {
                margin-left: .25rem
            }
        
            .modal-footer>:not(:last-child) {
                margin-right: .25rem
            }
        
            .modal-scrollbar-measure {
                position: absolute;
                top: -9999px;
                width: 50px;
                height: 50px;
                overflow: scroll
            }
            
            @media (max-width:576px) {
                .modal-body img{
                    height:310px !important;
                }
                }
        
            @media (min-width:576px) {
                .modal-dialog {
                    max-width: 500px;
                    margin: 1.75rem auto
                }
        
                .modal-dialog-scrollable {
                    max-height: calc(100% - 3.5rem)
                }
        
                .modal-dialog-scrollable .modal-content {
                    max-height: calc(100vh - 3.5rem)
                }
        
                .modal-dialog-centered {
                    min-height: calc(100% - 3.5rem)
                }
        
                .modal-dialog-centered::before {
                    height: calc(100vh - 3.5rem)
                }
        
                .modal-sm {
                    max-width: 300px
                }
            }
        
            @media (min-width:992px) {
        
                .modal-lg,
                .modal-xl {
                    max-width: 800px
                }
            }
        
            @media (min-width:1200px) {
                .modal-xl {
                    max-width: 1140px
                }
            }
        </style>
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-interval="1000" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color:#fff;">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="<? echo base_url().'assets/template2/images/logo/download.jpg'; ?>" style="height: 470px;" alt="">
        
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <a id="back-to-top" href="#top" class="btt hide-on-home circle width-60 width-50-sm height-60 height-50-sm bg-white b-1 b-gray2 gray7"><i class="bi-chevron-up fs-18"></i></a>
        <script src="<? echo base_url().'assets/template2/js/plugins.js?v=2.0' ?>"></script>
        <script src="<? echo base_url().'assets/template2/js/functions.js?v=1.0' ?>"></script>
    

        <script type="text/javascript">
            $(window).on('load', function () {
                $('#myModal').modal('show');
            });
        </script>
 <script>
  const filterItem = document.querySelector(".items1");
const filterImg = document.querySelectorAll(".nnew");

window.onload = ()=>{ //after window loaded
  filterItem.onclick = (selectedItem)=>{ //if user click on filterItem div
    if(selectedItem.target.classList.contains("item1")){ //if user selected item has .item class
      filterItem.querySelector(".active").classList.remove("active"); //remove the active class which is in first item
      selectedItem.target.classList.add("active"); //add that active class on user selected item
      let filterName = selectedItem.target.getAttribute("data-name"); //getting data-name value of user selected item and store in a filtername variable
      filterImg.forEach((image) => {
        let filterImges = image.getAttribute("data-name");
        // alert("Hello"); //getting image data-name value
        //if user selected item data-name value is equal to images data-name value
        //or user selected item data-name value is equal to "all"
        if((filterImges == filterName) || (filterName == "all")){
          image.classList.remove("hide"); //first remove the hide class from the image
          image.classList.add("show"); //add show class in image
        }else{
          image.classList.add("hide"); //add hide class in image
          image.classList.remove("show"); //remove show class from the image
        }
      });
    }
  }
  
}
    </script>

        
</body>

</html>