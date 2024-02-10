<?php
if (!isset($_SESSION['user'])) {
  echo "not logged in";
  redirect('Owneradmin/index', 'refresh');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
    <link href="<?php echo base_url('assets/admin_assets/css/custom.css')  ?>" rel="stylesheet" type="text/css" />
  <!--dropify -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin_assets/dropify/dropify.min.css')  ?>" />
  <!-- plugins:css -->
  <link rel="stylesheet" href="<? echo base_url().'assets/admin_assets/vendors/mdi/css/materialdesignicons.min.css'; ?>">
  <link rel="stylesheet" href="<? echo base_url().'assets/admin_assets/vendors/base/vendor.bundle.base.css'; ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<? echo base_url().'assets/admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css'; ?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<? echo base_url().'assets/admin_assets/css/style.css'; ?>">
  <!-- endinject -->
  <link rel="icon" type="image/x-icon" href="<? echo base_url().'assets/user_assets/favicon/favicon633320.png'; ?>" />
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
    <? include_once('menu.php'); ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">

        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
              <div class="d-flex align-items-end flex-wrap">
                <div class="me-md-3 me-xl-5">
                  <!--<h2>Welcome back,-->
                  <!--  <? echo $fav['username']; ?>-->
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
        <div class="row">
          <div class="col-md-12 stretch-card">
            <div class="card">
              <div class="card-body">

                <!-- <p class="card-title">Recent Purchases</p> -->
                <h4 class="card-title">Edit User Details</h4>
                <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                <form class="forms-sample" method="post" enctype="multipart/form-data">

                  <!-- <button class="btn btn-light">Skip</button> -->
                  <div class="form-group">
                    <input type="hidden" required name="userid" class="form-control" id="exampleInputUsername1" placeholder="Company Name" value="<? echo $userid; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Company Name*</label>
                    <input type="text" disabled required name="company_name" class="form-control" id="exampleInputUsername1" placeholder="Company Name" value="<? echo $person['company_name']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputOwnerName">Owner Name*</label>
                    <input type="text" disabled required name="owner_name" class="form-control" id="exampleInputOwnerName" placeholder="Owner Name" value="<? echo $person['owner_name']; ?>">
                  </div>
                  <!--<div class="form-group">-->
                  <!--  <label for="exampleInputEmail1">Position</label>-->
                  <!--  <input type="text" required name="position" class="form-control" id="exampleInputEmail1" placeholder="Position" value="<? echo $person['position']; ?>">-->
                  <!--</div>-->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email*</label>
                    <input disabled type="email" required name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Email in Proper Format" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<? echo $person['user_mail']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password*</label>
                    <input disabled type="email" required name="password" title="Password" class="form-control" id="exampleInputEmail1" placeholder="Password" value="<? echo $person['password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhoneNumber">Start Date</label>
                    <input type="date" required name="startdate" class="form-control" id="exampleInputPhoneNumber" value="<? echo $person['startdate']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPhoneNumber">Eight Date</label>
                    <input type="date" required name="eight_date" class="form-control" id="exampleInputPhoneNumber" value="<? echo $person['eight_date']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhoneNumber">End Date</label>
                    <input type="date" required name="enddate" class="form-control" id="exampleInputPhoneNumber" value="<? echo $person['enddate']; ?>">
                  </div>
                    <div class="form-group">
                  <label class="form-label" for="basic-icon-default-message" style="margin-top:10px;margin-left:20px;">Status</label><br>
                   <label class="switch" style="margin-left:20px;"><input type="checkbox" name="chk" <? if($person['status']==1){ ?> checked
                            <? } ?>  /><div></div>
                    </label>
                    </div>
                      <div class="form-group">
                    <label class="form-label" for="basic-icon-default-message" style="margin-top:10px;margin-left:20px;">Payment Status</label><br>
                   <label class="switch" style="margin-left:20px;"><input type="checkbox" name="chk1" <? if($person['payment_status']==1){ ?> checked
                            <? } ?>  /><div></div>
                    </label>
                    </div>
                  <!--<div class="form-group">-->
                  <!--  <label for="exampleInputAlternateContact1">Alternate Contact 1</label>-->
                  <!--  <input type="tel" pattern="[0-9]{10}" title="10 digit mobile number" name="alcon1" class="form-control" id="exampleInputAlternateContact1" placeholder="Alternate Contact 1" value="<? echo $person['alternate_contact1']; ?>">-->
                  <!--</div>-->
                  <!--<div class="form-group">-->
                  <!--  <label for="exampleInputAlternateContact2">Alternate Contact 2</label>-->
                  <!--  <input type="tel" pattern="[0-9]{10}" title="10 digit mobile number" name="alcon2" class="form-control" id="exampleInputAlternateContact2" placeholder="Alternate Contact 2" value="<? echo $person['alternate_contact2']; ?>">-->
                  <!--</div>-->
                  <!--<div class="form-group">-->
                  <!--  <label for="exampleInputAlternateContact3">Alternate Contact 3</label>-->
                  <!--  <input type="tel" pattern="[0-9]{10}" title="10 digit mobile number" name="alcon3" class="form-control" id="exampleInputAlternateContact3" placeholder="Alternate Contact 3" value="<? echo $person['alternate_contact3']; ?>">-->
                  <!--</div>-->
                  <!--<div class="form-group">-->
                  <!--  <label for="exampleTextarea1">Address*</label>-->
                  <!--  <textarea class="form-control" name="address" required id="exampleTextarea1" rows="4"><? echo $person['address']; ?></textarea>-->
                  <!--</div>-->
                  <button type="submit" name="addper" class="btn btn-primary me-2">Submit</button>
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
  <script src="<? echo base_url().'assets/admin_assets/vendors/base/vendor.bundle.base.js'; ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<? echo base_url().'assets/admin_assets/vendors/chart.js/Chart.min.js'; ?>"></script>
  <script src="<? echo base_url().'assets/admin_assets/vendors/datatables.net/jquery.dataTables.js'; ?>"></script>
  <script src="<? echo base_url().'assets/admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js'; ?>">
  </script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
 
  <script src="<? echo base_url().'assets/admin_assets/js/off-canvas.js'; ?>"></script>
  <script src="<? echo base_url().'assets/admin_assets/js/hoverable-collapse.js'; ?>"></script>
  <script src="<? echo base_url().'assets/admin_assets/js/template.js'; ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<? echo base_url().'assets/admin_assets/js/dashboard.js'; ?>"></script>
  <script src="<? echo base_url().'assets/admin_assets/js/data-table.js'; ?>"></script>
  <script src="<? echo base_url().'assets/admin_assets/js/jquery.dataTables.js'; ?>"></script>
  <script src="<? echo base_url().'assets/admin_assets/js/dataTables.bootstrap4.js'; ?>"></script>
  <!-- End custom js for this page-->

  <script src="<? echo base_url().'assets/admin_assets/js/jquery.cookie.js'; ?>" type="text/javascript"></script>
</body>

</html>