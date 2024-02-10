<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User Admin</title>
  <!-- plugins:css -->
  <link rel="manifest" href="<?php echo base_url().'assets/admin_assets/manifest.json';  ?>" >
  <link rel="stylesheet" href="<?php echo base_url().'assets/admin_assets/vendors/mdi/css/materialdesignicons.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/admin_assets/vendors/base/vendor.bundle.base.css'; ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->

  <link rel="stylesheet" href="<?php echo base_url().'assets/admin_assets/css/style.css'; ?>">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="<?php echo base_url().'assets/admin_assets/images/favicon.png'; ?>" /> -->
  <style>
    .alert-danger {
        background-color: #ffe0db;
        border-color: #ffc5bb;
        color: #ff3e1d;1
    }
    .alert {
        position: relative;
        padding: 0.9375rem 0.9375rem;
        margin-bottom: 1rem;
        border: 0 solid transparent;
        border-radius: 0.375rem;
    }
  </style>
</head>

<body>

  <div class="container-scroller">
 
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        
      <div class="content-wrapper d-flex align-items-center auth px-0">
          
        <div class="row w-100 mx-0">
            
          <div class="col-lg-4 mx-auto">
          <?php if ($this->session->flashdata('error')) : ?>
                <div class="alert alert-danger">
                    <?= $this->session->flashdata('error'); ?>
                </div>
          <?php endif; ?>
          <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-info">
                    <?= $this->session->flashdata('success'); ?>
                </div>
          <?php endif; ?>
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
              <h2>Virtual Card Station</h2>
                <!-- <img src="<?php echo base_url().'assets/admin_assets/images/logo.svg'; ?>" alt="logo"> -->
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="POST">
                <div class="form-group">
                  <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Email in Proper Format" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" required name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="submit" value="SIGN IN" />
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div> -->
                  <!-- <a  href="#" class="auth-link text-black">Forgot password?</a> -->
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook me-2"></i>Connect using facebook
                  </button>
                </div> -->
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="<?php echo base_url().'Admin/register'; ?>" class="text-primary">Create</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  <a href="<?php echo base_url().'Admin/forgetPassword'; ?>" class="text-primary">Forget Password</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <!-- plugins:js -->
  <script src="<?php echo base_url().'assets/admin_assets/vendors/base/vendor.bundle.base.js'; ?>../../"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url().'assets/admin_assets/js/off-canvas.js'; ?>"></script>
  <script src="<?php echo base_url().'assets/admin_assets/js/hoverable-collapse.js'; ?>"></script>
  <script src="<?php echo base_url().'assets/admin_assets/js/template.js'; ?>"></script>
  
  <!-- endinject -->
</body>

</html>
