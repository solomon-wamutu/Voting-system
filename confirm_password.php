<?php
session_start();
include('connection.php');
if (isset($_POST['confirm_reset_password'])) {
    /* Confirm Password */
    $error = 0;
    if (isset($_POST['new_password']) && !empty($_POST['new_password'])) {
        $new_password = mysqli_real_escape_string($con, trim(sha1(md5($_POST['new_password']))));
    } else {
        $error = 1;
        echo "New Password Cannot Be Empty";
    }
    if (isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])) {
        $confirm_password = mysqli_real_escape_string($con, trim(sha1(md5($_POST['confirm_password']))));
    } else {
        $error = 1;
        echo "Confirmation Password Cannot Be Empty";
    }

    if (!$error) {
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM  loginusers  WHERE username = '$username'";
        $res = mysqli_query($con, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($new_password != $confirm_password) {
                 echo "Password Does Not Match";
            } else {
                $username = $_SESSION['username'];
                $query = "UPDATE loginusers SET  password =? WHERE username =?";
                $stmt = $con->prepare($query);
                $rc = $stmt->bind_param('ss', $new_password, $username);
                $stmt->execute();
                if ($stmt) {
                    $success = "Password Changed" && header("refresh:1; url=index.php");
                } else {
                    echo "Please Try Again Or Try Later";
                }
            }
        }
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
                <?php
                ?>
                    <p class="login-box-msg"><?php //echo $row->name; ?> Please Enter And Confirm Your Password</p>
                <?php
           //     } ?>
                <form method="POST">
                    <div class="input-group mb-3">
                        <input type="password" required name="new_password" class="form-control" placeholder="New Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" required name="confirm_password" class="form-control" placeholder="Confirm Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="confirm_reset_password" class="btn btn-success btn-block">Reset Password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <!--           <a href="pages_staff_index.php">Login</a>
 -->
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