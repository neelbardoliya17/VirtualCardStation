<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><? echo $detail['company_name']; ?></title>
    <link
      rel="icon"
      href="<? echo base_url().'assets/template4/images/sm-logo.svg'; ?> "
      type="image/gif"
      sizes="20x20"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://demo-egenslab.b-cdn.net/html/xoon/preview/assets/fonts/bootstrap-icons.woff"
    />
    <link
      rel="stylesheet"
      href="https://demo-egenslab.b-cdn.net/html/xoon/preview/assets/fonts/boxicons.woff2"
    />
    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/animate.css'; ?>" />

    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/all.css'; ?>" />

    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/bootstrap.min.css'; ?>" />

    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/boxicons.min.css'; ?>" />

    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/bootstrap-icons.css'; ?>" />

    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/jquery-ui.css'; ?>" />
    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/jquery.fancybox.min.css'; ?>" />

    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/swiper-bundle.min.css'; ?>" />

    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/slick-theme.css'; ?>" />
    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/slick.css'; ?>" />

    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/nice-select.css'; ?>" />

    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/magnific-popup.css'; ?>" />

    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/odometer.css'; ?>" />
    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/custom-video-player.css'; ?>" />

    <link rel="stylesheet" href="<? echo base_url().'assets/template4/css/style.css'; ?>" />
    <style>
      .headings {
        text-align: center;
        font-family: var(--font-cormorant);
        font-weight: 600;
        font-size: 45px;
        line-height: 60px;
        text-transform: uppercase;
        color: #fa6350;
        margin-bottom: 20px;
      }
      input {
        border: 1px solid #fa6350;
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
  <body
    id="body"
    class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor"
  >
    <div class="preloader">
      <div class="counter">0</div>
    </div>

    <div id="magic-cursor">
      <div id="ball"></div>
    </div>
    <div class="tt-style-switch index-dark">
      <i class="bi bi-brightness-low-fill"></i>
    </div>
    <div id="smooth-wrapper">
      <div id="smooth-content">
        <div class="circle-container">
          <svg
            class="circle-progress svg-content"
            width="100%"
            height="100%"
            viewBox="-1 -1 102 102"
          >
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
          </svg>
        </div>
        <!--====================Header Section==================-->
        <header class="header-area style-1 header-transparent">
          <div class="header-logo">
            <a href="index.html"
              ><img alt="image" src="<? echo base_url().'assets/user_assets/logo/'.$detail['logo_image']; ?>"
            /></a>
          </div>
          <div class="main-menu">
            <div
              class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center"
            >
              <div class="mobile-logo-wrap">
                <a href="index.html"
                  ><img alt="image" src="<? echo base_url().'assets/user_assets/logo/'.$detail['logo_image']; ?>"
                /></a>
              </div>
            </div>
            <ul class="menu-list">
              <li class="menu-item-has-children">
                <a href="#" class="btn--primary1">Home</a>
              </li>
              <li class="menu-item-has-children">
                <a href="#about" class="btn--primary1">About</a>
              </li>
              <li class="menu-item-has-children">
                <a href="#profile" class="btn--primary1">Profile</a>
              </li>
              <li class="menu-item-has-children">
                <a href="#product" class="btn--primary1">Products</a>
              </li>
              <li class="menu-item-has-children">
                <a href="#contact" class="btn--primary1">Contact us</a>
              </li>
              <li class="menu-item-has-children">
                <a href="#gallery" class="btn--primary1">Gallery</a>
              </li>
              <li class="menu-item-has-children">
                <a href="#feedback" class="btn--primary1">Feedback</a>
              </li>
              <li class="menu-item-has-children">
                <a href="#rateus" class="btn--primary1">Rate us</a>
              </li>
            </ul>
          </div>
          <div class="nav-right d-flex align-items-center">
            <div class="side-icon">
              <svg
                width="30"
                height="30"
                viewBox="0 0 30 30"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0.421875 5.12308C0.134766 5.30769 0 5.58462 0 5.99077C0 6.39692 0.146484 6.67385 0.46875 6.87077L0.673828 7H15H29.3262L29.5312 6.87077C29.8535 6.67385 30 6.39692 30 5.99077C30 5.58462 29.8652 5.30769 29.5781 5.12308C29.3848 5 29.25 5 15 5C0.75 5 0.615234 5 0.421875 5.12308Z"
                />
                <path
                  d="M0.421875 14.125C0.140625 14.3125 0 14.5938 0 15C0 15.4062 0.140625 15.6875 0.421875 15.875C0.615234 16 0.75 16 15 16C29.25 16 29.3848 16 29.5781 15.875C29.8594 15.6875 30 15.4062 30 15C30 14.5938 29.8594 14.3125 29.5781 14.125C29.3848 14 29.25 14 15 14C0.75 14 0.615234 14 0.421875 14.125Z"
                />
                <path
                  d="M0.723529 23.0428C0.252941 23.159 0 23.5015 0 24.0214C0 24.419 0.141176 24.6942 0.423529 24.8777C0.611765 25 0.735294 25 8 25C15.2647 25 15.3882 25 15.5765 24.8777C15.8647 24.6942 16 24.419 16 24.0153C16 23.6116 15.8529 23.3364 15.5294 23.1407C15.3235 23.0122 15.2706 23.0122 8.11765 23C4.15294 23 0.823529 23.0122 0.723529 23.0428Z"
                />
              </svg>
            </div>
          </div>
        </header>
        <!--===============Header section end===================-->
        <!--=====================Navbar=====================-->
        <div class="main-nav-wrapper">
          <div class="main-nav">
            <div class="menu-close-btn" id="menu-close-btn">
              <i class="fa fa-2x"></i>
            </div>
            <div
              class="mobile-logo-area d-flex justify-content-start align-items-center"
            >
              <div class="header-logo">
                <a href="#"
                  ><img
                    alt="image"
                    class="img-fluid"
                    src="<? echo base_url().'assets/user_assets/logo/'.$detail['logo_image']; ?>"
                /></a>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row align-items-center">
                <div class="col-lg-6 px-0">
                  <div class="sidebar-menu-area">
                    <ul class="menu-list">
                      <li class="menu-item-has-children menu-item">
                        <a href="#" class="drop-down" data-hover="Home">Home</a>
                      </li>
                      <li class="menu-item-has-children menu-item">
                        <a href="#about" class="drop-down" data-hover="About"
                          >About</a
                        ><i class="bi bi-plus-lg dropdown-icon"></i>
                      </li>
                      <li class="menu-item-has-children menu-item">
                        <a href="#profile" data-hover="Profile">Profile</a>
                      </li>
                      <li class="menu-item-has-children menu-item">
                        <a href="#contact" data-hover="Contact">Contact</a>
                      </li>
                      <li class="menu-item-has-children menu-item">
                        <a
                          href="#product"
                          class="drop-down"
                          data-hover="Products"
                        >
                          Products</a
                        >
                      </li>
                      <li class="menu-item-has-children menu-item">
                        <a
                          href="#feedback"
                          class="drop-down"
                          data-hover="Feedback"
                        >
                          Feedback
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-6">
                  <ul class="nav-contact-list">
                    <li class="citem">
                      <h6><i class="bi bi-phone"></i> PHONE:</h6>
                      <a href="tel:+919687810000">+919687810000</a> <br />
                      <a href="tel:+919687850000">+919687850000</a>
                    </li>
                    <li class="citem">
                      <h6><i class="fa fa-location-arrow"></i> ADDRESS:</h6>
                      <p>
                        Kamla - 1st Floor, Beside Bhatar Flyover, Opp. Surya
                        Plaza, Udhna Magdalla Rd, Near Sosyo circle, opp
                        shanidev mandir,U.M road, Surat - 395007, Gujarat, India
                      </p>
                    </li>
                    <li class="citem">
                      <h6><i class="bi bi-mailbox"></i> E-mail</h6>
                      <a
                        href="/cdn-cgi/l/email-protection#bcd9c4ddd1ccd0d9fcdbd1ddd5d092dfd3d1"
                        ><span
                          class="__cf_email__"
                          data-cfemail="75100d1418051910351218141c195b161a18"
                          >topazfurniture@gmail.com</span
                        ></a
                      >
                    </li>
                    <li class="citem">
                      <h6>FOLLOW US:</h6>
                      <ul class="social-icon">
                        <li>
                          <a href="https://www.dribbble.com/"
                            ><i class="bi bi-youtube"></i
                          ></a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/"
                            ><i class="bi bi-instagram"></i
                          ></a>
                        </li>
                        <li>
                          <a href="https://www.twitter.com/"
                            ><i class="bi bi-twitter"></i
                          ></a>
                        </li>
                        <li>
                          <a href="https://www.behance.com/"
                            ><i class="bi bi-linkedin"></i
                          ></a>
                        </li>
                        <li>
                          <a href="https://www.facebook.com/"
                            ><i class="bi bi-facebook"></i
                          ></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <span></span>
          </div>
        </div>
        <!--=================Nav bar end=====================-->
        <!--===========Slider Section==============-->

        <div class="banner-fullscreen-section">
          <div class="container-fluid">
            <div class="row">
              <div class="swiper banner-fullscreen-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<? echo base_url().'assets/user_assets/slider/'.$detail['slider_image1']; ?>" alt="image" />
                    <div class="banner-pagination-content style-two">
                      <!-- <span>Topaz - Furniture</span>
                      <h2>Welcome To the world of comfort “TOPAZ”</h2> -->
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <img src="<? echo base_url().'assets/user_assets/slider/'.$detail['slider_image2']; ?>" alt="image" />
                    <div class="banner-pagination-content style-two">
                      <!-- <span>Topaz - Furniture</span>
                      <h2>
                        Manufacturer of All kind of premium and Highend
                        luxurious furnitures
                      </h2> -->
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <img src="<? echo base_url().'assets/template4/img/slide/slider5.webp'; ?>" alt="image" />
                    <div class="banner-pagination-content style-two">
                      <!-- <span>Topaz - Furniture</span>
                      <h2>
                        Manufacturer of All kind of premium and Highend
                        luxurious furnitures
                      </h2> -->
                    </div>
                  </div>
                </div>
                <div
                  class="slider-arrows fullscreen-arrows d-flex flex-row flex-wrap justify-content-between align-items-center gap-5"
                >
                  <div
                    class="banner-full-prev1 swiper-prev-arrow"
                    tabindex="0"
                    role="button"
                    aria-label="Previous slide"
                  >
                    <svg
                      width="32"
                      height="8"
                      viewBox="0 0 32 8"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M31 3.5C31.2761 3.5 31.5 3.72386 31.5 4C31.5 4.27614 31.2761 4.5 31 4.5V3.5ZM0.646444 4.35355C0.451183 4.15829 0.451183 3.84171 0.646444 3.64645L3.82842 0.464466C4.02369 0.269204 4.34027 0.269204 4.53553 0.464466C4.73079 0.659728 4.73079 0.976311 4.53553 1.17157L1.70711 4L4.53553 6.82843C4.73079 7.02369 4.73079 7.34027 4.53553 7.53553C4.34027 7.7308 4.02369 7.7308 3.82842 7.53553L0.646444 4.35355ZM31 4.5L0.999998 4.5V3.5L31 3.5V4.5Z"
                      />
                    </svg>
                  </div>
                  <div
                    class="banner-full-next1 swiper-next-arrow"
                    tabindex="0"
                    role="button"
                    aria-label="Next slide"
                  >
                    <svg
                      width="32"
                      height="8"
                      viewBox="0 0 32 8"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5V3.5ZM31.3536 4.35355C31.5488 4.15829 31.5488 3.84171 31.3536 3.64645L28.1716 0.464466C27.9763 0.269204 27.6597 0.269204 27.4645 0.464466C27.2692 0.659728 27.2692 0.976311 27.4645 1.17157L30.2929 4L27.4645 6.82843C27.2692 7.02369 27.2692 7.34027 27.4645 7.53553C27.6597 7.7308 27.9763 7.7308 28.1716 7.53553L31.3536 4.35355ZM1 4.5L31 4.5V3.5L1 3.5V4.5Z"
                      />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--================slider end=============-->
        <!--===============About section===================-->
        <div class="about-style-1 pt-120 mb-120" id="about">
          <div class="container">
            <div class="row mb-60">
              <div class="col-12">
                <div class="section-title1">
                <h3 style="font-weight:bold"><? echo $detail['company_name']; ?></h3>
                <h4 style="font-weight:bold"><? echo $detail['owner_name']; ?></h4>
                  <br><br><h6>About Us</h6>
                  <h3>
                    <? echo $detail['about_title'] ?>
                  </h3>
                </div>
              </div>
            </div>
            <div class="row mb-70">
              <div class="col-md-3 d-flex justify-content-center">
                <div class="about-img1">
                  <!-- <img
                    class="img-fluid magnetic-item"
                    src="<? echo base_url().'assets/template4/img/about/about2.jpg'; ?>"
                    alt="image"
                  /> -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-img2">
                  <img
                    class="img-fluid magnetic-item"
                    src="<? echo base_url().'assets/template4/img/about/about.jpg'; ?>"
                    alt="image"
                  />
                </div>
              </div>
              <!-- <div class="col-md-3 d-flex justify-content-end align-items-end">
                <div class="about-img3">
                  <img
                    class="img-fluid magnetic-item"
                    src="<? echo base_url().'assets/template4/img/about/about3.jpg'; ?>"
                    alt="image"
                  />
                </div>
              </div> -->
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="about-content">
                  <p>
                    <? echo $detail['about_description']; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--===============About section end================-->
        <!--====================Services===============-->

        <div class="services-area mb-120" id="profile">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 px-0">
                <div class="services-border">
                  <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 col-md-10">
                      <div class="services-content">
                        <div class="section-title1 mb--40">
                          <span style="color: #fa6350"
                            >We are Always Available for You</span
                          >
                          <h2 style="color: black">Get In touch</h2>
                          <!-- <p>We are Always available For you.</p> -->
                        </div>
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button
                              class="nav-link services-items active"
                              id="pills-photography-tab"
                              data-bs-toggle="pill"
                              data-bs-target="#pills-photography"
                              type="button"
                              role="tab"
                              aria-controls="pills-photography"
                              aria-selected="true"
                            >
                              <a href="tel:<? echo $detail['contact_no']; ?>" target="_blank">
                                <img src="<? echo base_url().'assets/template4/img/icon/telephone.png'; ?>" />
                              </a>
                            </button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button
                              class="nav-link services-items"
                              id="pills-videography-tab"
                              data-bs-toggle="pill"
                              data-bs-target="#pills-videography"
                              type="button"
                              role="tab"
                              aria-controls="pills-videography"
                              aria-selected="false"
                            >
                              <a
                                href="mailto:<? echo $detail['email']; ?>"
                                target="_blank"
                              >
                                <img src="<? echo base_url().'assets/template4/img/icon/envelope.png'; ?>" />
                              </a>
                            </button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button
                              class="nav-link services-items"
                              id="pills-wedding-tab"
                              data-bs-toggle="pill"
                              data-bs-target="#pills-wedding"
                              type="button"
                              role="tab"
                              aria-controls="pills-wedding"
                              aria-selected="false"
                            >
                              <a
                                href="<? echo $detail['mapurl']; ?>"
                                target="_blank"
                              >
                                <img src="<? echo base_url().'assets/template4/img/icon/GPS.png'; ?>" />
                              </a>
                            </button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button
                              class="nav-link services-items"
                              id="pills-aerial-tab"
                              data-bs-toggle="pill"
                              data-bs-target="#pills-aerial"
                              type="button"
                              role="tab"
                              aria-controls="pills-aerial"
                              aria-selected="false"
                            >
                              <a
                                target="_blank"
                                href="https://wa.me/<? echo $detail['contact_no']; ?>?text =<? $detail['whatsapp_message']; ?>"
                              >
                                <img src="<? echo base_url().'assets/template4/img/icon/whatsapp.png'; ?>" />
                              </a>
                            </button>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-10">
                      <div class="tab-content" id="pills-tabContent">
                        <div
                          class="tab-pane fade show active"
                          id="pills-photography"
                          role="tabpanel"
                          aria-labelledby="pills-photography-tab"
                        >
                          <div class="swiper services-slider">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    src="<? echo base_url().'assets/template4/img/service/ser1.jpg'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    src="<? echo base_url().'assets/template4/img/service/ser2.jpg'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    src="<? echo base_url().'assets/template4/img/service/ser3.jpg'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                            </div>
                            <div class="swiper-pagination"></div>
                          </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="pills-videography"
                          role="tabpanel"
                          aria-labelledby="pills-videography-tab"
                        >
                          <div class="swiper services-slider">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/videography11.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/videography12.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/videography13.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                            </div>
                            <div class="swiper-pagination"></div>
                          </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="pills-wedding"
                          role="tabpanel"
                          aria-labelledby="pills-wedding-tab"
                        >
                          <div class="swiper services-slider">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/wedding11.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/wedding12.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/wedding13.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                            </div>
                            <div class="swiper-pagination"></div>
                          </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="pills-aerial"
                          role="tabpanel"
                          aria-labelledby="pills-aerial-tab"
                        >
                          <div class="swiper services-slider">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/aerial11.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/aerial12.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/aerial13.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                            </div>
                            <div class="swiper-pagination"></div>
                          </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="pills-fashion"
                          role="tabpanel"
                          aria-labelledby="pills-fashion-tab"
                        >
                          <div class="swiper services-slider">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/fashion11.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/fashion12.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                              <div class="swiper-slide">
                                <a
                                  class="magnetic-item"
                                  href="services-details.html"
                                  ><img
                                    class="img-fluid anim-image-parallax tt-lazy"
                                    data-cursor="View<br>Services"
                                    src="<? echo base_url().'assets/template4/images/bg/fashion13.png'; ?>"
                                    alt="image"
                                /></a>
                              </div>
                            </div>
                            <div class="swiper-pagination"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=================service end=================-->
        <!--=============Product section===========-->

        <div class="photo-gallery mb-120" id="product">
          <div class="container">
            <div class="row mb-70">
              <div class="col-12">
                <div class="section-title1 text-center">
                  <h2>See All Our Products</h2>
                  <!-- <p>
                    As Vintage decided to have a closer look into fast-paced New
                    York web design realm in.
                  </p> -->
                </div>
              </div>
            </div>
            <div class="row g-4 justify-content-center mb-50">
              <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-img one magnetic-item">
                  <img
                    class="img-fluid"
                    src="<? echo base_url().'assets/template4/img/product/product1.jpg'; ?>"
                    alt="image"
                  />
                  <div class="overlay">
                    <!-- <a
                      data-cursor="View<br>Details"
                      class="magnetic-item"
                      href="portfolio-details.html"
                    >
                      <svg
                        width="114"
                        height="105"
                        viewBox="0 0 114 105"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8.7 104L113 1M113 1H1M113 1V104"
                          stroke-width="2"
                          stroke-linecap="round"
                        />
                      </svg>
                    </a> -->
                    <div class="gallery-content">
                      <h4>
                        <a
                          data-cursor="View<br>Details"
                          class="not-hide-cursor"
                          href="portfolio-details.html"
                        ></a
                        >Table
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-img two magnetic-item">
                  <img
                    class="img-fluid"
                    src="<? echo base_url().'assets/template4/img/product/product2.jpg'; ?>"
                    alt="image"
                  />
                  <div class="overlay">
                    <!-- <a
                      data-cursor="View<br>Details"
                      href="portfolio-details.html"
                    >
                      <svg
                        width="114"
                        height="105"
                        viewBox="0 0 114 105"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8.7 104L113 1M113 1H1M113 1V104"
                          stroke-width="2"
                          stroke-linecap="round"
                        />
                      </svg>
                    </a> -->
                    <div class="gallery-content">
                      <h4>
                        <a
                          class="not-hide-cursor"
                          data-cursor="View<br>Details"
                          href="portfolio-details.html"
                          >Sofa Chair</a
                        >
                      </h4>
                      <!-- <span>Date: 16 January 2022</span> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-img three magnetic-item">
                  <img
                    class="img-fluid"
                    src="<? echo base_url().'assets/template4/img/product/product3.jpg'; ?>"
                    alt="image"
                  />
                  <div class="overlay">
                    <!-- <a
                      data-cursor="View<br>Details"
                      href="portfolio-details.html"
                    >
                      <svg
                        width="114"
                        height="105"
                        viewBox="0 0 114 105"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8.7 104L113 1M113 1H1M113 1V104"
                          stroke-width="2"
                          stroke-linecap="round"
                        />
                      </svg>
                    </a> -->
                    <div class="gallery-content">
                      <h4>
                        <a
                          class="not-hide-cursor"
                          data-cursor="View<br>Details"
                          href="portfolio-details.html"
                          >Table</a
                        >
                      </h4>
                      <!-- <span>Date: 16 January 2022</span> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-img four magnetic-item">
                  <img
                    class="img-fluid"
                    src="<? echo base_url().'assets/template4/img/product/product4.jpg'; ?>"
                    alt="image"
                  />
                  <div class="overlay">
                    <!-- <a
                      data-cursor="View<br>Details"
                      href="portfolio-details.html"
                    >
                      <svg
                        width="114"
                        height="105"
                        viewBox="0 0 114 105"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8.7 104L113 1M113 1H1M113 1V104"
                          stroke-width="2"
                          stroke-linecap="round"
                        />
                      </svg>
                    </a> -->
                    <div class="gallery-content">
                      <h4>
                        <a
                          class="not-hide-cursor"
                          data-cursor="View<br>Details"
                          href="#"
                          >Sofa Chair</a
                        >
                      </h4>
                      <!-- <span>Date: 16 January 2022</span> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-img five magnetic-item">
                  <img
                    class="img-fluid"
                    src="<? echo base_url().'assets/template4/img/product/product5.jpg'; ?>"
                    alt="image"
                  />
                  <div class="overlay">
                    <!-- <a
                      data-cursor="View<br>Details"
                      href="portfolio-details.html"
                    >
                      <svg
                        width="114"
                        height="105"
                        viewBox="0 0 114 105"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8.7 104L113 1M113 1H1M113 1V104"
                          stroke-width="2"
                          stroke-linecap="round"
                        />
                      </svg>
                    </a> -->
                    <div class="gallery-content">
                      <h4>
                        <a
                          class="not-hide-cursor"
                          data-cursor="View<br>Details"
                          href="portfolio-details.html"
                          >Table</a
                        >
                      </h4>
                      <!-- <span>Date: 16 January 2022</span> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-img six magnetic-item">
                  <img
                    class="img-fluid"
                    src="<? echo base_url().'assets/template4/img/product/product6.jpg'; ?>"
                    alt="image"
                  />
                  <div class="overlay">
                    <!-- <a
                      data-cursor="View<br>Details"
                      href="portfolio-details.html"
                    >
                      <svg
                        width="114"
                        height="105"
                        viewBox="0 0 114 105"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8.7 104L113 1M113 1H1M113 1V104"
                          stroke-width="2"
                          stroke-linecap="round"
                        />
                      </svg>
                    </a> -->
                    <div class="gallery-content">
                      <h4>
                        <a
                          class="not-hide-cursor"
                          data-cursor="View<br>Details"
                          href="portfolio-details.html"
                          >Designer Chair</a
                        >
                      </h4>
                      <!-- <span>Date: 16 January 2022</span> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--===========Product section end==========-->
        <!--================Video section============-->

        <!-- <div class="video-area one mb-120">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="video-wraper">
                  <video autoplay loop="loop" muted preload="auto">
                    <source src="assets/images/video-3.mp4" type="video/mp4" />
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!--================video section end================-->
        <!--=============Testimonials section ==============-->
        <div class="headings">What People says</div>
        <div class="testimonial-area mb-120" id="feedback">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="swiper services-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="testimonial-wrrap">
                        <div class="content">
                          <p>
                            We bought dream home in cream area. off course
                            living room is most important of home bcs it's a
                            first impression. For buy sofa and dinning table I
                            was very confused.
                          </p>
                        </div>
                        <div class="author-area">
                          <div class="author-name">
                            <h4>Isha Thakur</h4>
                          </div>
                          <!-- <div class="author-img">
                            <img src="assets/images/author-1.png" alt="image" />
                          </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-wrrap">
                        <div class="content">
                          <p>
                            Amazing Collection. Loved the customer service. Got
                            8 Seater Dinning Table for my house. Perfect
                            finishing 👌😍
                          </p>
                        </div>
                        <div class="author-area mb-50">
                          <div class="author-name">
                            <h4>Rai Bajaj</h4>
                          </div>
                          <!-- <div class="author-img">
                            <img src="assets/images/author-2.png" alt="image" />
                          </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-wrrap">
                        <div class="content">
                          <p>
                            The main factor why i always prefer this store for
                            furniture because from normal salesperson to owner.
                            Everyone attend the clients very politely. They
                            understand the need and the taste of clients.
                          </p>
                        </div>
                        <div class="author-area">
                          <div class="author-name">
                            <h4>Avina Agrawal</h4>
                          </div>
                          <!-- <div class="author-img">
                            <img src="assets/images/author-3.png" alt="image" />
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=============testimonials section end==============-->

        <!-- <div class="pricing-plan-area mb-120">
          <div class="container">
            <div class="row mb-70">
              <div class="col-12">
                <div class="section-title1 text-center">
                  <h2>Pricing plan</h2>
                  <p>
                    As Vintage decided to have a closer look into fast-paced New
                    York web design realm in.
                  </p>
                </div>
              </div>
            </div>
            <div class="row g-4 justify-content-center">
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="pricing-wrap">
                  <div class="top-bg">
                    <img src="assets/images/icons/price-bg1.svg" alt="image" />
                  </div>
                  <div class="btm-bg">
                    <img src="assets/images/icons/price-bg2.svg" alt="image" />
                  </div>
                  <div class="pricing-title">
                    <h2>Weadding</h2>
                    <h5 class="price">$300</h5>
                  </div>
                  <ul class="pricing-features">
                    <li>200 Personal Photograph.</li>
                    <li>5 Hour To 8 Hour Duration.</li>
                    <li>10 Fresh Edited cool Video.</li>
                    <li>20 Printed & Hard Copy.</li>
                    <li>Digital Unique Album.</li>
                  </ul>
                  <div class="book-btn">
                    <a href="contact-us.html">Book Now</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="pricing-wrap">
                  <div class="top-bg">
                    <img src="assets/images/icons/price-bg1.svg" alt="image" />
                  </div>
                  <div class="btm-bg">
                    <img src="assets/images/icons/price-bg2.svg" alt="image" />
                  </div>
                  <div class="pricing-title">
                    <h2>Photography</h2>
                    <h5 class="price">$200</h5>
                  </div>
                  <ul class="pricing-features">
                    <li>200 Personal Photograph.</li>
                    <li>5 Hour To 8 Hour Duration.</li>
                    <li>10 Fresh Edited cool Video.</li>
                    <li>20 Printed & Hard Copy.</li>
                    <li>Digital Unique Album.</li>
                  </ul>
                  <div class="book-btn">
                    <a href="contact-us.html">Book Now</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="pricing-wrap">
                  <div class="top-bg">
                    <img src="assets/images/icons/price-bg1.svg" alt="image" />
                  </div>
                  <div class="btm-bg">
                    <img src="assets/images/icons/price-bg2.svg" alt="image" />
                  </div>
                  <div class="pricing-title">
                    <h2>Videography</h2>
                    <h5 class="price">$350</h5>
                  </div>
                  <ul class="pricing-features">
                    <li>200 Personal Photograph.</li>
                    <li>5 Hour To 8 Hour Duration.</li>
                    <li>10 Fresh Edited cool Video.</li>
                    <li>20 Printed & Hard Copy.</li>
                    <li>Digital Unique Album.</li>
                  </ul>
                  <div class="book-btn">
                    <a href="contact-us.html">Book Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!--==============News section ================-->
        <div class="news-area mb-120">
          <div class="container">
            <div class="row mb-70">
              <div class="col-12">
                <div class="section-title1 text-center">
                  <h2>Our Videos</h2>
                  <!-- <p>
                    As Vintage decided to have a closer look into fast-paced New
                    York web design realm in.
                  </p> -->
                </div>
              </div>
            </div>
            <div class="row g-4 justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-10">
                <!-- <div class="single-news magnetic-item"> -->
                <a href="">
                  <iframe
                    width="350"
                    height="450"
                    src="https://www.youtube.com/embed/2dyGLM_BMa4"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe
                ></a>
                <div class="overlay">
                  <div class="gallery-content"></div>
                </div>
                <!-- </div> -->
              </div>
              <div class="col-lg-4 col-md-6 col-sm-10">
                <a href="https://www.youtube.com/embed/debBvDnXR5g">
                  <iframe
                    width="350"
                    height="450"
                    src="https://www.youtube.com/embed/debBvDnXR5g"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe
                ></a>

                <div class="overlay">
                  <div class="gallery-content"></div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-10">
                <!-- <div class="single-news magnetic-item"> -->
                <a href="">
                  <iframe
                    width="350"
                    height="450"
                    src="https://www.youtube.com/embed/b5_Yz2eTljg"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe
                ></a>
                <div class="overlay">
                  <div class="gallery-content"></div>
                </div>
                <!-- </div> -->
              </div>
            </div>
          </div>
        </div>
        <!--===============news section end===================-->

        <div class="home1-booking-area mb-120" id="contact">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="booking-wraper">
                  <div class="row">
                    <div class="col-12">
                      <div class="section-title1 text-center">
                        <h2>Contact us</h2>
                      </div>
                    </div>
                  </div>
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-inner">
                          <label>Your Name (required)</label>
                          <input type="text" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-inner">
                          <label>Your Phone (required)</label>
                          <input type="number" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-inner">
                          <label>Your E-mail (required)</label>
                          <input type="email" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-inner date">
                          <label>Booking Date</label>
                          <input
                            autocomplete="off"
                            placeholder=""
                            type="text"
                            name="checkIn"
                            id="datepicker"
                            class="claender"
                          />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-inner">
                          <label>Type Your Message</label>
                          <textarea></textarea>
                        </div>
                      </div>
                      <div
                        class="col-md-12 d-flex justify-content-center pt-20"
                      >
                        <div class="form-inner send-btn">
                          <button
                            class="primary-btn3 button-hover-two"
                            type="submit"
                          >
                            Send Now
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=============News section end=============-->
        <!--===============Social media section ==============-->
        <div class="headings">Gallery</div>
        <div class="instagram-feed-section mb-120" id="gallery">
          <div class="container">
            <div class="row justify-content-lg-start justify-content-center">
              <div class="col-lg-4"></div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="swiper insta-feed-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="insta-feed-single magnetic-item">
                    <img
                      data-fancybox="group"
                      class="img-fluid"
                      src="<? echo base_url().'assets/template4/img/gallery/gallery.jpg'; ?>"
                      alt="image"
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="insta-feed-single magnetic-item">
                    <img
                      data-fancybox="group"
                      class="img-fluid"
                      src="<? echo base_url().'assets/template4/img/gallery/gallery1.jpg'; ?>"
                      alt="image"
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="insta-feed-single magnetic-item">
                    <img
                      data-fancybox="group"
                      class="img-fluid"
                      src="<? echo base_url().'assets/template4/img/gallery/gallery2.jpg'; ?>"
                      alt="image"
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="insta-feed-single magnetic-item">
                    <img
                      data-fancybox="group"
                      class="img-fluid"
                      src="<? echo base_url().'assets/template4/img/gallery/gallery3.jpg'; ?>"
                      alt="image"
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="insta-feed-single magnetic-item">
                    <img
                      data-fancybox="group"
                      class="img-fluid"
                      src="<? echo base_url().'assets/template4/img/gallery/gallery4.jpg'; ?>"
                      alt="image"
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="insta-feed-single magnetic-item">
                    <img
                      data-fancybox="group"
                      class="img-fluid"
                      src="<? echo base_url().'assets/template4/img/gallery/gallery5.jpg'; ?>"
                      alt="image"
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="insta-feed-single magnetic-item">
                    <img
                      data-fancybox="group"
                      class="img-fluid"
                      src="<? echo base_url().'assets/template4/img/gallery/gallery6.jpg'; ?>"
                      alt="image"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--==============Social media section end===============-->
        <!--==========Footer============-->
        <footer class="style1">
          <!-- <div class="footer-top">
            <div class="container-fluid">
              <div class="row mb-120 justify-content-center g-4">
                <div
                  class="col-xl-4 col-lg-6 justify-content-lg-start justify-content-center"
                > -->
          <!-- <div class="footer-widget one">
                    <div class="widget-title">
                      <h4>USEFUL LINKS</h4>
                    </div>
                    <div class="menu-container">
                      <ul>
                        <li><a href="about-me.html">About Xoon</a></li>
                        <li><a href="#">Our History</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="portfolio.html">Portfolio 01</a></li>
                      </ul>
                      <ul>
                        <li><a href="#">Video</a></li>
                        <li><a href="#">Our Achieve</a></li>
                        <li><a href="#">How We Work</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                      </ul>
                    </div>
                  </div> 
                </div>-->
          <!-- <div class="col-xl-4 col-lg-6">
                  <div class="footer-widget two three">
                    <div class="widget-title">
                      <h4>Newsletter</h4>
                      <p>
                        Subscribe to our Newsletter to receive exclusive offers,
                        latest news and updates.
                      </p>
                    </div>
                    <div class="newsletter-container">
                      <input type="text" placeholder="Enter your Email" />
                      <button type="submit" class="button-hover-two">
                        SEND
                      </button>
                    </div>
                  </div>
                </div> -->
          <!-- <div class="col-xl-4 col-lg-10">
                  <div class="footer-widget">
                    <div class="widget-title">
                      <h4>Follow Us</h4>
                    </div>
                    <div class="socila-container">
                      <ul>
                        <li>
                          <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="bx bxl-pinterest-alt"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="bx bxl-facebook"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="bx bxl-twitter"></i></a>
                        </li>
                      </ul>
                    </div>
                    <p>
                      The perfect place for telling & sharing all the stories
                      that truly matter.
                    </p>
                  </div>
                </div> -->
          <!-- </div>
            </div>
          </div> -->
          <div class="footer-btm d-flex justify-content-center">
            <p>
              Copyright 2022
              <a href="javascript:void(0)">Topaz - Furniture</a> <br><br><br>
              Design By
              <a href="https://www.icedinfotech.com/" target="_blank"
                >  ICED Infotech</a
              >
            </p>
          </div>
        </footer>
        <!--===========Footer end============-->
      </div>
    </div>

    <script
      data-cfasync="false"
      src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="<? echo base_url().'assets/template4/js/jquery-3.6.0.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/jquery-ui.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/bootstrap.bundle.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/wow.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/swiper-bundle.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/jquery.nice-select.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4assets/js/odometer.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/jquery.fancybox.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/isotope.pkgd.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/viewport.jquery.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/jquery.magnific-popup.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/gsap.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/SmoothScroll.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/scrollToPlugin'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/sidebar.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/simpleParallax.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/simpleParallax.min.js'; ?>"></script>
    <script src="<? echo base_url().'assets/template4/js/main.js'; ?>"></script>
  </body>
</html>
