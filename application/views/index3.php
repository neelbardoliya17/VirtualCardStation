<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title><? echo $detail['company_name']; ?></title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
  

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"
    />
    <link rel="stylesheet" href="template7.css" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="<? echo base_url().'assets/template3/vendor/animate.css/animate.min.css"'; ?> rel="stylesheet" />
    <link
      href="<? echo base_url().'assets/template3/vendor/bootstrap/css/bootstrap.min.css'; ?>"
      rel="stylesheet"
    />
    <link
      href="<? echo base_url().'assets/template3/vendor/bootstrap-icons/bootstrap-icons.css'; ?>"
      rel="stylesheet"
    />
    <link href="<? echo base_url().'assets/template3/vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet" />
    <link
      href="<? echo base_url().'assets/template3/vendor/glightbox/css/glightbox.min.css'; ?>"
      rel="stylesheet"
    />
    <link href="<? echo base_url().'assets/template3/vendor/remixicon/remixicon.css'; ?>" rel="stylesheet" />
    <link href="<? echo base_url().'assets/template3/vendor/swiper/swiper-bundle.min.css'; ?>" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="<? echo base_url().'assets/user_assets/favicon/'.$detail['favicon_image']; ?>">
    <!-- Template Main CSS File -->
    <link href="<? echo base_url().'assets/template3/css/style.css'; ?>" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Sailor - v4.9.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
    #header{
      background-color:<? echo $detail['header_color']; ?>;
    }
    #footer
    {
      background-color:<? echo $detail['footer_color']; ?>;
    }
    .newcl,
    .navbar a:hover, 
    .navbar .active, 
    .navbar .active:focus, .navbar li:hover>a
    {
      color:<? echo $detail['button_color']; ?> !important;
    }
    .newcl2,
    .back-to-top,
    button,
    .a-color-black .btn-greenish,
    #hero .carousel-control-prev-icon,
    #hero .carousel-control-next-icon,
    #hero .carousel-indicators li.active
    {
      background-color:<? echo $detail['button_color'] ?> !important;
    }
    </style>
    <style>
      .header {
        text-align: center;
        padding: 32px;
      }

      #gallerys {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 0 4px;
      }

      #gallerys img {
        width: 25%;
        height: 300px;
        /* object-fit: cover;  */
        margin-top: 8px;
        padding: 0 4px;
        border-radius: 10px;
      }

      @media (max-width: 800px) {
        #gallerys img {
          width: 50%;
        }
      }

      @media (max-width: 600px) {
        #gallerys img {
          width: 100%;
        }
      }
    </style>
    <style>
      .testimonial {
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
        padding: 30px 30px 30px 130px;
        margin: 0 15px 30px 15px;
        overflow: hidden;
        position: relative;
      }
      .testimonial:before {
        content: "";
        position: absolute;
        bottom: -4px;
        left: -17px;

        border-left: 25px solid transparent;
        border-right: 25px solid transparent;
        transform: rotate(45deg);
      }
      .testimonial:after {
        content: "";
        position: absolute;
        top: -4px;
        left: -17px;
        border-top: 25px solid #379ad3;
        border-left: 25px solid transparent;
        border-right: 25px solid transparent;
        transform: rotate(135deg);
      }
      .testimonial .pic {
        display: inline-block;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        overflow: hidden;
        position: absolute;
        top: 60px;
        left: 20px;
      }
      .testimonial .pic img {
        width: 100%;
        height: auto;
      }
      .testimonial .description {
        font-size: 15px;
        letter-spacing: 1px;
        color: #6f6f6f;
        line-height: 25px;
        margin-bottom: 15px;
      }
      .testimonial .title {
        display: inline-block;
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #379ad3;
        margin: 0;
      }
      .testimonial .post {
        display: inline-block;
        font-size: 17px;
        color: #379ad3;
        font-style: italic;
      }
      .owl-theme .owl-controls .owl-page span {
        border: 2px solid grey;
        background: #fff !important;
        border-radius: 0 !important;
        opacity: 1;
      }
      .owl-theme .owl-controls .owl-page.active span,
      .owl-theme .owl-controls .owl-page:hover span {
        background: #379ad3 !important;
        border-color: grey;
      }
      @media only screen and (max-width: 767px) {
        .testimonial {
          padding: 20px;
          text-align: center;
        }
        .testimonial .pic {
          display: block;
          position: static;
          margin: 0 auto 15px;
        }
      }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.0/dist/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
      $("[data-fancybox]").fancybox({
        // Options will go here
        buttons: ["close"],
        wheel: false,
        transitionEffect: "slide",
        // thumbs          : false,
        // hash            : false,
        loop: true,
        // keyboard        : true,
        toolbar: false,
        // animationEffect : false,
        // arrows          : true,
        clickContent: false,
      });
    </script>
   
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="#"><img style=" max-width:150px;" src="<? echo base_url().'assets/user_assets/logo/'.$detail['logo_image']; ?>" alt="website logo" class="logo-white" ></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="#" class="active">Welcome</a></li>

            <li><a href="#profile">Profile</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#contact">Contact us</a></li>
            <li><a href="#portfolio">Our Products</a></li>
            <? if($brands['service_display']==1) { ?>
                        <li><a href="#brands" class="nav-link">Brands</a></li> <? } ?>  
            <li><a href="#testimonial">Feedback</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#clients">Rate us</a></li>
          </ul>
          <i class="fa fa-bars mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
 


    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div
        id="heroCarousel"
        data-bs-interval="5000"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div
            class="carousel-item active"
            style="background-image: url(<? echo base_url().'assets/template3/img/slide/slider2-1.jpg'; ?>)"
          >
            <!-- <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">
                  Welcome To the world of comfort “TOPAZ”
                </h2>
                <p class="animate__animated animate__fadeInUp">
                  Manufacturer of All kind of premium and Highend luxurious
                  furnitures
                </p>
                <a
                  href="#about"
                  class="btn-get-started animate__animated animate__fadeInUp scrollto"
                  >Read More</a
                >
              </div> -->
            </div>
          </div>

          <!-- Slide 2 -->
          <div
            class="carousel-item"
            style="background-image: url(<? echo base_url().'assets/template3/img/slide/slider3-1.jpg'; ?>)"
          >
            <div class="carousel-container">
              <!-- <div class="container">
                <h2 class="animate__animated animate__fadeInDown">
                  Manufacturer of All kind of premium and Highend luxurious
                  furnitures
                </h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a
                  href="#about"
                  class="btn-get-started animate__animated animate__fadeInUp scrollto"
                  >Read More</a
                >
              </div> -->
            </div>
          </div>

          <!-- Slide 3 -->
          <div
            class="carousel-item"
            style="background-image: url(<? echo base_url().'assets/template3/img/slide/slider4-1.jpg'; ?>)"
          >
            <div class="carousel-container">
              <!-- <div class="container">
                <h2 class="animate__animated animate__fadeInDown">
                  Welcome To the world of comfort “TOPAZ”
                </h2>
                <p class="animate__animated animate__fadeInUp">
                  Manufacturer of All kind of premium and Highend luxurious
                  furnitures
                </p>
                <a
                  href="#about"
                  class="btn-get-started animate__animated animate__fadeInUp scrollto"
                  >Read More</a
                >
              </div> -->
            </div>
          </div>
        </div>

        <a
          class="carousel-control-prev"
          href="#heroCarousel"
          role="button"
          data-bs-slide="prev"
        >
          <span
            class="carousel-control-prev-icon fa fa-arrow-left"
            aria-hidden="true"
          ></span>
        </a>

        <a
          class="carousel-control-next"
          href="#heroCarousel"
          role="button"
          data-bs-slide="next"
        >
          <span
            class="carousel-control-next-icon fa fa-arrow-right"
            aria-hidden="true"
          ></span>
        </a>
      </div>
    </section>
    <!-- End Hero -->

    <!-- <main id="main"> -->
      <!--==Info== --><br><br>
      <section id="profile" class="services">
        <div class="container">
          <div class="row">
            <!-- Section Title -->
            <div class="section-title item_bottom text-center">
              <div></div>
              <h3 style="font-size:50px;" class="newcl"><? echo $detail['company_name']; ?></h3>
              <h5 style="font-size:25px;" class="newcl"><? echo $detail['owner_name']; ?></h5>
              <!-- <h1>Get in Touch</h1> -->
            </div>
            <!-- End Section Title -->
            <div class="col-md-6">
              <div class="icon-box">
                <i class="fa fa-phone " style="color:<? echo $detail['button_color']; ?>"></i>
                <h4><a href="tel:<? echo $detail['contact_no']; ?>">Call </a></h4>
                <p>+<? echo $detail['contact_no']; ?></p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="fa fa-globe" style="color:<? echo $detail['button_color']; ?>"></i>
                <h4><a href="<? echo $detail['website']; ?>">Website</a></h4>
                <p><? echo $detail['website']; ?></p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="fa fa-whatsapp" style="color:<? echo $detail['button_color']; ?>"></i>
                <h4><a href="https://wa.me/<? echo $detail['contact_no']; ?>?text=<? echo $detail['whatsapp_message']; ?>">Whatsapp</a></h4>
                <p>+<? echo $detail['contact_no']; ?></p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="fa fa-envelope" style="color:<? echo $detail['button_color']; ?>"></i>
                <h4><a href="mailto:<? echo $detail['email']; ?>">Email</a></h4>
                <p><? echo $detail['email']; ?></p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="fa fa-location-arrow" style="color:<? echo $detail['button_color']; ?>"></i>
                <h4>
                  <a href="<? echo $detail['mapurl']; ?>">Location</a>
                </h4>
                <p>
                  <? echo $detail['address']; ?>
                </p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="fa fa-cart-plus" style="color:<? echo $detail['button_color']; ?>"></i>
                <h4><a href="#portfolio">Shop</a></h4>
                <p>Our Products</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->
      <!-- About Section -->
      <section id="about" class="section-content bg1">
        <div class="container">
          <div class="row">
            <!-- Section Title -->
            <div class="section-title item_bottom text-center">
              <div></div>
              <h1 class="newcl">About <span>Me</span></h1>
            </div>
            <!-- End Section Title -->
          </div>
          <div class="row">
            <div class="row featurette">
              <div class="col-md-7 order-md-2">
              <p class="lead" style="font-weight:bold;font-size:20px;"><? echo $detail['est_year']; ?></p>
              <p class="lead" style="font-weight:bold;font-size:20px;"><? echo $detail['business_type']; ?></p>
                  <p class="lead" style="font-weight:bold;font-size:20px;"><? echo $detail['about_title']; ?></p>
                <p
                  class="lead"
                  style="font-weight: 500; font-size: 2rem; text-align: justify"
                >
                <? $me=str_replace(['<p>', '</p>'], '', $detail['about_description']); ?>
                <? echo $me; ?>
                </p>
              </div>
              <div class="col-md-5 order-md-1">
                <img
                  src="<? echo base_url().'assets/user_assets/about/'.$detail['about_image']; ?>"
                  class="img-center img-responsive"
                  alt="My photo"
                />
              </div>
            </div>
            <!-- ./some text about yourself -->
          </div>
        </div>
      </section>
      <!-- End About Section -->
