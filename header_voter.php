<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home</title>
    <script src="jscript/validation.js" type="text/javascript"></script>
</head>

<body style="background-color:#EBE9E9;">
    <marquee>Welcome To Online Voting System</marquee>
    <center>
        <font size='6'>
            <a href="voter.php">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="lan_view.php">Vote Results</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="profile.php">Profile</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="logout.php">Logout</a>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="change_pass.php">Change Password</a>
        </font>
    </center>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="pages_dashboard.php" class="brand-link">
            <img src="./dist/vote.jpg" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Online Voting System</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <?php //echo $profile_picture; 
                    ?>
                </div>
                <div class="info">
                    <a href="#" class="d-block">Voting System</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item has-treeview">
                        <a href="pages_dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Home

                            </p>
                        </a>
                    </li>
                    <!-- ./DAshboard -->

                    <!--Account -->
                    <li class="nav-item">
                        <a href="pages_account.php" class="nav-link">
                            <i class="nav-icon fas fa-user-secret"></i>
                            <p>
                                Results
                            </p>
                        </a>
                    </li>
                    <!-- ./Account-->

                    <!--Ibank Staff-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-tie"></i>
                            <p>
                                Profile
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <!-- <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages_add_staff.php" class="nav-link">
                                    <i class="fas fa-user-plus nav-icon"></i>
                                    <p>Add Staff</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages_manage_staff.php" class="nav-link">
                                    <i class="fas fa-user-cog nav-icon"></i>
                                    <p>Manage Staff</p>
                                </a>
                            </li>
                        </ul> -->
                    </li>
                    <!-- ./iBank staff-->

                    <!--Clients -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Logout
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <!-- <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages_add_client.php" class="nav-link">
                                    <i class="fas fa-user-plus nav-icon"></i>
                                    <p>Add Client</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages_manage_clients.php" class="nav-link">
                                    <i class="fas fa-user-cog nav-icon"></i>
                                    <p>Manage Clients</p>
                                </a>
                            </li>
                        </ul> -->
                    </li>
                    <!-- ./ Clients -->

                    <!--iBank Accounts-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                Change Password
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <!-- <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages_add_acc_type.php" class="nav-link">
                                    <i class="far fas fa-plus nav-icon"></i>
                                    <p>Add Acc Type</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages_manage_accs.php" class="nav-link">
                                    <i class="fas fa-cogs nav-icon"></i>
                                    <p>Manage Acc Types</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages_open_acc.php" class="nav-link">
                                    <i class="fas fa-lock-open nav-icon"></i>
                                    <p>Open Acc</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages_manage_acc_openings.php" class="nav-link">
                                    <i class="fas fa-cog nav-icon"></i>
                                    <p>Manange Acc Openings</p>
                                </a>
                            </li>
                        </ul> -->
                    </li>
                    <!--./ iBank Acounts-->

                    <!--Finances-->
                    <!-- <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-dollar-sign"></i>
                            <p>
                                Finances
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages_deposits.php" class="nav-link">
                                    <i class="fas fa-upload nav-icon"></i>
                                    <p>Deposits</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages_withdrawals.php" class="nav-link">
                                    <i class="fas fa-download nav-icon"></i>
                                    <p>Withdrawals</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages_transfers.php" class="nav-link">
                                    <i class="fas fa-random nav-icon"></i>
                                    <p>Transfers</p>
                                </a>
                            </li> -->
                            <!--
              <li class="nav-item">
                <a href="pages_loans.php" class="nav-link">
                  <i class="fas fa-cart-arrow-down nav-icon"></i>
                  <p>Loans</p>
                </a>
              </li>

              -->
                            <!-- <li class="nav-item">
                                <a href="pages_balance_enquiries.php" class="nav-link">
                                    <i class="fas fa-money-bill-alt nav-icon"></i>
                                    <p>Balance Enquiries</p>
                                </a>
                            </li>
                        </ul>
                    </li> -->

                    <!-- <li class="nav-header">Advanced Modules</li>
                    <li class="nav-item">
                        <a href="pages_transactions_engine.php" class="nav-link">
                            <i class="nav-icon fas fa-exchange-alt"></i>
                            <p>
                                Transactions History
                            </p>
                        </a>
                    </li>
                    ./Transcactions Engine

                    Financial Reporting
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice-dollar"></i>
                            <p>
                                Finacial Reports
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages_financial_reporting_deposits.php" class="nav-link">
                                    <i class="fas fa-file-upload nav-icon"></i>
                                    <p>Deposits</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages_financial_reporting_withdrawals.php" class="nav-link">
                                    <i class="fas fa-cart-arrow-down nav-icon"></i>
                                    <p>Withdrawals</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages_financial_reporting_transfers.php" class="nav-link">
                                    <i class="fas fa-random nav-icon"></i>
                                    <p>Transfers</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    ./ End financial Reporting

                    Password Resets
                    <li class="nav-item">
                        <a href="pages_system_settings.php" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                System Settings
                            </p>
                        </a>
                    </li>
                    ./ Password Resets

                    Log Out
                    <li class="nav-item">
                        <a href="pages_logout.php" class="nav-link">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                Log Out
                            </p>
                        </a>
                    </li> -->
                    <!-- ./Log Out -->
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>