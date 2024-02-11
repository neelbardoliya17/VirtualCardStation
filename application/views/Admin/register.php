<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/admin_assets/vendors/mdi/css/materialdesignicons.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/admin_assets/vendors/base/vendor.bundle.base.css' ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/admin_assets/css/style.css' ?>">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="<?php echo base_url().'assets/admin_assets/images/favicon.png' ?>" /> -->
  <style>
    .alert-danger {
        background-color: #ffe0db;
        border-color: #ffc5bb;
        color: #ff3e1d;
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
         <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-info">
                    <?= $this->session->flashdata('success'); ?>
                </div>
          <?php endif; ?>
          <?php if ($this->session->flashdata('error')) : ?>
                <div class="alert alert-danger">
                    <?= $this->session->flashdata('error'); ?>
                </div>
          <?php endif; ?>
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
               <h2>Virtual Card Station</h2>
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST">
                <!-- <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username" required>
                </div> -->
                <div class="form-group">
                  <input type="text"  pattern="^[a-zA-Z0-9 -_]*$" title="Special Character is not allowed" name="slug" placeholder="Company Name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="email"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Email in Proper Format" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" name="chk" required >
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="register" value="SIGN UP" />
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?php echo base_url().'admin' ?>" class="text-primary">Login</a>
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
  <!-- plugins:js -->
  <script src="<?php echo base_url().'assets/admin_assets/vendors/base/vendor.bundle.base.js' ?>"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url().'assets/admin_assets/js/off-canvas.js' ?>"></script>
  <script src="<?php echo base_url().'assets/admin_assets/js/hoverable-collapse.js' ?>"></script>
  <script src="<?php echo base_url().'assets/admin_assets/js/template.js' ?>"></script>
  <!-- endinject -->
</body>

</html>
