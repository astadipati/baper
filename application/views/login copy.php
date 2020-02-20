<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Baper - Login</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/auth/css/login_style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/auth/images/favicon.ico" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
				<div class="col-12 mb-4">
					<img class="img-fluid" src="<?php echo base_url(); ?>assets/auth/images/logo_login.png" alt="logo" />
				</div>
              <form action="<?php echo base_url(); ?>login/signin" method="post" >
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" name="userName" class="form-control" placeholder="Username" autofocus value="<?php echo set_value('userName'); ?>" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" name="password" class="form-control" placeholder="*********" value="<?php echo set_value('password'); ?>" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
				<?php echo $this->session->flashdata('error_msg'); ?>
				<br>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Login</button>
                </div>

                
              </form>
            </div>

            <p class="footer-text text-center">Dirjen Badan Peradilan Agama Mahkamah Agung RI<br>copyright © 2019</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

	<script src="js/main.js"></script>

  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/auth/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>assets/auth/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/auth/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/auth/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>