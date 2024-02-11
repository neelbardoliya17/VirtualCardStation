<?php
if (!isset($_SESSION['user'])) {
    echo "not logged in";
    redirect('admin/index', 'refresh');
}
if ($_SESSION['id'] != $userid) {
    echo "not logged in";
    redirect('admin/index', 'refresh');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
    /* Font */
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}


.main{
  max-width: 1200px;
  margin: 0 auto;
}

h5 {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}
.btn:hover {
  background-color: rgba(255, 255, 255, 0.12);
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
  
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }

}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #2980B9 40%, #6DD5FA 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}

/* for dropify reponsiveness */
@media only screen and (device-width:240px) 
{
  .dropify-preview
  {
    width:100px !important;
  }
}
@media only screen and (device-width:280px) 
{
  .dropify-preview
  {
    width:100px !important;
  }
}
@media screen and (min-device-width:300px) and (max-device-width:320px)
{
  .dropify-preview
  {
    width:150px !important;
  }
}
@media screen and (min-device-width:321px) and (max-device-width:480px)
{
  .dropify-preview
  {
    width:212px !important;
  }
}
@media screen and (min-device-width:481px) and (max-device-width:768px)
{
  .dropify-preview
  {
    width:250px !important;
  }
}
@media screen and (min-device-width:1025px) and (max-device-width:1200px)
{
  .dropify-preview
  {
    width:400px !important;
  }
}
    @media screen and (min-width: 768px) { /* apply styles only for screens larger than 768px wide */
      .newww {
        height: 275px; /* set the height to 400px */
      }
      .newww img {
        height: 100%; /* set the height of the image to 100% of its container 
      }
    }
    
    @media screen and (max-width: 767px) { /* apply styles only for screens smaller than 768px wide */
      .newww {
        height: auto; /* reset the height to auto */
      }
      .newww img {
        height: auto; /* reset the height of the image to auto */
        max-width: 100%; /* set the max width to 100% to make the image responsive */
      }
    }

</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Admin</title>
    <link href="<?php echo base_url('assets/admin_assets/css/custom.css')  ?>" rel="stylesheet" type="text/css" />
    <!--dropify -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin_assets/dropify/dropify.min.css')  ?>" />
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin_assets/vendors/mdi/css/materialdesignicons.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin_assets/vendors/base/vendor.bundle.base.css'; ?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css'; ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin_assets/css/style.css'; ?>">
    <!-- endinject -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url().'assets/user_assets/favicon/favicon633320.png'; ?>" />
</head>

<body>
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Any Problem With the card then contact us</p>
              <!-- <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a> -->
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
          <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
        <?php include_once('menu.php'); ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex align-items-end flex-wrap">
                                <div class="me-md-3 me-xl-5">
                                    <!--<h2>Welcome back,</h2>-->
                                    <!--<p class="mb-md-0">Your digital card dashboards</p>-->
                                </div>
                                <!-- <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                  </div> -->
                            </div>
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <!-- <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button> -->
                                <!--<button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body dashboard-tabs p-0">
                                <ul class="nav nav-tabs px-4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link <?php if ($this->uri->segment(2)=='product') {
                                                                echo "active";
                                                            } ?>" id="overview-tab" href="<?php echo base_url().'index.php/Admin/product/'.$userid; ?>">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ">|</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link <?php if ($this->uri->segment(2)=='brands') {
                                                                echo "active";
                                                            } ?>" href="#">Brands</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ">|</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link <?php if ($this->uri->segment(2)=='gallery') {
                                                                echo "active";
                                                            } ?>" href="<?php echo base_url().'index.php/Admin/gallery/'.$userid; ?>" role="tab">Gallery</a>
                                    </li>
                                    <!-- <li class="nav-item">
                    <a class="nav-link" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab"
                        aria-controls="overview" aria-selected="false">|</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab"
                        aria-controls="purchases" aria-selected="false">Brands Deatail</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab"
                        aria-controls="overview" aria-selected="false">|</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab"
                        aria-controls="purchases" aria-selected="false">Service Deatail</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab"
                        aria-controls="overview" aria-selected="false">|</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab"
                        aria-controls="purchases" aria-selected="false">Gallery</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab"
                        aria-controls="overview" aria-selected="false">|</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab"
                        aria-controls="purchases" aria-selected="false">Testimonial</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab"
                        aria-controls="overview" aria-selected="false">|</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab"
                        aria-controls="purchases" aria-selected="false">Contact Details</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab"
                        aria-controls="overview" aria-selected="false">|</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab"
                        aria-controls="purchases" aria-selected="false">Other</a>
                    </li> -->
                                    <!-- <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab"
                        aria-controls="overview" aria-selected="true">Overview</a>
                    </li> -->
                                    <!-- <li class="nav-item">
                      <a class="nav-link" id="sales-tab" data-bs-toggle="tab" href="#sales" role="tab"
                        aria-controls="sales" aria-selected="false">Sales</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab"
                        aria-controls="purchases" aria-selected="false">Purchases</a>
                    </li> -->
                                </ul>
                                <div class="tab-content py-0 px-0">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                        <div class="d-flex flex-wrap justify-content-xl-between">
                                            <!-- <div
                          class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>
                            <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                <a class="dropdown-item" href="#">12 Aug 2018</a>
                                <a class="dropdown-item" href="#">22 Sep 2018</a>
                                <a class="dropdown-item" href="#">21 Oct 2018</a>
                              </div>
                            </div>
                          </div>
                        </div> -->
                                            <!-- <div
                          class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenue</small>
                            <h5 class="me-2 mb-0">$577545</h5>
                          </div>
                        </div> -->
                                            <!-- <div
                          class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="me-2 mb-0">9833550</h5>
                          </div>
                        </div> -->
                                            <!-- <div
                          class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="me-2 mb-0">2233783</h5>
                          </div>
                        </div> -->
                                            <!-- <div
                          class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag me-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="me-2 mb-0">3497843</h5>
                          </div>
                        </div> -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                                        <div class="d-flex flex-wrap justify-content-xl-between">


                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                                        <div class="d-flex flex-wrap justify-content-xl-between">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Cash deposits</p>
                  <p class="mb-4">To start a blog, think of a topic about and first brainstorm party is ways to write
                    details</p>
                  <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                  <canvas id="cash-deposits-chart"></canvas>
                </div>
              </div>
            </div> -->
                    <!-- <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Total sales</p>
                  <h1>$ 28835</h1>
                  <h4>Gross sales over the years</h4>
                  <p class="text-muted">Today, many people rely on computers to do homework, work, and create or store
                    useful information. Therefore, it is important </p>
                  <div id="total-sales-chart-legend"></div>
                </div>
                <canvas id="total-sales-chart"></canvas>
              </div>
            </div> -->
                </div>
                <a href="<?php echo base_url().'index.php/admin/product/'.$userid; ?>"><button type="button" onclick="" class="btn btn-secondary ">Back</button>
                    <a href="<?php echo base_url().'index.php/admin/gallery/'.$userid; ?>"><button type="button" style="float:right;" class="btn btn-primary">Skip</button></a><br><br>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                        <label class="form-label" for="basic-icon-default-message" style="margin-top:10px;margin-left:20px;">Display</label><br>
                        <label class="switch" style="margin-left:20px;"><input type="checkbox" name="chk" <?php if($brands['service_display']==1){ ?> checked
                            <?php } ?> /><div></div>
                        </label>
                        <input type="submit" style="margin-left:20px;margin-bottom:20px;" class="btn btn-outline-primary" name="checkk" />
                        <div class="row">

                            <div class="col-md-12 stretch-card">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- <p class="card-title">Recent Purchases</p> -->
                                        <h4 class="card-title">Brand Detail Form</h4>
                                        <!-- <p class="card-description">
                    Basic form layout
                  </p> -->

                                        <div class="form-group">
                                            <input type="hidden" required name="userid" class="form-control" id="exampleInputUsername1" placeholder="Company Name" value="<?php echo $userid; ?>">
                                        </div>

                                        <div class="main">
                                            <h5>(Image Must be 720 X 720 Dimension)(1MB Max)</h5>
                                            <ul class="cards">
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage1" value="<?php echo $brands['service_image1']; ?>" />
                                                    <div class="card_image"> 
                                                    
                                                    <?php if($brands['service_image1']!="")
                                                              { ?>
                                                              <div class="newww"> 
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image1']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                                       </div>
                                                                      
                                                    <?php } else { ?>
                                                    <input style="" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" type="file" id="service_image1" class="dropify" name="service_image1"  />
                                                    <?php } ?>
                                                   
                                                    </div>
                                                    <div class="card_content">
                                                        <?php if($brands['service_image1']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image1/'.$brands['service_image1']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname1" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name1']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
                                                    <!-- <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage2" value="<?php echo $brands['service_image2']; ?>" />
                                                    <div class="card_image">
                                                         
                                                        <?php if($brands['service_image2']!="")
                                                              { ?>
                                                              <div class="newww">
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image2']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                                   </div>   
                                                    <?php } else { ?>
                                                        <input type="file" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" id="service_image2" name="service_image2" class="dropify"  />
                                                    <?php } ?>
                                                    
                                                    </div>
                                                    <div class="card_content">
                                                         <?php if($brands['service_image2']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image2/'.$brands['service_image2']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname2" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name2']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                                                    <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage3" value="<?php echo $brands['service_image3']; ?>" />
                                                    <div class="card_image">
                                                   
                                                    <?php if($brands['service_image3']!="")
                                                              { ?>
                                                               <div class="newww">
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image3']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                                      </div>
                                                    <?php } else { ?> 
                                                    <input type="file" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" id="service_image3" name="service_image3" class="dropify"  />
                                                    <?php } ?>
                                                    
                                                    </div>
                                                    <div class="card_content">
                                                         <?php if($brands['service_image3']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image3/'.$brands['service_image3']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname3" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name3']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                                                    <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage4" value="<?php echo $brands['service_image4']; ?>" />
                                                    <div class="card_image">
                                                    
                                                    <?php if($brands['service_image4']!="")
                                                              { ?>
                                                              <div class="newww">
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image4']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                                </div>      
                                                    <?php } else { ?>     
                                                    <input type="file" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" id="service_image4" name="service_image4" class="dropify"  />
                                                    <?php } ?>
                                                    
                                                    </div>
                                                    <div class="card_content">
                                                         <?php if($brands['service_image4']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image4/'.$brands['service_image4']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname4" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name4']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                                                    <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage5" value="<?php echo $brands['service_image5']; ?>" />
                                                    <div class="card_image">
                                                        
                                                    <?php if($brands['service_image5']!="")
                                                              { ?>
                                                              <div class="newww">
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image5']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                                </div>      
                                                    <?php } else { ?>
                                                        <input type="file" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" id="service_image5" name="service_image5" class="dropify"  />
                                                    <?php } ?>
                                                    
                                                    </div>
                                                    <div class="card_content">
                                                        <?php if($brands['service_image5']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image5/'.$brands['service_image5']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname5" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name5']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                                                    <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage6" value="<?php echo $brands['service_image6']; ?>" />
                                                    <div class="card_image"> 
                                                    
                                                    <?php if($brands['service_image6']!="")
                                                              { ?>
                                                              <div class="newww">
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image6']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                                </div>      
                                                    <?php } else { ?>
                                                    <input type="file" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" id="service_image6" name="service_image6" class="dropify"  />
                                                    <?php } ?>
                                                    
                                                    </div>
                                                    <div class="card_content">
                                                        <?php if($brands['service_image6']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image6/'.$brands['service_image6']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname6" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name6']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                                                    <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage7" value="<?php echo $brands['service_image7']; ?>" />
                                                    <div class="card_image"> 
                                                    
                                                    <?php if($brands['service_image7']!="")
                                                              { ?>
                                                              <div class="newww">
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image7']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                               </div>       
                                                    <?php } else { ?>
                                                    <input type="file" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" id="service_image7" name="service_image7" class="dropify"  />
                                                    <?php } ?>
                                                    
                                                    </div>
                                                    <div class="card_content">
                                                        <?php if($brands['service_image7']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image7/'.$brands['service_image7']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname7" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name7']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                                                    <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage8" value="<?php echo $brands['service_image8']; ?>" />
                                                    <div class="card_image">
                                                        
                                                    <?php if($brands['service_image8']!="")
                                                              { ?>
                                                              <div class="newww">
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image8']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                                </div>      
                                                    <?php } else { ?>
                                                        <input type="file" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" id="service_image8" name="service_image8" class="dropify"  />
                                                    <?php } ?>
                                                    
                                                    </div>
                                                    <div class="card_content">
                                                        <?php if($brands['service_image8']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image8/'.$brands['service_image8']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname8" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name8']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                                                    <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage9" value="<?php echo $brands['service_image9']; ?>" />
                                                    <div class="card_image">
                                                       
                                                    <?php if($brands['service_image9']!="")
                                                              { ?>
                                                               <div class="newww">
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image9']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                                </div>      
                                                    <?php } else { ?>
                                                        <input type="file" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" id="service_image9" name="service_image9" class="dropify"  />
                                                    <?php } ?>
                                                    
                                                    </div>
                                                    <div class="card_content">
                                                        <?php if($brands['service_image9']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image9/'.$brands['service_image9']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname9" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name9']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                                                    <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage10" value="<?php echo $brands['service_image10']; ?>" />
                                                    <div class="card_image"> 
                                                    
                                                    <?php if($brands['service_image10']!="")
                                                              { ?>
                                                              <div class="newww">
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image10']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                                </div>      
                                                    <?php } else { ?>
                                                    <input type="file" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" id="service_image10" name="service_image10" class="dropify"  />
                                                    <?php } ?>
                                                    
                                                    </div>
                                                    <div class="card_content">
                                                        <?php if($brands['service_image10']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image10/'.$brands['service_image10']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname10" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name10']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                                                    <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage11" value="<?php echo $brands['service_image11']; ?>" />
                                                    <div class="card_image">
                                                    
                                                    <?php if($brands['service_image11']!="")
                                                              { ?>
                                                              <div class="newww">
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image11']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                                </div>      
                                                    <?php } else { ?>
                                                        <input type="file" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" id="service_image11" name="service_image11" class="dropify"  />
                                                    <?php } ?>
                                                    
                                                    </div>
                                                    <div class="card_content">
                                                        <?php if($brands['service_image11']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image11/'.$brands['service_image11']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname11" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name11']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                                                    <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                                <li class="cards_item">
                                                <div class="card">
                                                <input type="hidden" name="bimage12" value="<?php echo $brands['service_image12']; ?>" />
                                                    <div class="card_image">
                                                    
                                                    <?php if($brands['service_image12']!="")
                                                              { ?>
                                                              <div class="newww">
                                                                      <img  src="<?php echo base_url() . 'assets/user_assets/service/' . $brands['service_image12']; ?>" />
                                                                      <br>
                                                                      <br> 
                                                                </div>     
                                                    <?php } else { ?>
                                                        <input type="file" data-allowed-file-extensions="png jpg jpeg  webp" data-max-file-size="1M" id="service_image12" name="service_image12" class="dropify"  />
                                                    <?php } ?>
                                                    
                                                    </div>
                                                    <div class="card_content">
                                                        <?php if($brands['service_image12']!="")
                                                              { ?>
                                                        <a href="<?php echo base_url().'admin/editPageBrands/'.$userid.'/service/service_image12/'.$brands['service_image12']; ?>" style="
                                                                      margin-top:10px;
                                                                      padding: 5px 10px;
                                                                      background-color:#dc143c;
                                                                      color: #fff;
                                                                      text-decoration: none;
                                                                      border-radius: 5px;">Edit Image</a><br><br><?php } ?>
                                                    <h2 class="card_title"><input type="text" name="bname12" class="form-control" id="exampleInputUsername1" placeholder="Brand Name" value="<?php echo $brands['service_name12']; ?>"></h2>
                                                    <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                                                    <button class="btn card_btn">Read More</button> -->
                                                    </div>
                                                </div>
                                                </li>
                                            </ul>
                                        </div>
                         
                                                                                                                                     
                                        <div class="form-group">
                                        </div>
                                        <button type="submit" name="addbrand" class="btn btn-primary me-2">Next</button>
                                        <!-- <button class="btn btn-light">Cancel</button> -->
                    </form>
                    <!-- <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Status report</th>
                          <th>Office</th>
                          <th>Price</th>
                          <th>Date</th>
                          <th>Gross amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jeremy Ortega</td>
                          <td>Levelled up</td>
                          <td>Catalinaborough</td>
                          <td>$790</td>
                          <td>06 Jan 2018</td>
                          <td>$2274253</td>
                        </tr>
                        <tr>
                          <td>Alvin Fisher</td>
                          <td>Ui design completed</td>
                          <td>East Mayra</td>
                          <td>$23230</td>
                          <td>18 Jul 2018</td>
                          <td>$83127</td>
                        </tr>
                        <tr>
                          <td>Emily Cunningham</td>
                          <td>support</td>
                          <td>Makennaton</td>
                          <td>$939</td>
                          <td>16 Jul 2018</td>
                          <td>$29177</td>
                        </tr>
                        <tr>
                          <td>Minnie Farmer</td>
                          <td>support</td>
                          <td>Agustinaborough</td>
                          <td>$30</td>
                          <td>30 Apr 2018</td>
                          <td>$44617</td>
                        </tr>
                        <tr>
                          <td>Betty Hunt</td>
                          <td>Ui design not completed</td>
                          <td>Lake Sandrafort</td>
                          <td>$571</td>
                          <td>25 Jun 2018</td>
                          <td>$78952</td>
                        </tr>
                        <tr>
                          <td>Myrtie Lambert</td>
                          <td>Ui design completed</td>
                          <td>Cassinbury</td>
                          <td>$36</td>
                          <td>05 Nov 2018</td>
                          <td>$36422</td>
                        </tr>
                        <tr>
                          <td>Jacob Kennedy</td>
                          <td>New project</td>
                          <td>Cletaborough</td>
                          <td>$314</td>
                          <td>12 Jul 2018</td>
                          <td>$34167</td>
                        </tr>
                        <tr>
                          <td>Ernest Wade</td>
                          <td>Levelled up</td>
                          <td>West Fidelmouth</td>
                          <td>$484</td>
                          <td>08 Sep 2018</td>
                          <td>$50862</td>
                        </tr>
                      </tbody>
                    </table>
                  </div> -->
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="#" target="_blank">Virtual Card Station</a>2024</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">For Best Digital Card Contact <a href="#" target="_blank">Virtual Card Station</a>
                    </span>
                </div>
    </footer>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha512-egJ/Y+22P9NQ9aIyVCh0VCOsfydyn8eNmqBy+y2CnJG+fpRIxXMS6jbWP8tVKp0jp+NO5n8WtMUAnNnGoJKi4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- dropify -->
    <script src="<?php echo base_url('assets/admin_assets/dropify/vendor.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin_assets/dropify/dropify.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin_assets/dropify/form-fileupload.init.js'); ?>"></script>

    <!-- plugins:js -->
    <script src="<?php echo base_url().'assets/admin_assets/vendors/base/vendor.bundle.base.js'; ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="<?php echo base_url().'assets/admin_assets/vendors/chart.js/Chart.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/admin_assets/vendors/datatables.net/jquery.dataTables.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js'; ?>">
    </script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?php echo base_url().'assets/admin_assets/js/off-canvas.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/admin_assets/js/hoverable-collapse.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/admin_assets/js/template.js'; ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?php echo base_url().'assets/admin_assets/js/dashboard.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/admin_assets/js/data-table.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/admin_assets/js/jquery.dataTables.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/admin_assets/js/dataTables.bootstrap4.js'; ?>"></script>
    <!-- End custom js for this page-->

    <script src="<?php echo base_url().'assets/admin_assets/js/jquery.cookie.js'; ?>" type="text/javascript"></script>
</body>

</html>