<style>
.sbutton {
 background-color: #E04006;
border-radius: 2px;
box-shadow: 0 3px 0 #9C4015;
color: #FFF;
display: inline-block;
padding: 6px 12px;
position: relative;
top: 20px;
}

.sbutton:hover {
  cursor: pointer;
}

.smenu {
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 3px;
  left: 20px;
  margin: 0;
  opacity: 0;
  padding: 0;
  position: absolute;
  top: 0px;
  -webkit-transition: opacity 0.2s ease-in-out, top 0.2s ease-in-out;
  -moz-transition: opacity 0.2s ease-in-out, top 0.2s ease-in-out;
  transition: opacity 0.2s ease-in-out, top 0.2s ease-in-out;
}

.smenu:after {
  background-color: #FFF;
border-top: 1px solid #CCC;
border-left: 1px solid #CCC;
top: -7px;
content: '';
display: inline-block;
height: 10px;
left: 50px;
position: absolute;
width: 10px;
-webkit-transform: rotate(45deg);
-moz-transform: rotate(45deg);
-ms-transform: rotate(45deg);
transform: rotate(45deg)
}

.smenu li {
  border-bottom: 1px solid #ccc;
  list-style-type: none;
  margin: 0;
  padding: 7px;
  width: 100px;
}

/* .smenu li:hover {
  background-color: #fafafa;
} */

