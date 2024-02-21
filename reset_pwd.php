 <?php

    session_start();
    include('./connection.php');
    if (isset($_POST['resetpassword'])) {
        $error = 0;
        if (isset($_POST['username']) && $_POST['username']) {
            $username = mysqli_real_escape_string($con, trim($_POST['username']));
        } else {
            $error = 1;
            echo "Enter your username Address";
        }
        if (!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) {
            echo "Invalid username Address";
        }
        $checkEmail = mysqli_query($con, "SELECT username FROM loginusers WHERE username = '" . $_POST['username'] . "'") or exit(mysqli_error($con));

        if (mysqli_num_rows($checkEmail) > 0) {
            $n = date('y');
            $new_password = bin2hex(random_bytes($n));
            $querry = "UPDATE loginusers SET password = ? WHERE username=?";
            $stmt = $con->prepare($querry);
            $rc = $stmt->bind_param('ss', $new_password, $username);
            $stmt->execute();
            $_SESSION['username'] = $username;

            if ($stmt) {
                echo "Confirm your password" && header('refresh:1; url = confirm_password.php');
            } else {
                echo "Password reset failed";
            }
        } else {
            echo "username does not exist";
        }
    }


    ?>

 <!DOCTYPE html>
 <html>
 <?php include("header.php"); ?>

 <body class="hold-transition login-page">
     <div class="login-box">
         <div class="login-logo">
             <p>Online Voting</p>
         </div>
         <!-- /.login-logo -->
         <div class="card">
             <div class="card-body login-card-body">
                 <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

                 <form method="POST">
                     <div class="input-group mb-3">
                         <input type="text" name="username" class="form-control" placeholder="Username" required>
                         <div class="input-group-append">
                             <div class="input-group-text">
                                 <span class="fas fa-envelope"></span>
                             </div>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-12">
                             <button type="submit" name="resetpassword" class="btn btn-success btn-block">Request new password</button>
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