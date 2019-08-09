<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en-US" style="height: 100%">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo 'Smart-iPOS | ' . $tab_title; ?></title>
  <!-- Font Awesome -->
  <link href="<?php echo base_url(); ?>plugins/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- BootStrap -->
  <link href="<?php echo base_url(); ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!-- App Style -->
  <link href="<?php echo base_url(); ?>assets/css/smart-ipos.css" rel="stylesheet" type="text/css">
</head>
<body class="bg-gradient-primary">
<div class="container">
  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg ml-5 mt-2 mb-5 mr-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-6">
              <div class="p-4">
                <div class="text-center">
                  <h3 class="text-dark mb-3">Store Name</h3>
                  <p class="text-dark">Enter Email and Password to Login</p>
                </div>
                <form class="user" action="<?php echo base_url() . 'Dashboard'; ?>">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck">Remember Me</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                </form>
                <hr>
                <center class="alert bg-danger">
                  <center>
                  <span class="text-white">
                    <i class="fa fa-exclamation-triangle"></i> <strong>Warning!</strong> User Not Found
                  </span>
                </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Jquery-->
<script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