.smenu li:last-child {
  border-bottom: none;
}

.smenu li a {
  color: #E04006;
  text-decoration: none;
}

.smenu li:hover a {
  color:black !important;
}

.smenu.share {
  opacity: 1;
  top: 70px;
}
</style>
      <section id="contact" class="contact">
        <div class="container">
          <!-- Section Title -->
          <div class="section-title item_bottom text-center">
            <div></div>
            <h1 class="newcl">Reach us</h1>
          </div>
          <!-- End Section Title -->
          <div>
          <? echo $detail['maptag']; ?>
            <!-- <iframe
              style="border: 0; width: 100%; height: 270px"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.529447406868!2d72.82141011712373!3d21.171116649860977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f9b1310a85b%3A0x52bf6d272fff2bb1!2sTopaz%20Furniture%20%26%20Decorators!5e0!3m2!1sen!2sin!4v1668423732432!5m2!1sen!2sin"
              frameborder="0"
              allowfullscreen
            ></iframe> -->
          </div>

          <div class="row mt-5">
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="fa fa-location-arrow" style="color:<? echo $detail['button_color']; ?>"></i>
                  <h4>Location:</h4>
                  <p>
                    <? echo $detail['address']; ?>
                  </p>
                </div>

                <div class="email">
                  <i class="fa fa-envelope" style="color:<? echo $detail['button_color']; ?>"></i>
                  <h4>Email:</h4>
                  <p><? echo $detail['email']; ?></p>
                </div>

                <div class="email">
                  <i class="fa fa-clock-o" style="color:<? echo $detail['button_color']; ?>"></i>
                  <h4>Opening Hours:</h4>
                  <p><? echo $detail['opening_hrs']; ?></p>
                </div>

                <div class="phone">
                  <i class="fa fa-phone" style="color:<? echo $detail['button_color']; ?>"></i>
                  <h4>Call:</h4>
                  <? if($detail['contact_no']!="") { ?>
                  <p style="font-weight: bold;">+
                  <? echo $detail['contact_no']; ?>
                  </p>
                  <? } ?>

                  <? if($detail['alternate_contact1']!="") { ?>
                  <p>+
                  <? echo $detail['alternate_contact1']; ?>
                  </p>
                  <? } ?>

                  <? if($detail['alternate_contact2']!="") { ?>
                  <p>+
                  <? echo $detail['alternate_contact2']; ?>
                  </p>
                  <? } ?>

                  <? if($detail['alternate_contact3']!="") { ?>
                  <p>+
                  <? echo $detail['alternate_contact3']; ?>
                  </p>
                  <? } ?>
                </div>
              </div>
            </div>


          <div class="col-lg-8 mt-5 mt-lg-0">
              <form
                action="forms/contact.php"
                method="post"
                role="form"
                class="php-email-form"
              >
                <!-- <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="form-group mt-3">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div> -->
                <div class="text1">
                  <button type="submit" class="newcl2"><span>Social Share<i class="fa fa-arrow-circle-down" style="padding-left: 4px;"></i></span></button>
                      <ul class='smenu'>
                  <? if($detail['facebook']!="") { ?><li><a href="<? echo $detail['facebook']; ?>">Facebook</a></li><? } ?>
                  <? if($detail['instagram']!="") { ?><li><a href="<? echo $detail['instagram']; ?>">Instagram</a></li><? } ?>
                  <? if($detail['linkedin']!="") { ?><li><a href="<? echo $detail['linkedin']; ?>">LinkedIn</a></li><? } ?>
                  <? if($detail['twitter']!="") { ?><li><a href="<? echo $detail['twitter']; ?>">Twitter</a></li><? } ?>
                      </ul>
                </div>
                <script>
                $('.text1').on('click', function(event) {
  event.preventDefault();
  
  $('.smenu').toggleClass('share');
});
                </script>
                <div>
                  
                  <button class="newcl2" onclick="window.location='<? echo site_url().'vcard_front/vcard_generate/'.$detail['user_id']; ?>'">Add To Contact</button>
                </div>
                
                <div class="text">
                  <a href="https://wa.me/?text=See%20My%20Website"><button onclick="window.location.href='https://wa.me/?text=See%20My%20Website';" class="newcl2">Share On Whatsapp</button></a>
                </div>
                </form>
            </div>
            

            <!-- <div class="col-lg-8 mt-5 mt-lg-0">
              <form
                action="forms/contact.php"
                method="post"
                role="form"
                class="php-email-form"
              >
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="form-group mt-3">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit">Send Message</button>
                </div>
              </form>
            </div> -->
          </div>
        </div>
      </section>
      <!-- End Contact Section -->


