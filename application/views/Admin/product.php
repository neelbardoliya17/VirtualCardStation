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
        .card12 {
            border: 1px solid black;
            border-radius: 20px;
            background-color: #00528a;
            color: white;
            padding: 1rem;
            height: 30rem;
            
        }

        .cards {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-gap: 1rem;
        }

        /* Screen larger than 600px? 2 column */
        @media (min-width: 600px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Screen larger than 900px? 3 columns */
        @media (min-width: 900px) {
            .cards {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Admin</title>
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
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free customer support, updates, and more with
                this Card!</p>
              <!-- <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a> -->
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <!-- <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/"><i
                class="mdi mdi-home me-3 text-white"></i></a> -->
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
                                    <h2>Welcome back,
                                       
                                    </h2>
                                    <p class="mb-md-0">Your digital card dashboards</p>
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
                                <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
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
                                                            } ?>" id="overview-tab" data-bs-toggle="tab" href="#" role="tab" aria-controls="overview" aria-selected="false">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ">|</a>
                                    </li>
                                    <li class="nav-item <?php if ($this->uri->segment(2)=='brands') {
                                                                echo "active";
                                                            } ?>">
                                        <a class="nav-link" href="<?php echo base_url().'index.php/Admin/brands/'.$userid; ?>">Brands</a>
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
                <a href="<?php echo base_url().'index.php/admin/theme/'.$userid; ?>"><button type="button" onclick="" class="btn btn-secondary ">Back</button>
                    <a href="<?php echo base_url().'index.php/admin/brands/'.$userid; ?>"><button type="button" style="float:right;" class="btn btn-primary">Skip</button></a><br><br>
                    <div class="row">
                        <div class="col-md-12 stretch-card">
                            <div class="card">
                                <div class="card-body">

                                    <!-- <p class="card-title">Recent Purchases</p> -->
                                    <h4 class="card-title">Product Detail Form</h4>
                                    <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                                        <input type="hidden" required name="userid" class="form-control" id="exampleInputUsername1" placeholder="Company Name" value="<?php echo $userid; ?>">
                                        <input type="hidden" name="catttt" value="<?php echo $product['product_category']; ?>" />
                                        <div class="cards">
                                            <div class="card12">
                                                 <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    1
                                                </h4>
                                            </div>
                                            
                                            
                                            
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    1
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage1" value="<?php echo $product['product_image1'] ?>" />
                                                    <div class="">
                                                        <input type="file" id="pimg1" name="pimg1" class="dropify" data-default-file="<?php if ($product['product_image1'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image1'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname1" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name1']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat1" id="category" autocomplete="off" value="<?php echo $product['product_cat1']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>


                                            </div>
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    2
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage2" value="<?php echo $product['product_image2'] ?>" />
                                                    <div class="">
                                                        <input type="file" id="pimg2" name="pimg2" class="dropify" data-default-file="<?php if ($product['product_image2'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image2'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname2" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name2']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat2" id="category" autocomplete="off" value="<?php echo $product['product_cat2']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    3
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage3" value="<?php echo $product['product_image3'] ?>" />
                                                    <div class="">
                                                        <input type="file" id="pimg3" name="pimg3" class="dropify" data-default-file="<?php if ($product['product_image3'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image3'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname3" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name3']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat3" id="category" autocomplete="off" value="<?php echo $product['product_cat3']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    4
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage4" value="<?php echo $product['product_image4'] ?>" />
                                                    <div class="">
                                                        <input type="file" id="pimg4" name="pimg4" class="dropify" data-default-file="<?php if ($product['product_image4'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image4'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname4" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name4']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat4" id="category" autocomplete="off" value="<?php echo $product['product_cat4']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    5
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage5" value="<?php echo $product['product_image5'] ?>" />
                                                    <div class="">
                                                        <input data-max-height="50" type="file" id="pimg5" name="pimg5" class="dropify" data-default-file="<?php if ($product['product_image5'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image5'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname5" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name5']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat5" id="category" autocomplete="off" value="<?php echo $product['product_cat5']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    6
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage6" value="<?php echo $product['product_image6'] ?>" />
                                                    <div class="">
                                                        <input type="file" id="pimg6" name="pimg6" class="dropify" data-default-file="<?php if ($product['product_image6'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image6'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname6" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name6']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat6" id="category" autocomplete="off" value="<?php echo $product['product_cat6']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    7
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage7" value="<?php echo $product['product_image7'] ?>" />
                                                    <div class="">
                                                        <input type="file" id="pimg7" name="pimg7" class="dropify" data-default-file="<?php if ($product['product_image7'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image7'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname7" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name7']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat7" id="category" autocomplete="off" value="<?php echo $product['product_cat7']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    8
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage8" value="<?php echo $product['product_image8'] ?>" />
                                                    <div class="">
                                                        <input type="file" id="pimg8" name="pimg8" class="dropify" data-default-file="<?php if ($product['product_image8'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image8'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname8" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name8']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat8" id="category" autocomplete="off" value="<?php echo $product['product_cat8']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    9
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage9" value="<?php echo $product['product_image9'] ?>" />
                                                    <div class="">
                                                        <input type="file" id="pimg9" name="pimg9" class="dropify" data-default-file="<?php if ($product['product_image9'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image9'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname9" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name9']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat9" id="category" autocomplete="off" value="<?php echo $product['product_cat9']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    10
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage10" value="<?php echo $product['product_image10'] ?>" />
                                                    <div class="">
                                                        <input type="file" id="pimg10" name="pimg10" class="dropify" data-default-file="<?php if ($product['product_image10'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image10'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname10" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name10']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat10" id="category" autocomplete="off" value="<?php echo $product['product_cat10']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    11
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage11" value="<?php echo $product['product_image11'] ?>" />
                                                    <div class="">
                                                        <input type="file" id="pimg11" name="pimg11" class="dropify" data-default-file="<?php if ($product['product_image11'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image11'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname11" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name11']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat11" id="category" autocomplete="off" value="<?php echo $product['product_cat11']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="card12">
                                                <h4 style="background-color:white;padding:5px;text-align:center;color:black">Product
                                                    12
                                                </h4>
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-icon-default-message">Product
                                                        Image<br>(1080 X 1080)</label>
                                                    <input type="hidden" name="productimage12" value="<?php echo $product['product_image12'] ?>" />
                                                    <div class="">
                                                        <input type="file" id="pimg12" name="pimg12" class="dropify" data-default-file="<?php if ($product['product_image12'] != '') {
                                                                                echo base_url() . 'assets/user_assets/product/' . $product['product_image12'];
                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="exampleInputUsername1">Product Name*</label> -->
                                                    <input type="text" name="pname12" class="form-control" id="exampleInputUsername1" placeholder="Product Name" value="<?php echo $product['product_name12']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="categories">Select Category</label>
                                                    <?php $data=array();
                                                $data['catt']=explode(",",$product['product_category']);
                                                 ?>
                                                    <input type="text" inputmode="text" list="categories" name="myCat12" id="category" autocomplete="off" value="<?php echo $product['product_cat12']; ?>">
                                                    <datalist id="categories">
                                                        <?php foreach($data['catt'] as $cat){ ?>
                                                        <option value="<?php echo $cat; ?>">
                                                            <?php echo $cat; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>

                                        </div>
                                        <button style="margin-top:20px;" type="submit" name="addpro" class="btn btn-primary me-2">Next</button>
                                        <!-- <button class="btn btn-light">Skip</button> -->
                                        <!-- <div class="form-group">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Company Name*</label>
                      <input type="text" required name="company_name" class="form-control" id="exampleInputUsername1" placeholder="Company Name" value="<?php echo $person['company_name']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Owner Name</label>
                      <input type="text" required name="owner_name"class="form-control" id="exampleInputEmail1" placeholder="Owner Name" value="<?php echo $person['owner_name']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Position</label>
                      <input type="text" required name="position" class="form-control" id="exampleInputEmail1" placeholder="Position" value="<?php echo $person['position']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" required name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo $person['email']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact Number/Whatsapp Number</label>
                      <input type="text" required name="contact_no" class="form-control" id="exampleInputEmail1" value="<?php echo $person['contact_no']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alternate Contact 1</label>
                      <input type="text"  name="alcon1" class="form-control" id="exampleInputEmail1" placeholder="Alternate Contact 1" value="<?php echo $person['alternate_contact1']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alternate Contact 2</label>
                      <input type="text"  name="alcon2" class="form-control" id="exampleInputEmail1" placeholder="Alternate Contact 2" value="<?php echo $person['alternate_contact2']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alternate Contact 3</label>
                      <input type="text"  name="alcon3" class="form-control" id="exampleInputEmail1" placeholder="Alternate Contact 3" value="<?php echo $person['alternate_contact3']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Address</label>
                      <textarea class="form-control" name="address" required id="exampleTextarea1" rows="4"><?php echo $person['address']; ?></textarea>
                    </div>
                    <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-message" >Logo Image<br>(400 X 400)</label>
                                            <input type="hidden" name="logo_img1" value="<?php echo $person['logo_image']; ?>" />
                                            <div class="col-sm-4" >
                                                <input type="file" id="logo_img" name="logo_img" class="dropify" data-default-file="<?php if ($person['logo_image'] != '') {
                                                                                                                                            echo base_url() . 'assets/user_assets/logo/' . $person['logo_image'];
                                                                                                                                        } ?>" /> 
                                            </div>
                                        </div>
                    <button type="submit" name="addper" class="btn btn-primary me-2">Next</button> -->
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