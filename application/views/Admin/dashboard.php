com<?php
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
                  <!--<h2>Welcome back,-->
                  <!--  <?php echo $fav['username']; ?>-->
                  <!--</h2>-->
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
                    <a class="nav-link <?php if ($this->uri->segment(2)=='dashboard') {
                                                                echo "active";
                                                            } ?>" id="overview-tab" data-bs-toggle="tab" href="#" role="tab" aria-controls="overview" aria-selected="false">Personal Details</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link ">|</a>
                  </li>
                  <li class="nav-item <?php if ($this->uri->segment(2)=='about') {
                                                                echo "active";
                                                            } ?>">
                    <a class="nav-link" href="<?php echo base_url().'index.php/Admin/about/'.$userid; ?>">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link ">|</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link <?php if ($this->uri->segment(2)=='theme') {
                                                                echo "active";
                                                            } ?>" href="<?php echo base_url().'index.php/Admin/theme/'.$userid; ?>" role="tab">Theme</a>
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
                       <a href="<?php echo base_url().'index.php/admin/select/'.$userid; ?>"><button type="button" class="btn btn-secondary ">Back</button></a>
                <a href="<?php echo base_url().'index.php/admin/about/'.$userid; ?>"><button type="submit" style="float:right;" class="btn btn-primary">Skip</button><br><br></a>
        <div class="row">
          <div class="col-md-12 stretch-card">
            <div class="card">
              <div class="card-body">

                <!-- <p class="card-title">Recent Purchases</p> -->
                <h4 class="card-title">Personal Detail Form</h4>
                <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                <form class="forms-sample" method="post" enctype="multipart/form-data">

                  <!-- <button class="btn btn-light">Skip</button> -->
                  <div class="form-group">
                    <input type="hidden" required name="userid" class="form-control" id="exampleInputUsername1" placeholder="Company Name" value="<?php echo $userid; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Company Name*</label>
                    <input type="text" required name="company_name" class="form-control" id="exampleInputUsername1" placeholder="Company Name" value="<?php echo $person['company_name']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputOwnerName">Owner Name*</label>
                    <input type="text" required name="owner_name" class="form-control" id="exampleInputOwnerName" placeholder="Owner Name" value="<?php echo $person['owner_name']; ?>">
                  </div>
                  <!--<div class="form-group">-->
                  <!--  <label for="exampleInputEmail1">Position</label>-->
                  <!--  <input type="text" required name="position" class="form-control" id="exampleInputEmail1" placeholder="Position" value="<?php echo $person['position']; ?>">-->
                  <!--</div>-->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email*</label>
                    <input disabled type="email" required name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Email in Proper Format" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo $person['user_mail']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhoneNumber">Contact Number/Whatsapp Number*</label>
                    <input type="tel" pattern="[0-9]{10}" title="10 digit mobile number" required name="contact_no" class="form-control" id="exampleInputPhoneNumber" value="<?php echo $person['contact_no']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAlternateContact1">Alternate Contact 1</label>
                    <input type="tel" pattern="[0-9]{10}" title="10 digit mobile number" name="alcon1" class="form-control" id="exampleInputAlternateContact1" placeholder="Alternate Contact 1" value="<?php echo $person['alternate_contact1']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAlternateContact2">Alternate Contact 2</label>
                    <input type="tel" pattern="[0-9]{10}" title="10 digit mobile number" name="alcon2" class="form-control" id="exampleInputAlternateContact2" placeholder="Alternate Contact 2" value="<?php echo $person['alternate_contact2']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAlternateContact3">Alternate Contact 3</label>
                    <input type="tel" pattern="[0-9]{10}" title="10 digit mobile number" name="alcon3" class="form-control" id="exampleInputAlternateContact3" placeholder="Alternate Contact 3" value="<?php echo $person['alternate_contact3']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Address*</label>
                    <textarea class="form-control" name="address" required id="exampleTextarea1" rows="4"><?php echo $person['address']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="basic-icon-default-message">Logo Image*<br>(200 X
                      77)(Max Size 1MB)</label>
                    <input type="hidden" name="logo_img1" value="<?php echo $person['logo_image']; ?>" />
                    <div class="col-sm-4">
                       <?php if($person['logo_image']!="")
                      { ?>
                      <img style="max-width: 100%;height: auto;border:2px solid black;padding:10px;border-radius:5%" src="<?php echo base_url() . 'assets/user_assets/logo/' . $person['logo_image']; ?>" />
                      <br>
                      <br> 
                      <a href="<?php echo base_url().'admin/editPageDashboard/'.$userid.'/logo/logo_image/'.$person['logo_image']; ?>" style="
                      margin-top:10px;
                      padding: 5px 10px;
                      background-color:#dc143c;
                      color: #fff;
                      text-decoration: none;
                      border-radius: 5px;">Edit Image</a>
                      <?php } else { ?>
                      <input type="file" id="logo_img"  data-allowed-file-extensions="png jpg jpeg webp" data-max-file-size="1M" name="logo_img" class="dropify" required/>
                    <?php } ?>
                    </div>
                  </div>
                  <button type="submit" name="addper" class="btn btn-primary me-2">Next</button>
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
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">For Best Digital Card Contact <a href="#/" target="_blank">Virtual Card Station</a>
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
  </div>

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