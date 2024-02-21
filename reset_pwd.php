  <!DOCTYPE html>
  <html>
  <?php include("dist/_partials/head.php"); ?>

  <body class="hold-transition login-page">
      <div class="login-box">
          <div class="login-logo">
              <p><?php echo $auth->sys_name; ?> - <?php echo $auth->sys_tagline; ?></p>
          </div>
          <!-- /.login-logo -->
          <div class="card">
              <div class="card-body login-card-body">
                  <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

                  <form method="POST">
                      <div class="input-group mb-3">
                          <input type="email" name="email" class="form-control" placeholder="Email" required>
                          <div class="input-group-append">
                              <div class="input-group-text">
                                  <span class="fas fa-envelope"></span>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-12">
                              <button type="submit" name="reset_password" class="btn btn-success btn-block">Request new password</button>
                          </div>
                          <!-- /.col -->
                      </div>
                  </form>

                  <p class="mt-3 mb-1">
                      <a href="pages_client_index.php">Login</a>
                  </p>

              </div>
              <!-- /.login-card-body -->
          </div>
      </div>
      <!-- /.login-box -->

      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.min.js"></script>

  </body>

  </html>