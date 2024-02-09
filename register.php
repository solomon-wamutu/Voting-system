<?php
// session_start();
include "header.php";
if (!isset($_SESSION)) {
}
if (isset($_SESSION['SESS_NAME']) != "") {
	header("Location: voter.php");
}
?>
<br>
<br>
<center>
	<legend>
		<h3> Register </h3>
	</legend>
</center>
<?php global $nam;
echo $nam; ?>
<?php global $error;
echo $error; ?>
<center>
	<!-- <form action="reg_action.php" method="post" id="myform">
			Firstname:
			<input type="text" name="firstname" value="" />
			<br>
			<br>
			Lastname:
			<input type="text" name="lastname" value="" />
			<br>
			<br>
			Username:
			<input type="text" name="username" value="" />
			<br>
			<br>
			Password:
			<input type="password" name="password" value="" />
			<br>
			<br>
			<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div>
			<br>
			<br>
			<input type="submit" name="submit" value="Next" />
		</form> -->
	<!DOCTYPE html>
	<html>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<?php include("header.php"); ?>

	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<p>Online Voting - Sign Up</p>
			</div>
			<!-- /.login-logo -->
			<div class="card">
				<div class="card-body login-card-body">
					<p class="login-box-msg">Sign Up To Use the Voting System</p>

					<form method="post">
						<div class="input-group mb-3">
							<input type="text" name="firstname" required class="form-control" placeholder="First Name">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user 1"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="text" required name="lastname" class="form-control" placeholder="Last Name">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user 2"></span>
								</div>
							</div>
						</div>

						<div class="input-group mb-3">
							<input type="text" name="username" required class="form-control" placeholder="Username">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-phone"></span>
								</div>
							</div>
						</div>

						<div class="input-group mb-3">
							<input type="password" name="password" required class="form-control" placeholder="Password">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-8">
							</div>
							<!-- /.col -->
							<div class="col-4">
								<button type="submit" name="create_account" class="btn btn-success btn-block">Sign Up</button>
							</div>
							<!-- /.col -->
						</div>
					</form>

					<p class="mb-0">
						<a href="pages_client_index.php" class="text-center">Login</a>
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
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript">
		var frmvalidator = new Validator("myform");
		frmvalidator.addValidation("firstname", "req", "Please enter student firstname");
		frmvalidator.addValidation("firstname", "maxlen=50");
		frmvalidator.addValidation("lastname", "req", "Please enter student lastname");
		frmvalidator.addValidation("lastname", "maxlen=50");
		frmvalidator.addValidation("username", "req", "Please enter student username");
		frmvalidator.addValidation("username", "maxlen=50");
		frmvalidator.addValidation("password", "req", "Please enter student password");
		frmvalidator.addValidation("password", "minlen=6", "Password must not be less than 6 characters.");
	</script>
	<?php include "footer.php"; ?>