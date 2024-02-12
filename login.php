<?php
session_start();
// include "header.php";
if (!isset($_SESSION)) {
}
if (isset($_SESSION['SESS_NAME']) != "") {
	// header("Location: voter.php");
}
?>
<br>
<center>
	<legend>
		<h3>Login for Voting </h3>
	</legend>
	<br>
</center>

<?php global $nam;
echo $nam; ?>
<?php global $error;
echo $error; ?>
<!-- <br>
<center><font size="4" >
<form action="login_action.php" method="post" id="myform" >
Username : 
<input type="text" name="username" value="" > 
<br>
<br>
Password : 
<input type="password" name="password" value="" >
<br>
<br>
<input type="submit" name="login" value="login" > 
</form></font>
</center> -->

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<style>
	[class*=icheck-]>label {
		padding-left: 29px !important;
		min-height: 22px;
		line-height: 22px;
		display: inline-block;
		position: relative;
		vertical-align: top;
		margin-bottom: 0;
		font-weight: 400;
		cursor: pointer;
	}
</style>
<?php include("header.php");
?>


<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<p>Voting System</p>
			<!-- /.login-logo -->
			<div class="card">
				<div class="card-body login-card-body">
					<p class="login-box-msg">Log In To Start Client Session</p>

					<form method="post" action="login_action.php" id="myform">
						<div class="input-group mb-3">
							<input type="text" name="username" class="form-control" placeholder="Username">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" name="password" class="form-control" placeholder="Password">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-8">
								<div class="icheck-primary">
									<input type="checkbox" id="remember">
									<label for="remember">
										Remember Me
									</label>
								</div>
							</div>
							<!-- /.col -->
							<div class="col-4">
								<button type="submit" name="login" class="btn btn-success btn-block">Log In</button>
							</div>
							<!-- /.col -->
						</div>
					</form>


					<!-- /.social-auth-links -->

					<p class="mb-1">
						<a href="pages_reset_pwd.php">I forgot my password</a>
					</p>


					<p class="mb-0">
						<a href="pages_client_signup.php" class="text-center">Register a new account</a>
					</p>

				</div>
				<!-- /.login-card-body -->
			</div>
		</div>
		<!-- /.login-box -->

		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.j"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/j/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/adminlte.min.j"></script>
		<script type="text/javascript">
			var frmvalidator = new Validator("myform");
			frmvalidator.addValidation("username", "req", "Please Enter Username");
			frmvalidator.addValidation("username", "maxlen=50");
			frmvalidator.addValidation("password", "req", "Please Enter Password");
		</script>

		<?php include "footer.php"; ?>

</body>

</html>