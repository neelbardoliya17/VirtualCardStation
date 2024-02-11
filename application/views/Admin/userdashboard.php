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
                  <h2>Welcome  <?php echo $person['company_name']; ?>, 
                  </h2>
                  <!-- <p class="mb-md-0">Your digital card dashboards</p> -->
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
                <!-- <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button> -->
              </div>
            </div>
          </div>
        </div>
        <!-- <button type="button" onclick="" class="btn btn-secondary ">Back</button>
        <a href="<?php echo base_url().'index.php/admin/about/'.$userid; ?>"><button type="button" style="float:right;" class="btn btn-primary">Skip</button></a><br><br> -->
        <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">User Dashboard</p>
                  <!-- <label class="form-label" for="basic-icon-default-message" style="margin-top:10px;margin-left:20px;">Display</label><br> -->
                        <!-- <label class="switch" style="margin-left:20px;"><input type="checkbox" name="chk" <?php if($person['payment_status']==1){ ?> checked
                        <?php }   ?> /><div></div>
                        </label> -->
                        <!-- <input type="submit" style="margin-left:20px;margin-bottom:20px;" class="btn btn-outline-primary" name="checkk" />   -->
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Edit</th>
                          <th>Share</th>
                          <th>Days Counter</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $person['company_name']; ?>&nbsp;<a target="_blank" href  ="http://localhost/virtualcardstation/<?php echo $person['slug']; ?>" >(Check Here)<i class="mdi mdi-open-in-new"></i></a></td>
                          <td><?php if($person['status']==1){
                              echo "Active";
                          }
                          else
                          {
                              echo "Inactive";
                          } ?></td>
                          <td><?php echo $person['startdate']; ?></td>
                          <td><?php if($person['payment_status']==1){
                              echo $person['enddate'];
                          } 
                          else
                          {
                              echo $person['eight_date'];
                          }
                          ?></td>
                          <td><a href="<?php echo site_url().'admin/select/'.$userid; ?>"><i class="mdi mdi-circle-edit-outline"></i></a></td>
                          <td><a target="_blank" href="https://wa.me/?text=https://www.icedinfotech.com/digicard/<?php echo $person['slug']; ?>"><i class="mdi mdi mdi-whatsapp"></i></a></td>
                          <td><h4 style="color:red;"><?php     $datetime1 = date_create(date('Y-m-d')); $datetime2 = date_create($person['eight_date']); $interval=date_diff($datetime1,$datetime2); if($datetime1>$datetime2) { echo "0 Days"; } else { echo $interval->format('%a days'); } ?></h4></td>
                          <td><button class="btn btn-primary mt-2 mt-xl-0">Pay Now</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © Virtual Card Station<a href="#" target="virtualcardstation.com</a>2024</span>
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