<style>
    .wrapper1 {
    /* margin: 100px auto; */
    max-width: 1100px;
    }
    .wrapper1 nav {
    display: flex;
    justify-content: center;
    }
    .wrapper1 .items1 {
    display: flex;
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
        .gallery123 {
        display: flex;
        flex-wrap: wrap;
        margin-top: 30px;
        }
        .gallery123 .image1 {
        width: calc(100% / 4);
        padding: 7px;
        }
        .gallery123 .image1 span {
        display: flex;
        width: 100%;
        overflow: hidden;
        }
        .gallery123.image1 img {
        width: 100%;
        vertical-align: middle;
        transition: all 0.3s ease;
        }
        .gallery123 .image1:hover img {
        transform: scale(1.1);
        }
        .gallery123 .image1.hide {
        display: none;
        }
        .gallery123 .image1.show {
        animation: animate 0.4s ease;
        }
        @media (max-width: 1000px) {
        .gallery123 .image1 {
            width: calc(100% / 3);
        }
        }
        @media (max-width: 800px) {
        .gallery123 .image1 {
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
</style>
      <!-- ======= Portfolio Section ======= -->
      <section
        id="portfolio"
        class="portfolio"
        
      >
        <div class="container">
          <div class="row">
            <!-- Section Title -->
            <div class="section-title item_bottom text-center">
              <div></div>
              <h1 style="color:<? echo $detail['button_color']; ?>">Our <span>Products</span></h1>
            </div>
            <!-- End Section Title -->
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters"></ul>
            </div>
          </div>

          <div class="wrapper1">
                <nav>
                <div class="items1">
                    <span   class="item1 active" data-name="all">All</span>
                    <? $arr=array();
                    $test=rtrim($product['product_category'],",");
                    $arr=explode(",",$test);
                     ?>
                    <? foreach($arr as $procat)  {?>
                    <span  class="item1" data-name="<? echo $procat; ?>"><? echo $procat; ?></span>
                    <? } ?>
                </div>
                   </nav>

          </div>



          <div class="row portfolio-container gallery123">
            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat1']; ?>" >
              <div class="portfolio-wrap nnew" data-name="<? echo $product['product_cat1']; ?>">
                <img height="720" width="360" src="<? echo base_url().'assets/user_assets/product/'.$product['product_image1']; ?>" class="img-fluid" alt="" />
                <a href=""><i class="fa fa-whatsapp" style="color:<? echo $detail['button_color']; ?>"></i></a>
                <div class="portfolio-info ">
                  <div class="portfolio-links nnew" data-name="<? echo $product['product_cat1']; ?>">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image1']; ?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="App 1"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name1']; ?></a
                    >
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat2']; ?>">
              <div class="portfolio-wrap">
                <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image2']; ?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image2']; ?>"
                      class="portfolio-details-lightbox"
                      data-glightbox="type: external"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name2']; ?>
                    </a>
                    -->
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat3']; ?>">
              <div class="portfolio-wrap">
                <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image3']; ?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image3']; ?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name3']; ?></a
                    >
                 
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat4']; ?>">
              <div class="portfolio-wrap">
                <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image4']; ?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image4']; ?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name4']; ?></a
                    >
                   
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat5']; ?>">
              <div class="portfolio-wrap">
                <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image5']; ?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image5']; ?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name5']; ?></a
                    >
                   
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat6']; ?>">
              <div class="portfolio-wrap">
                <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image6']; ?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image6']; ?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name6']; ?></a
                    >
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat7']; ?>">
              <div class="portfolio-wrap">
                <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image7']; ?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image7']; ?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name7']; ?></a
                    >
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat8']; ?>">
              <div class="portfolio-wrap">
                <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image8']; ?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image8']; ?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name8']; ?></a
                    >
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat9']; ?>">
              <div class="portfolio-wrap">
                <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image9']; ?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image9']; ?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name9']; ?></a
                    >
                   
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat10']; ?>">
              <div class="portfolio-wrap">
                <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image10']; ?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image10']; ?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name10']; ?></a
                    >
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat11']; ?>">
              <div class="portfolio-wrap">
                <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image11']; ?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image11']; ?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name11']; ?></a
                    >
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card nnew" data-name="<? echo $product['product_cat12']; ?>">
              <div class="portfolio-wrap">
                <img src="<? echo base_url().'assets/user_assets/product/'.$product['product_image12']; ?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a
                      href="<? echo base_url().'assets/user_assets/product/'.$product['product_image12']; ?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      style="color: rgba(255, 255, 255)"
                      ><? echo $product['product_name12']; ?></a
                    >
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

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
            color:white;
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
    <!-- Brands Section -->
    <section
        id="brands"
        class="portfolio"
        style="background-image: url(<? echo base_url().'assets/template3/img/Unimg1.jpg'; ?>)"
      >
        <div class="container">
          <div class="row">
            <!-- Section Title -->
            <div class="section-title item_bottom text-center">
              <div></div>
              <h1 style="color:white">Our <span>Brands</span></h1>
            </div>
            <!-- End Section Title -->
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters"></ul>
            </div>
          </div>

          <div class="row portfolio-container">
          <? if($brands['service_name1']!="") { ?>
            <div class="container123">
                    <h3 class="title123"><? echo $brands['service_name1']; ?></h3>
                    <div class="content123">
                        <!-- <a href="" target="_blank"> -->
                            <div class="content-overlay123"></div>
                            <img class="content-image123" width="720"  height="360" src="<? echo base_url().'assets/user_assets/service/'.$brands['service_image1']; ?>" alt="">
                            <div class="content-details123 fadeIn-top123 fadeIn-right123">
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
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
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
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
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
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
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
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
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
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
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
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
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
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
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
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
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
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
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
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
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
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
                                <!-- <h3>This is a title</h3>
                                <p>This is a short description</p> -->
                            </div>
                        <!-- </a> -->
                    </div>
             </div>
             <? } ?>
          </div>
        </div>
      </section>
    <!-- End of the section -->






      <!-- ======= Testimonials Section ======= -->
      <section class="testimonial" id="testimonial">
        <div class="container">
          <div class="row">
            <!-- Section Title -->
            <div class="section-title item_bottom text-center">
              <div></div>
              <h1 style="color:<? echo $detail['button_color']; ?>">Testimonials</h1>
            </div>
            <!-- End Section Title -->
            <div class="col-md-12">
              <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                  <div class="pic">
                    <img
                      src="<? echo base_url().'assets/user_assets/testimonial/'.$testimonial['testimonial_image1']; ?>"
                    />
                  </div>
                  <p class="description">
                    <? echo $testimonial['testimonial_description1']; ?>
                  </p>
                  <h3 class="title"><? echo $testimonial['testimonial_name1']; ?></h3>
                </div>

                <div class="testimonial">
                  <div class="pic">
                    <img
                      src="<? echo base_url().'assets/user_assets/testimonial/'.$testimonial['testimonial_image2']; ?>"
                    />
                  </div>
                  <p class="description">
                  <? echo $testimonial['testimonial_description2']; ?>
                  </p>
                  <h3 class="title"><? echo $testimonial['testimonial_name2']; ?></h3>
                </div>

                <!-- <div class="testimonial">
                  <div class="pic">
                    <img
                      src="https://images.pexels.com/photos/531139/pexels-photo-531139.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"
                    />
                  </div>
                  <p class="description">
                    The main factor why i always prefer this store for furniture
                    because from normal salesperson to owner. Everyone attend
                    the clients very politely. They understand the need and the
                    taste of clients. I like one sofa over there but it couldn't
                    fit in my space.
                  </p>
                  <h3 class="title">Avina Agrawal</h3>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!--======gallery=====-->

      <section class="gallery" id="gallery">
        <div class="header">
          <h1 style="color:<? echo $detail['button_color']; ?>">GALLERY</h1>
        </div>
        <div id="gallerys">
          <img src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image1']; ?>" data-fancybox="group" />

          <img width="360px" height="360px" src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image2']; ?>" data-fancybox="group" />
          <img width="360px" height="360px"src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image3']; ?>" data-fancybox="group" />
          <img width="360px" height="360px"src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image4']; ?>" data-fancybox="group" />
          <img width="360px" height="360px"src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image5']; ?>" data-fancybox="group" />
          <img width="360px" height="360px"src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image6']; ?>" data-fancybox="group" />
          <img width="360px" height="360px"src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image7']; ?>" data-fancybox="group" />
          <img width="360px" height="360px"src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image8']; ?>" data-fancybox="group" />
          <img width="360px" height="360px"src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image9']; ?>" data-fancybox="group" />
          <img width="360px" height="360px"src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image10']; ?>" data-fancybox="group" />
          <img width="360px" height="360px"src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image11']; ?>" data-fancybox="group" />
          <img width="360px" height="360px"src="<? echo base_url().'assets/user_assets/galleryF/'.$gallery['gallery_image12']; ?>" data-fancybox="group" />
        </div>
      </section>
      <!--=====Rate us====== -->
      <section
        id="clients"
        class="our-work-area"
        style="
          padding-top: 30px;
          padding-bottom: 20px;
          background-image: url(<? echo base_url().'assets/template3/img/Unimg2.jpg'; ?>);
        "
      >
        <div class="container">
          <div class="row">
            <!-- Section Title -->
            <div class="section-title item_bottom text-center">
              <div></div>
              <h1 style="color: white">Rate us</h1>
            </div>
            <!-- End Section Title -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div
                class="single-work"
                style="margin-bottom: 10px; text-align: center"
              >
                <div class="single-work123">
                  <img
                    src="<? echo base_url().'assets/user_assets/qrcode/'.$detail['qrimage']; ?>"
                    alt=""
                    style="height: 300px"
                  />
                </div>
                <button>
                  <a href="<? echo base_url().'assets/user_assets/qrcode/'.$detail['qrimage']; ?>" download="<? echo $detail['company_name']; ?>" style="color: white; font-weight: 800"
                    >Download QR</a
                  >
                </button>
                <div class="work-hover">
                  <a
                    download="<? echo $detail['company_name']; ?>"
                    href="<? echo base_url().'assets/user_assets/qrcode/'.$detail['qrimage']; ?>"
                  ></a>
                </div>
              </div>
            </div>
            <!-- /.end single work column -->

            <!-- <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="purchase-text">
                <a
                  class="btn btn-medium btn-greenish"
                  download="Topaz Furniture"
                  href="assets/img/topaz-furniture.png"
                  >Download QR <i class="fa fa-long-arrow-right"></i
                ></a>
              </div>
              <!-- /.end purchase-text -->
            <!--</div> -->
            <!-- /.end single work column -->
          </div>
        </div>
      </section>
      <!-- /.end our-work-area -->

      <section
        id="price"
        class="our-work-area"
        style="padding-top: 30px; padding-bottom: 60px"
      >
        <div class="container">
          <style>
            .a-color-black .btn-greenish {
              background-color: #000;
              color: #fff;
            }

            .a-color-black .btn-greenish:hover {
              background-color: #379ad3;
              color: #fff;
            }
          </style>
          <div class="row">
            <div
              class="col-md-12 col-sm-12 col-xs-12"
              style="text-align: center"
            >
              <div
                class="purchase-text"
                style="margin-top: 0px; margin-bottom: 0px"
              >
                <div class="a-color-black">
                  <a
                    style="padding: 8px 85px; font-size: initial"
                    target="_blank"
                    href="https://www.icedinfotech.com/"
                    class="btn btn-medium btn-greenish"
                    >@icedinfotech.com <i class=""></i
                  ></a>
                </div>
              </div>
              <!-- /.end purchase-text -->
            </div>
            <!-- /.end single work column -->
          </div>
        </div>
      </section>

      <!--======Rate us section end =====-->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span><? echo $detail['company_name']; ?></span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
          Designed by <a href="https://www.icedinfotech.com/">ICED Infotech</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="fa fa-arrow-up"></i
    ></a>

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
                    <img src="<? echo base_url().'assets/user_assets/popup/'.$detail['popup_image']; ?>" alt="">

                </div>
            </div>
        </div>
    </div>
    <script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>



    <!-- Vendor JS Files -->
    <script src="<? echo base_url().'assets/template3/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template3/vendor/glightbox/js/glightbox.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template3/vendor/isotope-layout/isotope.pkgd.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template3/vendor/swiper/swiper-bundle.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template3/vendor/waypoints/noframework.waypoints.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template3/vendor/php-email-form/validate.js'; ?>"></script>

    <!-- Template Main JS File -->
    <script src="<? echo base_url().'assets/template3/js/main.js'; ?>"></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.12.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
    ></script>

    <script>
      $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
          items: 2,
          itemsDesktop: [1000, 2],
          itemsDesktopSmall: [990, 2],
          itemsTablet: [768, 1],
          pagination: true,
          navigation: false,
          navigationText: ["", ""],
          slideSpeed: 1000,
          autoPlay: true,
        });
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
