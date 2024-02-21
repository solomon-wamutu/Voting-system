<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Voting</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--Data tables css-->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!--load swal js -->
    <script src="dist/js/swal.js"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/jpg" sizes="16x16" href="./dist/vote.jpg">
    <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/datatable/custom_dt_html5.css">

    <!--Inject SWAL-->
    <?php if (isset($success)) { ?>
        <!--This code for injecting success alert-->
        <script>
            setTimeout(function() {
                    swal("Success", "<?php echo $success; ?>", "success");
                },
                100);
        </script>

    <?php } ?>

    <?php if (isset($err)) { ?>
        <!--This code for injecting error alert-->
        <script>
            setTimeout(function() {
                    swal("Failed", "<?php echo $err; ?>", "error");
                },
                100);
        </script>

    <?php } ?>
    <?php if (isset($info)) { ?>
        <!--This code for injecting info alert-->
        <script>
            setTimeout(function() {
                    swal("Success", "<?php echo $info; ?>", "warning");
                },
                100);
        </script>

    <?php } ?>
    <script>
        function getiBankAccs(val)

        {
            $.ajax({
                //get account rates
                type: "POST",
                url: "pages_ajax.php",
                data: 'iBankAccountType=' + val,
                success: function(data) {
                    //alert(data);
                    $('#AccountRates').val(data);
                }
            });

            $.ajax({
                //get account transferable name
                type: "POST",
                url: "pages_ajax.php",
                data: 'iBankAccNumber=' + val,
                success: function(data) {
                    //alert(data);
                    $('#ReceivingAcc').val(data);
                }
            });

            $.ajax({
                //get account transferable holder | owner
                type: "POST",
                url: "pages_ajax.php",
                data: 'iBankAccHolder=' + val,
                success: function(data) {
                    //alert(data);
                    $('#AccountHolder').val(data);
                }
            });
        }
    </script>
    <title>Online Voting System</title>
    <script src="jscript/validation.js" type="text/javascript"></script>
</head>

<body bgcolor="#EBE9E9">
    <marquee>Welcome To Online Voting System</marquee>
    <!-- <center> -->
    <!-- <a href="index.php">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="register.php">Register</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="login.php">Login</a></font> -->
    <!-- </center>  -->
    <!-- <br>
<br> -->