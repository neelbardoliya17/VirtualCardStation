<? if(date("Y-m-d")>=$detail['eight_date']) {
    if($detail['payment_status']==1)
    {
        if(date("Y-m-d")>=$detail['enddate'] && $detail['status']==0)
        {
            $this->CI->userPaymentActive($detail['user_id']);
        }
        else if(date("Y-m-d")>=$detail['enddate'])  
        {
            $this->CI->userInactive($detail['user_id']);
            $this->CI->paymentInactive($detail['user_id']);
            //user inactive
            //payment status inactive
        }
        else
        {
            $this->CI->userActive($detail['user_id']);
            //user active
        }
    }
    else
    {
        $this->CI->userInactive($detail['user_id']);
        //user ub active
    }
} ?>

<? if($detail['status']==1) { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><? echo $detail['company_name']; ?></title>
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>

    <!--Favicon-->
    <? if($detail['favicon_image']!="") { ?>
        <link rel="icon" href="<?php echo base_url('assets/user_assets/favicon/') . $detail['favicon_image']; ?>" />
    <? } ?>
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,800,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="<?php echo base_url().'assets/css/font-awesome.min.css'; ?>" rel="stylesheet">
    <!-- ET Line -->
    <link href="<?php echo base_url().'assets/css/et-line.css'; ?>" rel="stylesheet">
    <!-- VenoBox CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/venobox.css'; ?>">
    <!-- Owl CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.carousel.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/slick.css'; ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'assets/css/style.css'; ?>" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="<?php echo base_url().'assets/css/responsive.css'; ?>" rel="stylesheet">
    <style>
    .mainmenu-area ul.nav.navbar-nav > li a:after {
        background-color:<?php echo $detail['button_color']; ?>
    }
    .cl
    {
        color:<?php echo $detail['button_color']; ?>;
        padding:10px;
    
    }
    .mainmenu-area ul.nav.navbar-nav > li a
    {
        color:<?php echo $detail['header_text_color']; ?> !important;
    }
    #scrollTop
    {
        background-color:<?php echo $detail['button_color']; ?>;
    }
    #colornew
    {
        color:<?php echo $detail['button_color']; ?>;
    }
    #colorbtn
    {
        background-color:<?php echo $detail['button_color']; ?>;
    }
    #colorbtn1
    {
        color:<?php echo $detail['button_color']; ?>;
    }
    .mainmenu-area {
    background-color:<?php echo $detail['header_color']; ?>;
    }
    .footer-area {
    background-color:<?php echo $detail['footer_color']; ?>;
    }
    .cc
    {
        background-color:<?php echo $detail['button_color']; ?>;
    }
        .wrapper1 {
    /* margin: 100px auto; */
    max-width: 100%;
    }
    .wrapper1 nav {
    display: flex;
    justify-content: center;
    }
    .wrapper1 .items1 {
    display: inline-block;
    max-width: auto;
    /* max-width:720px; */
    width: 100%;
    justify-content: space-between;
    }
    .items1 span {
    padding: 7px 25px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    color:<?php echo $detail['button_color']; ?>;
    border-radius: 50px;
    border: 2px solid <?php echo $detail['button_color']; ?>;
    transition: all 0.3s ease;
    display:inline-block;
    margin-bottom:25px;
    }
    .items1 span.active,
    .items1 span:hover {
    color: #fff;
    background: <?php echo $detail['button_color']; ?>;
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
        .gallery1 .image1.hide {
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
        }
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
    </style>
   
    

    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>





<body class="home-slider">
    <!-- preloader -->
    <div id="preloader"></div>
    <!-- /.end preloader -->
    <div class="wrapper" id="welcome">
        <header class="header-area" style="height: 70px;">
            <!--<section class="top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="quick-contact">
                                    <p>Email us: <a href="mailto:topazfurniture@gmail.com">topazfurniture@gmail.com</a></p>
                                    <p>Call us: <a href="tel:+919687810000">+919687810000</a></p>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="social-links">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

            <nav id="mainmenu" class="mainmenu-area">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" id="colorbtn" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navMenu" aria-expanded="false" style="margin-right: 50px;">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> <!-- mobile menu button, shows only in mobile -->
                        <a class="navbar-brand" style="padding:8px;" href="#"><?php if($detail['logo_image']!="") { ?><img style="height:53px;width:140px;"
                                src="<? echo base_url().'assets/user_assets/logo/'.$detail['logo_image']; ?>" alt=""><? } else { ?>
                                    <img style="height:53px;"
                                src="<?php echo base_url().'assets/user_assets/logo/test.png'; ?>" alt="">
                               <? } ?></a> <!-- main logo here -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navMenu">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#welcome">Welcome</a></li>
                            <li><a href="#services">Profile </a></li>
                            <li><a href="#contact">contact us </a></li>
                            <li><a href="#about">About us </a></li>
                            <? if($brands['service_display']==1) { ?>
                            <li><a href="#brands">Brands</a></li>
                            <? } ?>
                            <? if($product['as_service']==1) { ?>
                            <li><a href="#portfolio">Services </a></li>
                            <? } else { ?>
                             <li><a href="#portfolio">Products </a></li>
                            <? } ?>
                            <li><a href="#teams">Gallery </a></li>
                            <li><a href="#testimonial">Feedback </a></li>
                            <li><a href="#price">Rate Us </a></li>


                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav> <!-- /.end nambar area -->
        </header> <!-- /.end header-area -->


        <style>

             @media screen and (min-width: 350px) and (max-width: 767px) {
                .slider {
                    /*background: #000;*/
                    height: 220px !important;
                    
                }
                .slider .slides img{
                    height:200px;
                }
                #services{
                    padding-top:10px !important;
                }
                
                .font-heading .h1{
                    font-size:30px !important;
                }
                .font-heading .h3{
                    font-size:20px !important;
                }
                .single-service{
                    padding:12px 30px 0 !important;
                }
                
            }

            @media screen and (min-width: 767px) and (max-width: 1920px) {
                .slider {
                    /*background: #000;*/
                    height: 650px !important;
                    width:100%;
                }
                .slider .slides img{
                    height:650px;
                }
                
            }
        
            .project-title {
            color: #000;
            font-size: 50px;
                margin: 40px 0;
            text-align: center;
            text-transform: uppercase;
            }
            .slider {
            /*background: #000;*/
            height: 400px;
            position: relative;
            text-align: center;
            width: 100%;
            }
            .arrow {
            background: black;
            border: none;
            border-radius: 10%;
            color: white;
            cursor: pointer;
            display: none;
            opacity: .4;
            padding: 10px;
            position: absolute;
            text-transform: uppercase;
            -webkit-transition: .2s;
                top: 50%;
            transition: .2s;
            }
            .arrow:hover {
            opacity: .8;
            }
            .arrow.next {
            right: 2%
            }
            .arrow.prev {
            left: 2%;
            }
            .slides {
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
            height: 100%;
           
            position: absolute;
            width: 100%;
            }
            .slide-title {
            font-size: 40px;
            font-weight: bold;
            margin: 0 auto;
            padding: 15px 0;
            text-transform: uppercase;
            }
            .slide-desc {
            font-size: 20px;
            margin: 40px auto 0;
            width: 65%;
            }
            .slide-image,
            .slide-image img{
            height: 100%;
            width: 100%;
            }

            

            .active {
            display: block;
            }
            .slide-nav {
            bottom: 30px;
                position: absolute;
            width: 100%;
            }
            .nav-item {
            background: #fff;
            border: 2px solid #000;
            cursor: pointer;
            display: inline-block;
            margin-right: 20px;
            transition: background .4s;
            }
            .nav-item:last-of-type {
            margin-right: 0;
            }
            .nav-item:hover {
            transform: scale(1.3);
            }
            .item-active {
            background: #000;
            transform: scale(1.3);
            }
            .dot {
            border-radius: 50%;
            }
            .dot,
            .square{
            height: 15px;
                width: 15px;
            }
            .rectangle {
            height: 15px;
            width: 30px;
            }
        </style>

        <!--Slider-->
    <div class="slider">
        
        <!-- <div class="slides">
            <img
                src="assets/img/slider/slider1-1.jpg">
            
        </div> -->
        <? if($detail['slider_image1']!=""){ ?>
        <div class="slides">
            <h2 class="slide-title" style="display:none">Lorem ipsum</h2>
            <p class="slide-desc" style="display:none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                suscipit a,
                scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla
                ac diam.</p>
            <img width="1920" src="<?php echo base_url().'assets/user_assets/slider/'.$detail['slider_image1']; ?>">
        
        </div>
        <? } else { ?>
        <div class="slides">
            <h2 class="slide-title" style="display:none">Lorem ipsum</h2>
            <p class="slide-desc" style="display:none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                suscipit a,
                scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla
                ac diam.</p>
            <img width="1920" src="<?php echo base_url().'assets/user_assets/slider/test.png'; ?>">
        
        </div>
        <? } ?>

        <? if($detail['slider_image2']!=""){ ?>
        <div class="slides">
            <h2 class="slide-title" style="display:none">Lorem ipsum</h2>
            <p class="slide-desc" style="display:none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                suscipit a,
                scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla
                ac diam.</p>
            <img width="1920" src="<?php echo base_url().'assets/user_assets/slider/'.$detail['slider_image2']; ?>">
        
        </div>
        <? } else { ?>
        <div class="slides">
            <h2 class="slide-title" style="display:none">Lorem ipsum</h2>
            <p class="slide-desc" style="display:none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                suscipit a,
                scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla
                ac diam.</p>
            <img width="1920" src="<?php echo base_url().'assets/user_assets/slider/test.png'; ?>">
        
        </div>
        <? } ?>
        
        
        <!-- <div class="slides">
            <h2 class="slide-title" style="display: none;">Lorem ipsum</h2>
            <p class="slide-desc" style="display:none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                suscipit a,
                scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla
                ac diam.</p>
            <img src="assets/img/slider/slider3-1.jpg">
        
        </div>
        <div class="slides">
            <h2 class="slide-title" style="display: none;">Lorem ipsum</h2>
            <p class="slide-desc" style="display:none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                suscipit a,
                scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla
                ac diam.</p>
            <img src="assets/img/slider/slider4-1.jpg">
        
        </div> -->
        

        
        
       
                <ul class="slide-nav"></ul>
    </div>


        <section id="services" class="font-heading our-services section-padding" style="padding-top: 30px; padding-bottom:30px;">
            <div class="container"> 
                <div class="row">
                    <div class="col-12" style="text-align: center; color:#000; font-weight:700;">
                        <h1 style="font-size:30px;"><?php echo $detail['company_name']; ?></h1>
                        <h3 style="font-size:20px;"><?php echo $detail['owner_name']; ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single-service"  style="margin-bottom:0px;">
                            <div class="icon">
                                <a class="cl" href="tel:<?php echo $detail['contact_no']; ?>"><i class="fa fa-phone"></i></a>
                                <!--<span class="icon-desktop"></span>-->
                            </div>
                            <h3><a href="tel:<?php echo $detail['contact_no']; ?>">Call</a></h3>

                        </div>
                    </div> <!-- /.end single-service column -->
                    <? $me=str_replace(['<p>', '</p>'], '', $detail['whatsapp_message']); ?>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single-service"  style="margin-bottom:0px;">
                            <div class="icon">
                                <a class="cl" target="_blank" href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<?php echo $me; ?>"><i
                                        class="fa fa-whatsapp"></i></a>
                            </div>
                            <h3><a target="_blank"href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<?php echo $me; ?>">Whatsapp</a></h3>

                        </div>
                    </div> <!-- /.end single-service column -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single-service"  style="margin-bottom:0px;">
                            <div class="icon">
                                <a class="cl" href="mailto:<?php echo $detail['email']; ?>"><i class="fa fa-envelope-o"></i></a>
                            </div>
                            <h3><a href="mailto:<?php echo $detail['email']; ?>">Email</a></h3>

                        </div>
                    </div> <!-- /.end single-service column -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single-service"  style="margin-bottom:0px;">
                            <div class="icon">
                                <a class="cl" target="_blank" href="<?php echo $detail['mapurl']; ?>"><i
                                        class="fa fa-map-marker"></i></a>
                            </div>
                            <h3><a href="<?php echo $detail['mapurl']; ?>">Location</a></h3>

                        </div>
                    </div> <!-- /.end single-service column -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single-service"  style="margin-bottom:0px;">
                            <div class="icon">
                                <a class="cl" target="_blank"
                                    href="<?php echo $detail['website'];  ?>"><i
                                        class="fa fa-globe"></i></a>
                            </div>
                            <h3><a
                                    href="<?php echo $detail['website'];  ?>">Website</a>
                            </h3>

                        </div>
                    </div> <!-- /.end single-service column -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single-service"  style="margin-bottom:0px;">
                            <div class="icon">
                                <a class="cl"  href="#portfolio"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            <h3><a href="#portfolio">Shop</a></h3>

                        </div>
                    </div> <!-- /.end single-service column -->

                </div>
            </div>
        </section> <!-- /.end our-services -->

        <section id="contact" class="section-padding get-in-touch-area"
            style="background-color: #fafafa; padding-top: 30px; padding-bottom:30px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title">
                            <h2>Get in touch</h2>
                        </div>
                    </div>
                </div> <!-- /.end section-title row -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="get-address">
                            <div class="s-address">
                                <span class="icon-envelope" id="colornew"></span>
                                <h4>Email <span><a
                                            href="mailto:<?php echo $detail['email']; ?>"><?php echo $detail['email']; ?></a></span>
                                </h4>
                            </div> <!-- /.end single address -->
                            <div class="s-address">
                                <span class="icon-mic" id="colornew"></span>
                                <h4>Phone <? if($detail['contact_no']!='') { ?><span>+91<a style="font-weight: bold;" href="tel:<?php echo $detail['contact_no']; ?>"><?php echo $detail['contact_no']; ?></a></span><?} ?>
        <? if($detail['alternate_contact1']!='') { ?><span>+91<a style="font-weight: bold;" href="tel:<?php echo $detail['alternate_contact1'] ?>"><?php echo $detail['alternate_contact1']; ?></a></span> <? } ?>
        <? if($detail['alternate_contact2']!='') { ?><span>+91<a style="font-weight: bold;" href="tel:<?php echo $detail['alternate_contact2']; ?>"><?php echo $detail['alternate_contact2']; ?></a></span> <? } ?>
        <? if($detail['alternate_contact3']!='') { ?><span>+91<a style="font-weight: bold;" href="tel:<?php echo $detail['alternate_contact3']; ?>"><?php echo $detail['alternate_contact3']; ?></a></span> <? } ?>
                                </h4>
                            </div> <!-- /.end single address -->
                            <div class="s-address">
                                <span class="icon-map-pin" id="colornew"></span>
                                <h4>Address <span><a target="_blank" href="<?php echo $detail['mapurl']; ?>"    >  <?php echo $detail['address']; ?></a></span></h4>
                            </div> <!-- /.end single address -->
                        </div> <!-- /.end address -->
                    </div>

                </div>
            </div>
        </section> <!-- /.end get-in-touch-area -->

        <section class="google-maps-area">
        <?php echo $detail['maptag']; ?>
            <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.5295718917196!2d72.8256373!3d21.171111699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f9b1310a85b%3A0x52bf6d272fff2bb1!2sTopaz%20Furniture%20%26%20Decorators!5e0!3m2!1sen!2sin!4v1667791329683!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        </section> <!-- /.end google-maps-area -->


        <section id="" class="section-padding our-work-area">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 18px;">
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
                                padding-right: 30px;
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

                                .input-group-append .btn{
                                    width: 100%;
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
                                <div class="input-group-prepend pr-5" style="margin-top:20px;">
                                    <div class="input-group-prepend-part1" style="text-align: center;">
                                        
                                        +91
                                    </div>
                                </div>
                                <input style="height: auto;" type="text" name="phone" id="myInput" class="form-control border-0 shadow-0 whatsapp-input-container pl-0" placeholder="1234567891" pattern="[0-9]{10}" required />
                                <!-- <input style="height: auto;" type="tel" size="12" min="10" max="10"
                                    placeholder="Phone Number" aria-describedby="whatsapp-share"
                                    class="form-control border-0 shadow-0 whatsapp-input-container pl-0"
                                    id="whatsapp-share-number" data-code="91" pattern="^([1-9]{1}[0-9]{3,11})$"> -->
                                <div class="input-group-append">
                                    <div class="input-group-append-part1">
                                        <button id="whatsappshare" type="button"  class="btn btn-medium btn-greenish"
                                            style="margin-top:0px;color:#fff;background-color:<?php echo $detail['button_color']; ?>">


                                            Share on Whatsapp <i class="fa fa-whatsapp"></i>

                                        </button>
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
                                            window.open("https://wa.me/91"+person+"?text=You%20Can%20see%20my%20digital%20card%20and%20share%20to%20other%20persons%20https://icedinfotech.com/digicard/<? echo $detail['slug']; ?>");
                                        } 
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <style>
                        @media only screen and (max-width: 767px) {
                            .purchase-text {
                                margin-bottom: 0px;
                            }

                            .purchase-text a {
                                width: 100%;
                            }
                        }
                    </style>

                    <!-- <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="purchase-text" style="margin-top: 0px; margin-bottom: 0px;">

                            <a id="colorbtn" class="btn btn-medium btn-greenish" href="">Save my Card <i class="fa fa-cloud-download"
                                    style="padding-right: 4px;"></i></a>
                        </div>  -->
                        <!-- /.end purchase-text -->
                    <!-- </div> -->
                     <!-- /.end single work column -->

                    <!-- <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="purchase-text" style="margin-top: 0px; margin-bottom: 0px;">

                            <a id="colorbtn"  class="btn btn-medium btn-greenish" href="">Follow<i class="fa fa-bell"
                                    style="padding-left: 4px;"></i></a>
                        </div>  -->
                        <!-- /.end purchase-text -->
                    <!-- </div>  -->
                    <!-- /.end single work column -->

                    <!-- <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="purchase-text" style="margin-top: 0px; margin-bottom: 0px;">

                            <a id="colorbtn"  class="btn btn-medium btn-greenish" id="web-share">Share <i class="fa fa-share-alt "
                                    style="padding-right: 4px;"></i></a>
                        </div>  -->
                        <!-- /.end purchase-text -->
                    <!-- </div>      -->
                    <!-- /.end single work column -->

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="purchase-text" style="margin-top: 0px; margin-bottom: 0px;">
                            
                            <a id="colorbtn"   href="<?php echo site_url().'vcard_front/vcard_generate/'.$detail['user_id']; ?>" class="btn btn-medium btn-greenish">Add to
                                Contact </a>
                        </div> <!-- /.end purchase-text -->
                    </div> <!-- /.end single work column -->

                    <div class="col-md-3 col-sm-3 col-xs-12">

                        <button id="colorbtn"  class="btn btn-medium btn-greenish dropdown-toggle" type="button" id="socialshare"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="color:#fff; width:100%;">
                            Social Share <i class="fa fa-arrow-circle-down" style="padding-left: 4px;"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="socialshare">
                            <ul class="list-inline">
                                <? if($detail['facebook']!=NULL) { ?>
                                <li class="list-inline-item m-1">
                                    <a target="_blank" id="colornew" href="<?php echo $detail['facebook']; ?>"
                                        class="text-decoration-none p-2" title="Facebook">
                                        <i class="fa fa-facebook fas fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <? } ?>
                                
                                 <? if($detail['instagram']!=NULL) { ?>
                                <li class="list-inline-item m-1">
                                    <a target="_blank" id="colornew" href="<?php echo $detail['instagram']; ?>"
                                        class="text-decoration-none p-2" title="Instagram">
                                        <i class="fa fa-instagram fas fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <? } ?>
                                
                                 <? if($detail['twitter']!=NULL) { ?>
                                <li class="list-inline-item m-1">
                                    <a target="_blank" id="colornew" href="<?php echo $detail['twitter']; ?>"
                                        class="text-decoration-none p-2" title="Twitter">
                                        <i class="fa fa-twitter fas fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <? } ?>
                                
                                 <? if($detail['linkedin']!=NULL) { ?>
                                <li class="list-inline-item m-1">
                                    <a target="_blank" id="colornew" href="<?php echo $detail['linkedin']; ?>"
                                        class="text-decoration-none p-2" title="Linkedin">
                                        <i class="fa fa-linkedin fas fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <? } ?>
                                
                                 <? if($detail['youtube']!=NULL) { ?>
                                <li class="list-inline-item m-1">
                                    <a target="_blank" id="colornew" href="<?php echo $detail['youtube']; ?>"
                                        class="text-decoration-none p-2" title="Linkedin">
                                        <i class="fa fa-youtube fas fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <? } ?>
                                <!-- <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://facebook.com/sharer/sharer.php?u=https%3A//dizitalcard.in/topaz-furniture/"
                                        class="text-decoration-none p-2" title="Facebook">
                                        <i class="fa fa-facebook fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://plus.google.com/share?url=https%3A//dizitalcard.in/topaz-furniture/"
                                        class="text-decoration-none p-2" title="Google+">
                                        <i class="fa fa-google-plus-g fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://news.ycombinator.com/submitlink?u=https%3A//dizitalcard.in/topaz-furniture/&t=TOPAZ%20FURNITURE"
                                        class="text-decoration-none p-2" title="Hacker News">
                                        <i class="fa fa-hacker-news fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//dizitalcard.in/topaz-furniture/&title=TOPAZ%20FURNITURE&summary=TOPAZ%20FURNITURE&source=https%3A//dizitalcard.in/topaz-furniture/"
                                        class="text-decoration-none p-2" title="LinkedIn">
                                        <i class="fa fa-linkedin fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://pinterest.com/pin/create/button/?url=https%3A//dizitalcard.in/topaz-furniture/&media=https:///logo.webp&summary=TOPAZ%20FURNITURE"
                                        class="text-decoration-none p-2" title="Pinterest">
                                        <i class="fa fa-pinterest fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://getpocket.com/save?url=https%3A//dizitalcard.in/topaz-furniture/&title=TOPAZ%20FURNITURE"
                                        class="text-decoration-none p-2" title="Pocket">
                                        <i class="fa fa-instagram fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://reddit.com/submit/?url=https%3A//dizitalcard.in/topaz-furniture/"
                                        class="text-decoration-none p-2" title="Reddit">
                                        <i class="fa fa-reddit fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://www.stumbleupon.com/submit?url=https%3A//dizitalcard.in/topaz-furniture/&title=TOPAZ%20FURNITURE"
                                        class="text-decoration-none p-2" title="StumbleUpon">
                                        <i class="fa fa-stumbleupon fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://t.me/share/url?text=TOPAZ%20FURNITURE&url=https%3A//dizitalcard.in/topaz-furniture/"
                                        class="text-decoration-none p-2" title="Telegram">
                                        <i class="fa fa-telegram fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://www.tumblr.com/widgets/share/tool?posttype=link&title=TOPAZ%20FURNITURE&caption=TOPAZ%20FURNITURE&content=https%3A//dizitalcard.in/topaz-furniture/&canonicalUrl=https%3A//dizitalcard.in/topaz-furniture/&shareSource=tumblr_share_button"
                                        class="text-decoration-none p-2" title="Tumblr">
                                        <i class="fa fa-tumblr fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://twitter.com/intent/tweet/?text=TOPAZ%20FURNITURE&url=https%3A//dizitalcard.in/topaz-furniture/"
                                        class="text-decoration-none p-2" title="Twitter">
                                        <i class="fa fa-twitter fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://vk.com/share.php?url=https%3A//dizitalcard.in/topaz-furniture/&title=TOPAZ%20FURNITURE"
                                        class="text-decoration-none p-2" title="VK">
                                        <i class="fa fa-vk fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="whatsapp://send?text=TOPAZ%20FURNITURE+https%3A//dizitalcard.in/topaz-furniture/"
                                        class="text-decoration-none p-2" title="WhatsApp">
                                        <i class="fa fa-whatsapp fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank" href="https://wordpress.com/press-this.php?u=https%3A//dizitalcard.in/topaz-furniture/&t=TOPAZ%20FURNITURE&s=&i=https:///logo.webp"
                                        class="text-decoration-none p-2" title="Wordpress">
                                        <i class="fa fa-wordpress fa-2x text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item m-1">
                                    <a target="_blank"
                                        href="https://www.xing.com/app/user?op=share;url=https%3A//dizitalcard.in/topaz-furniture/;title=TOPAZ%20FURNITURE"
                                        class="text-decoration-none p-2" title="XING">
                                        <i class="fa fa-xing fa-2x text-dark"></i>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>

                </div> <!-- /.end single work column -->


            </div>
   
    </section> <!-- /.end our-work-area -->




    <section id="about" class="about-area" style="padding-top:50px; padding-bottom:115px;background-color:<?php echo $detail['about_color']; ?>">
        <div class="about-img">
            <style>
            <? if($detail['about_image']!="") { ?>
                .about-img {
                    background: url('<?php echo base_url().'assets/user_assets/about/'.$detail['about_image']; ?>') no-repeat scroll center center / cover;
                }
            <? } else { ?>
                .about-img {
                    background: url('<?php echo base_url().'assets/user_assets/about/test.png'; ?>') no-repeat scroll center center / cover;
                }
            <? } ?>
            </style>
        </div> <!-- about-us image, image is used by css -->
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-sm-offset-5 col-xs-12">
                    <div class="about-us-text" style="color:<?php echo $detail['about_text_color']; ?>">
                        <h2>About us</h2>
                        <h3><?php echo $detail['est_year']; ?></h3>
                        <h4><?php echo $detail['business_type']; ?></h4>

                        <h4><?php echo $detail['about_title']; ?></h4>
                        <p style="text-align: justify;"><? echo $detail['about_description']; ?></p>
                        <!-- <p><i class="fa fa-check" style="padding-right: 8px;"></i>Manufacturer of All kind of premium
                            and Highend luxurious furnitures</p> -->
                        
                        
                        
                        <button  class="btn btn-medium btn-greenish dropdown-toggle cc" type="button" id="socialshare"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;">
                            Opening Hours <i class="fa fa-arrow-circle-down" style="padding-left: 4px;"></i>
                        </button>
                        
                        <div class="dropdown-menu" aria-labelledby="socialshare"
                            style="padding-bottom:0px; margin-bottom: 0px ;">
                            <ul class="list-inline" style="padding-bottom:0px; margin-bottom: 0px ;">
                                <li class="list-inline-item m-1" style="padding-bottom:0px; margin-bottom: 0px ;">
                                    <p
                                        style="color:black; font-weight: 500; padding-left:10px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                    <div class="row">
                                        <div class="col-lg-12 col-xs-16"
                                            style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                            <span style="font-weight:bold">Monday To Friday:   </span>   <?php echo $detail['mon_fri']; ?><br>
                                            <span style="font-weight:bold">Satuday:   </span>     <?php echo $detail['saturday']; ?><br>
                                            <span style="font-weight:bold">Sunday:   </span>  <?php echo $detail['sunday']; ?>
                                        </div>
                                        <!-- <div class="col-lg-3 col-xs-12"
                                            style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                            TUESDAY: 11:00 AM - 09:00 PM
                                        </div>
                                        <div class="col-lg-3 col-xs-12"
                                            style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                            WEDNESDAY: 11:00 AM - 09:00 PM
                                        </div>
                                        <div class="col-lg-3 col-xs-12"
                                            style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                            THURSDAY: 11:00 AM - 09:00 PM
                                        </div> -->
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-lg-3 col-xs-12"
                                            style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                            FRIDAY: 11:00 AM - 09:00 PM
                                        </div>
                                        <div class="col-lg-3 col-xs-12"
                                            style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                            SATURDAY: 11:00 AM - 09:00 PM
                                        </div>
                                        <div class="col-lg-3 col-xs-12"
                                            style="color:black; font-weight: 500; padding-left:40px; padding-right:10px; padding-bottom:0px; margin-bottom: 0px ;">
                                            SUNDAY: 11:00 AM - 09:00 PM
                                        </div>
                                    </div> -->
                                    
                                </li>

                            </ul>
                        </div>
                    </div>
                </div> <!-- /.end about-us-text -->
            </div>
        </div>
        
    </section> <!-- /.end about-area -->

    <br>
    <br>
    <br>
    
    <? if($brands['service_display']==1) { ?>
    <section id="brands" class="our-work-area" style="background-color: #fafafa; padding-top:30px; padding-bottom:30px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>Brands</h2>
                    </div>
                </div>
            </div> <!-- /.end section-title row -->

            
            <div class="containerbrands">
                <h3 class="title"><?php echo $brands['service_name1']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                        <? if($brands['service_image1']!="") { ?>
                        <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image1']; ?>" alt="" >
                        <? } else { ?>
                        <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/test.png'; ?>" alt="" >
                        <? } ?>
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><?php echo $brands['service_name1']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            
    
            
            <div class="containerbrands">
                <h3 class="title"><? echo $brands['service_name2']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                        <? if($brands['service_image2']!="") { ?>
                        <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image2']; ?>" alt="" >
                         <? } else { ?>
                         <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/test.png'; ?>" alt="" >
                         <? } ?>
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><? echo $brands['service_name2']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            

            
            <div class="containerbrands">
                <h3 class="title"><? echo $brands['service_name3']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                         <? if($brands['service_image3']!="") { ?>
                        <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image3']; ?>" alt="" >
                        <? } else { ?>
                        <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/test.png'; ?>" alt="" >
                        <? } ?>
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><? echo $brands['service_name3']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            

            
            <div class="containerbrands">
                <h3 class="title"><? echo $brands['service_name4']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                        <? if($brands['service_image4']!="") { ?>
                        <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image4']; ?>" alt="" >
                         <? } else { ?>
                         <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/test.png'; ?>" alt="" >
                         <? } ?>
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><?php echo $brands['service_name4']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            

            <? if($brands['service_name5']!="") { ?>
            <div class="containerbrands">
                <h3 class="title"><?php echo $brands['service_name5']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                        <img class="content-image"  height="320" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image5']; ?>" alt="" >
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><?php echo $brands['service_name5']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            <? } ?>

            <? if($brands['service_name6']!="") { ?>
            <div class="containerbrands">
                <h3 class="title"><?php echo $brands['service_name6']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                        <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image6']; ?>" alt="" >
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><?php echo $brands['service_name6']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            <? } ?>

            <? if($brands['service_name7']!="") { ?>
            <div class="containerbrands">
                <h3 class="title"><?php echo $brands['service_name7']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                        <img class="content-image" width="720"  height="360" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image7']; ?>" alt="" >
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><?php echo $brands['service_name7']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            <? } ?>

            <? if($brands['service_name8']!="") { ?>
            <div class="containerbrands">
                <h3 class="title"><?php echo $brands['service_name8']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                        <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image8']; ?>" alt="" >
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><?php echo $brands['service_name8']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            <? } ?>

            <? if($brands['service_name9']!="") { ?>
            <div class="containerbrands">
                <h3 class="title"><?php echo $brands['service_name9']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                        <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image9']; ?>" alt="" >
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><?php echo $brands['service_name9']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            <? } ?>

            <? if($brands['service_name10']!="") { ?>
            <div class="containerbrands">
                <h3 class="title"><?php echo $brands['service_name10']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                        <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image10']; ?>" alt="" >
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><?php echo $brands['service_name10']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            <? } ?>

            <? if($brands['service_name11']!="") { ?>
            <div class="containerbrands">
                <h3 class="title"><?php echo $brands['service_name11']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                        <img class="content-image"   height="320" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image11']; ?>" alt="" >
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><?php echo $brands['service_name11']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            <? } ?>

            <? if($brands['service_name12']!="") { ?>
            <div class="containerbrands">
                <h3 class="title"><?php echo $brands['service_name12']; ?></h3>
                <div class="content">
                    <!-- <a href="" target=""> -->
                        <div class="content-overlay"></div>
                        <img class="content-image"  height="320" src="<?php echo base_url().'assets/user_assets/service/'.$brands['service_image12']; ?>" alt="" >
                        <div class="content-details fadeIn-top fadeIn-right">
                            <!-- <h3>This is a title</h3> -->
                            <p><?php echo $brands['service_name12']; ?></p>
                        </div>
                    <!-- </a> -->
                </div>
             </div>
            <? } ?>
             
            <!-- <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img src="<?php echo base_url().'assets/white_assets/galleryF/big_img/'.$gall['gallery_image']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/white_assets/galleryF/big_img/'.$gall['gallery_image']; ?>"></a>

                        </div>
                    </div>
                </div>
            </div>  
            </div> -->
        </div>
    </section> <!-- /.end our-work-area -->
    <? } ?>
    <section id="portfolio" class="section-padding our-work-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                           <? if($product['as_service']==1) { ?>
                        <h2>Our Services</h2>
                        <? } else { ?>
                        <h2>Our Products</h2>
                        <? } ?>
                    </div>
                </div>
            </div> <!-- /.end section-title row -->
            <div class="wrapper1">
        <!-- filter Items -->
                <nav>
                <div class="items1">
                    <span   class="item1 active" data-name="all">All</span>
                    <? if($product['product_category']!="") { ?>
                    <? $arr=array();
                    $test=rtrim($product['product_category'],",");
                    $arr=explode(",",$test);
                     ?>
                    <? foreach($arr as $procat)  {?>
                    <span  class="item1" data-name="<?php echo $procat ?>"><?php echo $procat; ?></span>
                    <? } } ?>
                </div>
                   </nav>

            </div>
            <div class="row">

            <div class="gallery1">
                
                <? if($product['product_name1']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat1']; ?>" >
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat1']; ?>">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/'.$product['product_image1']; ?>" alt="">
                            <div class="work-hover" >
                               
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<?php echo $messagenew."*"; echo $product['product_name1']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat1']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <?php echo $product['product_name1']; ?> 
                            </h4>
                          
                </div>  
                <? } else { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="" >
                <div class="single-work" style="margin-bottom: 10px;" data-name="">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/test.png'; ?>" alt="">
                            <div class="work-hover" >
                                
                                <div class="work-details" id="colorbtn">
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                            </h4>
                          
                </div> 
                <? } ?>

                <? if($product['product_name2']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat2']; ?>">
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat2']; ?>">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/'.$product['product_image2']; ?>" alt="">
                            <div class="work-hover" >
                                
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<?php echo $messagenew."*"; echo $product['product_name2']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat1']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <?php echo $product['product_name2']; ?> 
                            </h4>
                          
                </div>  
                <? } else { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="" >
                <div class="single-work" style="margin-bottom: 10px;" data-name="">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/test.png'; ?>" alt="">
                            <div class="work-hover" >
                               
                                <div class="work-details" id="colorbtn">
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                            </h4>
                          
                </div> 
                <? } ?>

                <? if($product['product_name3']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat3']; ?>">
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat3']; ?>">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/'.$product['product_image3']; ?>" alt="">
                            <div class="work-hover" >
                                
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<?php echo $messagenew."*"; echo $product['product_name3']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat3']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <?php echo $product['product_name3']; ?> 
                            </h4>
                          
                </div>  
                <? } else { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="" >
                <div class="single-work" style="margin-bottom: 10px;" data-name="">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/test.png'; ?>" alt="">
                            <div class="work-hover" >
                                
                                <div class="work-details" id="colorbtn">
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                            </h4>
                          
                </div> 
                <? } ?>

                <? if($product['product_name4']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat4']; ?>">
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat4']; ?>">
                            <img  height="320" src="<? echo base_url().'assets/user_assets/product/'.$product['product_image4']; ?>" alt="">
                            <div class="work-hover" >
                               
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<?php echo $messagenew."*"; echo $product['product_name4']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat4']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <?php echo $product['product_name4']; ?> 
                            </h4>
                          
                </div>  
                <? } else { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="" >
                <div class="single-work" style="margin-bottom: 10px;" data-name="">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/test.png'; ?>" alt="">
                            <div class="work-hover" >
                              
                                <div class="work-details" id="colorbtn">
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                            </h4>
                          
                </div> 
                <? } ?>

                <? if($product['product_name5']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat5']; ?>">
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat5']; ?>">
                            <img   height="320" src="<?php echo base_url().'assets/user_assets/product/'.$product['product_image5']; ?>" alt="">
                            <div class="work-hover" >
                               
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<? echo $detail['contact_no']; ?>?text=<?php echo $messagenew."*"; echo $product['product_name5']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat5']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <?php echo $product['product_name5']; ?> 
                            </h4>
                          
                </div>  
                <? } ?>

                <? if($product['product_name6']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat6']; ?>">
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat6']; ?>">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/'.$product['product_image6']; ?>" alt="">
                            <div class="work-hover" >
                               
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<? echo $detail['contact_no']; ?>?text=<?php echo $messagenew."*"; echo $product['product_name6']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat6']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <?php echo $product['product_name6']; ?> 
                            </h4>
                          
                </div>  
                <? } ?>

                <? if($product['product_name7']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat7']; ?>">
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat7']; ?>">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/'.$product['product_image7']; ?>" alt="">
                            <div class="work-hover" >
                                
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<?php echo $messagenew."*"; echo $product['product_name7']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat7']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <?php echo $product['product_name7']; ?> 
                            </h4>
                          
                </div>  
                <? } ?>

                <? if($product['product_name8']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat8']; ?>">
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat8']; ?>">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/'.$product['product_image8']; ?>" alt="">
                            <div class="work-hover" >
                               
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<?php echo $messagenew."*"; echo $product['product_name8']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat8']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <?php echo $product['product_name8']; ?> 
                            </h4>
                          
                </div>  
                <? } ?>

                <? if($product['product_name9']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat9']; ?>">
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat9']; ?>">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/'.$product['product_image9']; ?>" alt="">
                            <div class="work-hover" >
                               
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<?php echo $messagenew."*"; echo $product['product_name9']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat9']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <? echo $product['product_name9']; ?> 
                            </h4>
                          
                </div>  
                <? } ?>

                <? if($product['product_name10']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat10']; ?>">
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat10']; ?>">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/'.$product['product_image10']; ?>" alt="">
                            <div class="work-hover" >
                               
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<?php echo $messagenew."*"; echo $product['product_name10']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat10']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <?php echo $product['product_name10']; ?> 
                            </h4>
                          
                </div>  
                <? } ?>

                <? if($product['product_name11']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat11']; ?>">
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat11']; ?>">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/'.$product['product_image11']; ?>" alt="">
                            <div class="work-hover" >
                                
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<? echo $messagenew."*"; echo $product['product_name11']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat11']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <?php echo $product['product_name11']; ?> 
                            </h4>
                          
                </div>  
                <? } ?>

                <? if($product['product_name12']!="") { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 nnew" data-name="<?php echo $product['product_cat12']; ?>">
                <div class="single-work" style="margin-bottom: 10px;" data-name="<?php echo $product['product_cat12']; ?>">
                            <img  height="320" src="<?php echo base_url().'assets/user_assets/product/'.$product['product_image12']; ?>" alt="">
                            <div class="work-hover" >
                               
                                <div class="work-details" id="colorbtn">
                                    <? $messagenew=str_replace(['<p>', '</p>'], '', $detail['product_message']); ?>
                                    <a target="_blank" 
                                        href="https://wa.me/91<?php echo $detail['contact_no']; ?>?text=<?php echo $messagenew."*"; echo $product['product_name12']."*"; ?>"><i
                                            class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                                </div>
                            </div>
                        </div> 
                            <h4 class="single-work " data-name="<?php echo $product['product_cat12']; ?>" style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                                <?php echo $product['product_name12']; ?> 
                            </h4>
                          
                </div>  
                <? } ?>

                <!-- <div class="image1" data-name="bag"><span><img src="https://images.pexels.com/photos/417074/pexels-photo-417074.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
                <div class="image1" data-name="headphone"><span><img src="https://images.pexels.com/photos/2335126/pexels-photo-2335126.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
                <div class="image1" data-name="camera"><span><img src="https://images.pexels.com/photos/210186/pexels-photo-210186.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
                <div class="image1" data-name="shoe"><span><img src="https://images.pexels.com/photos/33041/antelope-canyon-lower-canyon-arizona.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
                <div class="image1" data-name="headphone"><span><img src="images/headphone-2.jpg" alt=""></span></div>
                <div class="image1" data-name="watch"><span><img src="https://images.pexels.com/photos/6992/forest-trees-northwestisbest-exploress.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
                <div class="image1" data-name="shoe"><span><img src="images/shoe-2.jpg" alt=""></span></div>
                <div class="image1" data-name="camera"><span><img src="images/camera-2.jpg" alt=""></span></div> -->
            </div>
               
                 <!-- /.end single work column -->
                <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-work" style="margin-bottom: 10px;">
                        <img src="assets/img/products/img2.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/products/img2.jpg"></a>
                            <div class="work-details">
                                <a target="_blank"
                                    href="https://wa.me/919687810000?text=Hi%2C%20I%20want%20to%20buy%20%2ASofa%20Chairs%2A.%0Ahttps%3A%2F%2Fdizitalcard.in/topaz-furniture/%23product344706%0A"><i
                                        class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                            </div>
                        </div>
                    </div>
                    <h4 style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                        Sofa Chairs
                    </h4>
                </div>  -->
                <!-- /.end single work column -->
                <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-work" style="margin-bottom: 10px;">
                        <img src="assets/img/products/img3.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/products/img3.jpg"></a>
                            <div class="work-details">
                                <a target="_blank"
                                    href="https://wa.me/919687810000?text=Hi%2C%20I%20want%20to%20buy%20%2ATable%2A.%0Ahttps%3A%2F%2Fdizitalcard.in/topaz-furniture/%23product344701%0A"><i
                                        class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                            </div>
                        </div>
                    </div>
                    <h4 style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                        Table
                    </h4>
                </div> -->
                <!-- /.end single work column -->
                <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-work" style="margin-bottom: 10px;">
                        <img src="assets/img/products/img4.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/products/img4.jpg"></a>
                            <div class="work-details">
                                <a target="_blank"
                                    href="https://wa.me/919687810000?text=Hi%2C%20I%20want%20to%20buy%20%2ASofa%20Chairs%2A.%0Ahttps%3A%2F%2Fdizitalcard.in/topaz-furniture/%23product344706%0A"><i
                                        class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                            </div>
                        </div>
                    </div>
                    <h4 style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                        Sofa Chairs
                    </h4>
                </div> -->
                 <!-- /.end single work column -->
                <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-work" style="margin-bottom: 10px;">
                        <img src="assets/img/products/img5.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/products/img5.jpg"></a>
                            <div class="work-details">
                                <a target="_blank"
                                    href="https://wa.me/919687810000?text=Hi%2C%20I%20want%20to%20buy%20%2ATable%2A.%0Ahttps%3A%2F%2Fdizitalcard.in/topaz-furniture/%23product344701%0A"><i
                                        class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                            </div>
                        </div>
                    </div>
                    <h4 style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                        Table
                    </h4>
                </div>  -->
                <!-- /.end single work column -->
                <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-work" style="margin-bottom: 10px;">
                        <img src="assets/img/products/img6.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/products/img6.jpg"></a>
                            <div class="work-details">
                                <a target="_blank"
                                    href="https://wa.me/919687810000?text=Hi%2C%20I%20want%20to%20buy%20%2ADesigner%20chair%2A.%0Ahttps%3A%2F%2Fdizitalcard.in/topaz-furniture/%23product345314%0A"><i
                                        class="fa fa-whatsapp" style="padding-right: 10px;"></i>Inquiry Now</a>
                            </div>
                        </div>

                    </div>
                    <h4 style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600;">
                        Designer Chair
                    </h4>
                </div>  -->
                <!-- /.end single work column -->

            </div>
        </div>
    </section> <!-- /.end our-work-area -->


    <section id="teams" class="our-work-area" style="background-color: #fafafa; padding-top:30px; padding-bottom:30px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div> <!-- /.end section-title row -->
            <div class="row">
            
                <? if($gallery['gallery_image1']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image1']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image1']; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } else { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/test.png'; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/test.png'; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image2']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image2']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image2']; ?>"></a>

                        </div>
                    </div>
                </div>
               <? } else { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/test.png'; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/test.png'; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image3']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image3']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image3']; ?>"></a>

                        </div>
                    </div>
                </div>
               <? } else { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/test.png'; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/test.png'; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image4']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image4']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image4']; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } else { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/test.png'; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/test.png'; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image5']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image5']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image5']; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image6']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image6']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image6']; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image7']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image7']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image7']; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image8']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image8']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image8']; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image9']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image9']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image9']; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image10']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image10']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image10']; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image11']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image11']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image11']; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                <? if($gallery['gallery_image12']!="") { ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img height="180" src="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image12']; ?>" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="<?php echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image12']; ?>"></a>

                        </div>
                    </div>
                </div>
                <? } ?>

                

                 <!-- /.end single work column -->
                <!-- <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img src="assets/img/gallery/img2.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/gallery/img2.jpg"></a>

                        </div>
                    </div>
                </div> -->
                 <!-- /.end single work column -->
                <!-- <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img src="assets/img/gallery/img3.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/gallery/img3.jpg"></a>

                        </div>
                    </div> -->
                </div>
                 <!-- /.end single work column -->
                <!-- <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img src="assets/img/gallery/img4.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/gallery/img4.jpg"></a>

                        </div>
                    </div>
                </div>  -->
                <!-- /.end single work column -->
                <!-- <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img src="assets/img/gallery/img5.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/gallery/img5.jpg"></a>

                        </div>
                    </div>
                </div>  -->
                <!-- /.end single work column -->
                <!-- <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img src="assets/img/gallery/img6.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/gallery/img6.jpg"></a>

                        </div>
                    </div>
                </div> -->
                 <!-- /.end single work column -->
                <!-- <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img src="assets/img/gallery/img1.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/gallery/img1.jpg"></a>

                        </div>
                    </div>
                </div> -->
                 <!-- /.end single work column -->
                <!-- <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="single-work">
                        <img src="assets/img/gallery/img2.jpg" alt="">
                        <div class="work-hover">
                            <a class="popUpbtn" href="assets/img/gallery/img2.jpg"></a>

                        </div>
                    </div>
                </div> -->
                 <!-- /.end single work column -->
            </div>
        </div>
    </section> <!-- /.end our-work-area -->


    <section id="" class="section-padding our-work-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>Videos</h2>
                    </div>
                </div>
            </div> <!-- /.end section-title row -->
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
                $embed_url="https://www.youtube.com/embed/".$video_id;
                ?>
                
                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 20px;">
                
                    <iframe width="100%" height="300" src="<?php echo $embed_url; ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div> 
                    <? } ?>

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
                        $embed_url="https://www.youtube.com/embed/".$video_id;?>
                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 20px;">
               
                    <iframe width="100%" height="300" src=" <?php echo $embed_url; ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div> 
                    <? } ?>

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
                         $embed_url="https://www.youtube.com/embed/".$video_id;
                    ?>
                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 20px;">
                
                    <iframe width="100%" height="300" src="<?php echo $embed_url;?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div> 
                    <? } ?>
                <!-- /.end single work column -->
                <!-- <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 20px;">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/UAk30oa-hC0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div> -->
                 <!-- /.end single work column -->
                <!-- <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 20px;">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/UAk30oa-hC0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>  -->
                <!-- /.end single work column -->


            </div>
        </div>
    </section> <!-- /.end our-work-area -->

    <section id="testimonial" class=" what-our-customers-area"
        style="background-color:#efefef; padding-top: 30px; padding-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>Feedback</h2>
                    </div>
                </div>
            </div> <!-- /.end section-title row -->
            <style>
                .client-content {
                    background-color: #ffffff;
                }
            </style>
            <div class="row">
                <div class="clients-say-slider">
                
                    <div class="slide col-xs-12">
                        <div class="slide-content">
                            <div class="client-content">
                                <span class="comma-client">“</span>
                                <p><?php echo $testimonial['testimonial_description1']; ?></p>
                            </div>
                            <div class="author-details">
                                <div class="author-img">
                                    <a href=""><img src="<?php echo base_url().'assets/user_assets/testimonial/'.$testimonial['testimonial_image1']; ?>" alt=""></a>
                                </div>
                                <h4><?php echo $testimonial['testimonial_name1'] ?></h4>
                            </div>
                        </div>
                    </div>
                
                    <div class="slide col-xs-12">
                        <div class="slide-content">
                            <div class="client-content">
                                <span class="comma-client">“</span>
                                <p><?php echo $testimonial['testimonial_description2']; ?></p>
                            </div>
                            <div class="author-details">
                                <div class="author-img">
                                    <a href=""><img src="<?php echo base_url().'assets/user_assets/testimonial/'.$testimonial['testimonial_image2']; ?>" alt=""></a>
                                </div>
                                <h4><?php echo $testimonial['testimonial_name2'] ?></h4>
                            </div>
                        </div>
                    </div>
                    
                    <? if($testimonial['testimonial_name3']!=NULL) { ?>
                    <div class="slide col-xs-12">
                        <div class="slide-content">
                            <div class="client-content">
                                <span class="comma-client">“</span>
                                <p><?php echo $testimonial['testimonial_description3']; ?></p>
                            </div>
                            <div class="author-details">
                                <div class="author-img">
                                    <a href=""><img src="<?php echo base_url().'assets/user_assets/testimonial/'.$testimonial['testimonial_image3']; ?>" alt=""></a>
                                </div>
                                <h4><?php echo $testimonial['testimonial_name3'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <? } ?>
                    
                    <? if($testimonial['testimonial_name4']!=NULL) { ?>
                    <div class="slide col-xs-12">
                        <div class="slide-content">
                            <div class="client-content">
                                <span class="comma-client">“</span>
                                <p><?php echo $testimonial['testimonial_description4']; ?></p>
                            </div>
                            <div class="author-details">
                                <div class="author-img">
                                    <a href=""><img src="<?php echo base_url().'assets/user_assets/testimonial/'.$testimonial['testimonial_image4']; ?>" alt=""></a>
                                </div>
                                <h4><?php echo $testimonial['testimonial_name4'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <? } ?>

                    
                    <!-- /.end single-slide column -->
                    <!-- <div class="slide col-xs-12">
                        <div class="slide-content">
                            <div class="client-content">
                                <span class="comma-client">“</span>
                                <p>We bought dream home in cream area. off course living room is most important of home
                                    bcs it's a first impression. For
                                    buy sofa and dinning table I was very confused. I visited so many show rooms in
                                    udhna magdalla but no satisfaction i
                                    got.</p>
                            </div>
                            <div class="author-details">
                                <div class="author-img">
                                    <a href=""><img src="img/author2.jpg" alt=""></a>
                                </div>
                                <h4>Isha Thakur</h4>
                            </div>
                        </div>
                    </div>  -->
                    <!-- /.end single-slide column -->
                    <!-- <div class="slide col-xs-12">
                        <div class="slide-content">
                            <div class="client-content">
                                <span class="comma-client">“</span>
                                <p>Amazing Collection. Loved the customer service. Got 8 Seater Dinning Table for my
                                    house. Perfect finishing 👌😍</p>
                            </div>
                            <div class="author-details">
                                <div class="
                                -img">
                                    <a href=""><img src="img/author.jpg" alt=""></a>
                                </div>
                                <h4>Ria Bajaj</h4>
                            </div>
                        </div>
                    </div>  -->
                    <!-- /.end single-slide column -->
                </div> <!-- /.end clients say slider -->
            </div>
        </div>
    </section> <!-- /.end what-our-customers-area -->



    <!--<section id="price" class="section-padding our-work-area" style=" padding-top: 30px; padding-bottom: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title">
                                <h2>Rate Us</h2>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <style>
                            .checked {
                                color: #d58d15;
                            }
                        </style>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <h4 style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600; margin-bottom: 10px;">
                                4.0
                            </h4>
                            <div style="font-size:30px; text-align: center;">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <h4 style="text-align: center; margin-bottom: 25px; color:black; font-weight: 600; margin-top: 10px;">
                                4 Total
                            </h4>
                        </div> 
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <style>
                                @import url(https://fonts.googleapis.com/css?family=Maven+Pro:400,900);
                                .perc {position:absolute; display:none; top: 0; line-height:30px; right:10px; color:#fff;}
                                .container-progress {
                                    position: relative;
                                    width: 70%;
                                    height: 30px;
                                    background-color: rgba(0,0,0,1);
                                    border-radius: 4px;
                                    margin: 10px auto;
                                }
                                .container-progress:after { position: absolute; top:0; right: 10px;line-height: 30px;}
                                .fillmult {
                                    height: 100%;
                                    width: 0;
                                    background-color: rgba(213, 141, 21, 1);
                                    border-radius: 4px;
                                    line-height: 30px;
                                    text-align: left;
                                    color:#fff;
                                }
                                .fillmult span {
                                    padding-left: 10px;
                                    color: #ffffff;
                                }
                            </style>

                            

                            <div class="container-progress">
                                <div class="fillmult" data-width="75%">
                                    <span><b>5☆</b></span>
                                </div>
                            </div>
                            <div class="container-progress">
                                <div class="fillmult" data-width="0%">
                                    <span><b>4☆</b></span>
                                </div>
                                
                            </div>
                            <div class="container-progress">
                                <div class="fillmult" data-width="0%">
                                    <span><b>3☆</b></span>
                                </div>
                            </div>
                            <div class="container-progress">
                                <div class="fillmult" data-width="0%">
                                    <span><b>2☆</b></span>
                                </div>
                            </div>
                            <div class="container-progress">
                                <div class="fillmult" data-width="25%">
                                    <span><b>1☆</b></span>
                                </div>
                            </div>
                        </div>

                        <style media="screen">
                            
                            .rating {
                                display: flex;
                                flex-direction: row-reverse;
                                justify-content: center;
                                align-items:center;
                                
                            }
                        
                        
                            .rating>input {
                                display: none;
                            }
                        
                            .rating>label {
                                position: relative;
                                
                                font-size: 30px;
                                color: #d58d15;
                                cursor: pointer;
                                font-weight: 300;
                                padding-right: 7px;
                            }
                        
                            .rating>label::before {
                                content: "\2605";
                                position:absolute;
                                opacity: 0;
                               
                                font-weight:600;
                            }
                        
                            .rating>label:hover:before,
                            .rating>label:hover~label:before {
                                opacity: 1 !important;
                            }
                        
                            .rating>input:checked~label:before {
                                opacity: 1;
                            }
                        
                            .rating:hover>input:checked~label:before {
                                opacity: 1;
                            }
                        </style>


                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="rating" style="padding-top: 5px; padding-right:2px">
                                <input type="radio" name="rating" value="5" id="5"><label for="5"><span class="fa fa-star-o"></span></label>
                                <input type="radio" name="rating" value="4" id="4"><label for="4"><span class="fa fa-star-o"></span></label>
                                <input type="radio" name="rating" value="3" id="3"><label for="3"><span class="fa fa-star-o"></span></label>
                                <input type="radio" name="rating" value="2" id="2"><label for="2"><span class="fa fa-star-o"></span></label>
                                <input type="radio" name="rating" value="1" id="1"><label for="1"><span class="fa fa-star-o"></span></label>
                            </div>
                        </div> 
                        
            
                    </div>
                </div>
            </section> -->

    <style>
        @media only screen and (max-width: 765px) {
            .our-work-area .single-work {
                float: none !important;
            }

            .our-work-area .single-work .single-work123 img {
                height: auto !important;
            }
        }
    </style>

    <section id="price" class="our-work-area" style="padding-top: 30px; padding-bottom:20px;">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-work" style="margin-bottom: 10px; float: right;">
                        <div class="single-work123" style="align:center;">
                            <img src="<?php echo base_url().'assets/user_assets/qrcode/'.$detail['qrimage']; ?>" alt="" style="height: 300px;">
                        </div>
                        <div class="work-hover">
                            <a download="Topaz Furniture" href="<?php echo base_url().'assets/user_assets/qrcode/'.$detail['qrimage']; ?>  "></a>

                        </div>
                    </div>

                </div> <!-- /.end single work column -->

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="purchase-text">

                        <a id="colorbtn" class="btn btn-medium btn-greenish" download="Topaz Furniture"
                            href="<?php echo base_url().'assets/user_assets/qrcode/'.$detail['qrimage']; ?>">Download QR <i class="fa fa-long-arrow-right"></i></a>
                    </div> <!-- /.end purchase-text -->
                </div> <!-- /.end single work column -->

            </div>
        </div>
    </section> <!-- /.end our-work-area -->


    <section id="price" class="our-work-area" style="padding-top: 30px; padding-bottom:60px;">
        <div class="container">
            <style>
                .a-color-black .btn-greenish {
                    background-color: #000;
                    color: #fff;
                }

                .a-color-black .btn-greenish:hover {
                    background-color:<? echo $color['button_color']; ?>;
                    color: #fff;
                }
            </style>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                    <div class="purchase-text" style="margin-top: 0px; margin-bottom: 0px;">
                        <div class="a-color-black">
                            <a target="_blank"
                                href="https://wa.me/919898574094?text=Hi%2C%20I%20want%20to%20Create%20my%20own%20Digital%20Card."
                                class="btn btn-medium btn-greenish">@ICED INFOTECH <i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div> <!-- /.end purchase-text -->
                </div> <!-- /.end single work column -->
            </div>
        </div>
    </section>

    <footer class="footer-area section-padding">
        <div id="scrollTop"><i class="fa fa-angle-up"></i></div> <!-- scrollTop button in footer -->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                    <div class="footer text-center">
                        <p style="color:<?php echo $detail['footer_text_color']; ?>">A Design by <a id="colorbtn1" href="https://www.icedinfotech.com/" target="_blank">ICED Infotech</a></p>
                        <p style="color:<?php echo $detail['footer_text_color']; ?>">Copyright 2022. All Rights Reserved.</p>


                    </div> <!-- footer copyright text and social links area -->
                </div>
            </div>
        </div>
    </footer>

    </div> <!-- /.end full-wrapper div-->
    
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
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <? if($detail['popup_image1']!="") { ?>
                    <img src="<?php echo base_url().'assets/user_assets/popup/'.$detail['popup_image1']; ?>" alt="">
                    <? } else { ?>
                    <img src="<?php echo base_url().'assets/user_assets/popup/test.png'; ?>" alt="">
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
    <!--p class="returnToProfile"><a href="https://codepen.io/ptamaro" target="_parent">Return to profile</a></p-->


    <!-- jQuery (necessary for all JavaScript plugins) -->
    <script src="<? echo base_url().'assets/js/jquery-1.11.3.min.js'; ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- GOOGLE MAPS -->

    <script type="text/javascript">
        var map;
        var latlng = new google.maps.LatLng(41.901630, 12.460245);
        var stylez = [
            {
                featureType: "all",
                elementType: "all",
                stylers: [
                    { saturation: -100 } // <-- THIS
                ]
            }
        ];
        var mapOptions = {
            zoom: 14,
            center: latlng,
            scrollwheel: false,
            scaleControl: false,
            disableDefaultUI: true,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gMap']
            }
        };
        map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
        var geocoder_map = new google.maps.Geocoder();
        var address = 'Rome';
        geocoder_map.geocode({ 'address': address }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);

                var marker = new google.maps.Marker({
                    map: map,
                    icon: 'img/map-icon.png',
                    position: map.getCenter()
                });

                var contentString = 'Rome';
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
        var mapType = new google.maps.StyledMapType(stylez, { name: "Grayscale" });
        map.mapTypes.set('gMap', mapType);
        map.setMapTypeId('gMap');
    </script>

    <script>
        $('.container-progress > div').each(function () {
            var width = $(this).data('width');
            $(this).animate({ width: width }, 2500);
            $(this).after('<span class="perc">' + width + '</span>');
            $('.perc').delay(3000).fadeIn(1000);
        }); 
    </script>
    <script type="text/javascript">
        $(window).on('load', function () {
            $('#myModal').modal('show');
        });
    </script>
    <script type="text/javascript">
      var config = {
            speed: 3000,
            auto: true, // true or false
            arrows: true, // true or false
            nav: true, // true or false
            navStyle: 'default' // square,rectangle, default
        };

        // Slider core
        var slides = $('.slides');
        var totalSlides = slides.length;
        var currentIndex = 0;

        function setSlides() {
            var currentSlide = slides.eq(currentIndex);
            slides.hide();
            currentSlide.fadeIn(1500);
        };
        setSlides();

        // autoplay
        if (config.auto) {
            var autoSlide = setInterval(function () {
                currentIndex += 1;
                if (currentIndex > totalSlides - 1) {
                    currentIndex = 0;
                }
                setSlides();
                navigation();
            }, config.speed);
        };

        // navigation arrows
        if (config.arrows) {
            $('.arrow').addClass('active');
            $('.prev').click(function () {
                clearInterval(autoSlide);
                currentIndex -= 1;
                if (currentIndex < 0) {
                    currentIndex = totalSlides - 1;
                }
                navigation();
                setSlides();
            });
            $('.next').click(function () {
                clearInterval(autoSlide);
                currentIndex += 1;
                if (currentIndex > totalSlides - 1) {
                    currentIndex = 0;
                }
                navigation();
                setSlides();
            });
        };

        // navigation
        if (config.nav) {
            for (i = 0; i < slides.length; i += 1) {
                $('<li/>').attr({ 'class': 'nav-item', 'id': i }).appendTo('.slide-nav');
            };
            $('.nav-item').first().addClass('item-active');
            switch (config.navStyle) { // navigation style
                case 'square':
                    $('.nav-item').addClass('square');
                    break;
                case 'rectangle':
                    $('.nav-item').addClass('rectangle');
                    break;
                default:
                    $('.nav-item').addClass('dot');
            };
            function navigation() {
                $('.nav-item').removeClass('item-active');
                $('.nav-item').eq(currentIndex).addClass('item-active');
            };
            $('.nav-item').click(function () {
                clearInterval(autoSlide);
                var navNumb = $(this).attr('id');
                currentIndex = navNumb;
                navigation();
                setSlides();
            });
        };

    </script>
    
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/waypoint.js'; ?>"></script>

     <!-- Sticky & One Page Nav JS -->
     <script src="<?php echo base_url().'assets/js/jquery.sticky.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.nav.js'; ?>"></script>
    <!-- SLICK JS -->
    <script src="<?php echo base_url().'assets/js/slick.min.js'; ?>"></script>
    <!-- VenoBox JS -->
    <script src="<?php echo base_url().'assets/js/venobox.min.js'; ?>"></script>

    
   
    <!-- CounterUp JS -->
    <script src="<?php echo base_url().'assets/js/jquery.counterup.min.js'; ?>"></script>
    <!-- Owl JS -->
    <script src="<?php echo base_url().'assets/js/owl.carousel.min.js'; ?>"></script>
    <!-- SCRIPT JS -->
    <script src="<?php echo base_url().'assets/js/main.js'; ?>"></script>
    <!-- Waypoints JS -->
    <script>
  const filterItem = document.querySelector(".items1");
const filterImg = document.querySelectorAll(".gallery1 .nnew");

window.onload = ()=>{ //after window loaded
  filterItem.onclick = (selectedItem)=>{ //if user click on filterItem div
    if(selectedItem.target.classList.contains("item1")){ //if user selected item has .item class
      filterItem.querySelector(".active").classList.remove("active"); //remove the active class which is in first item
      selectedItem.target.classList.add("active"); //add that active class on user selected item
      let filterName = selectedItem.target.getAttribute("data-name"); //getting data-name value of user selected item and store in a filtername variable
      filterImg.forEach((image) => {
        let filterImges = image.getAttribute("data-name"); //getting image data-name value
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
<? } else { ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $detail['company_name']; ?></title>
</head>
<body>
    <h1 align="center">Your card is inactive or not exist</h1>  
    <p style="text-align:center"><button style="padding: 1em 2.1em 1.1em;border-radius: 3px;color:white;
    background-color:black;">Pay Now</button></p>
</body>
</html>
<? }?>