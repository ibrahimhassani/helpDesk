<?php
include './connection.php';
session_start();
if ((!isset($_SESSION['id_user'])) || strcmp($_SESSION['id_user'],'1') != 0) {
    
    header('location:./index.php');
    exit();
}
?>
<!DOCTYPE html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>EvalMetrics - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="assets/css/heading.css" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="assets/plugins/datetimepicker/jquery.datetimepicker.css">
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.css">
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.tableTools.css">
    <link href="assets/plugins/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
    <script type="text/javascript"
    src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="scripts/moment.js"></script>


</head>

<body data-page="tabs_accordion">
    <!-- BEGIN TOP MENU -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="demande.php">
                    <img src="assets/img/logo.png" alt="logo" width="150" height="32">
                </a>
            </div>
            <div class="navbar-center"></div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right header-menu">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->


                    <li class="dropdown" id="user-header">
                        <a href="#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img src="assets/img/avatars/avatar2.png" alt="user avatar" width="30" class="p-r-5">
                            <span class="username"><?php echo $_SESSION['login']; ?></span>
                            <i class="fa fa-angle-down p-r-10"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="demande.php">
                                    <i class="glyph-icon flaticon-panels"></i> Demandes de<br> 
                                    <i class="glyph-icon"></i> Videoconference
                                </a>
                            </li>
                            <li>
                                <a href="user_login.php">
                                    <i class="glyph-icon flaticon-account"></i> Demandes d'ajout<br> 
                                </a>
                            </li>
                            <li>
                                <a href="anomalie_hard.php">
                                    <i class="fa fa-hdd-o"></i> Anomalies HardWare
                                </a>
                            </li>
                            <li>
                                <a href="anomalie_soft.php">
                                    <i class="fa fa-upload"></i> Anomalies SoftWare
                                </a>
                            </li>
                            <li>
                                <a href="service.php">
                                    <i class="fa fa-bookmark-o"></i> Service
                                </a>
                            </li>


                            <li class="dropdown-footer clearfix">

                                <a href="logout.php" title="Logout">
                                    <i class="fa fa-power-off"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END TOP MENU -->
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
        <!-- BEGIN MAIN SIDEBAR -->

        <!-- END MAIN SIDEBAR -->

        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="page-title">
                <i class="icon-custom-left"></i>
            </div>
            <div class="container">
                <h2>Demandes d'ajout d'utilisateur</h2>
                <div class="panel">
                    <div class="panel-heading no-bd bg-dark">
                        <h3 class="panel-title"></h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Login</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Poste</th>
                                    <th>Phone</th>
                                    
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody><?php
                                $user = $_SESSION['id_user'];
                                $res = $db->query("SELECT * FROM user_wait");
                                while ($row = $res->fetch()) {
                                    //$res1 = $db->query("SELECT site FROM site_demande WHERE demande='$demande'");
                                    //while ($row1 = $res1->fetch()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['login']; ?></td>
                                        <td><?php echo $row['nom']; ?></td>
                                        <td><?php echo $row['prenom']; ?></td>
                                        <td><?php echo $row['poste']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td style="width: 50px"><a class="btn btn-success" href="add_user.php?id=<?php echo $row['id_u']; ?>">
                                                <i class="glyphicon glyphicon-ok"></i>

                                            </a>
                                        <a class="btn btn-danger" href="delete_user.php?id=<?php echo $row['id_u']; ?>">
                                                <i class="glyphicon glyphicon-remove"></i>

                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                    //}
                                }
                                ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- END MAIN CONTENT -->
        </div>
        <!-- END WRAPPER -->
        <!-- BEGIN CHAT MENU -->

        <!-- END CHAT MENU -->
        <!-- BEGIN MANDATORY SCRIPTS -->
        <script src="assets/plugins/jquery-1.11.js"></script>
        <script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
        <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/plugins/bootstrap-select/bootstrap-select.js"></script>
        <script src="assets/plugins/icheck/icheck.js"></script>
        <script src="assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/plugins/mmenu/js/jquery.mmenu.min.all.js"></script>
        <script src="assets/plugins/nprogress/nprogress.js"></script>
        <script src="assets/plugins/charts-sparkline/sparkline.min.js"></script>
        <script src="assets/plugins/breakpoints/breakpoints.js"></script>
        <script src="assets/plugins/numerator/jquery-numerator.js"></script>
        <!-- END MANDATORY SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>
        <script src="assets/plugins/bootstrap-progressbar/bootstrap-progressbar.js"></script>
        <script src="assets/plugins/datatables/dynamic/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.tableTools.js"></script>
        <script src="assets/plugins/datatables/table.editable.html"></script>
        <script src="assets/js/table_dynamic.js"></script>
        <script src="assets/plugins/datetimepicker/jquery.datetimepicker.js"></script>
        <script src="assets/plugins/datetimepicker/bootstrap-datetimepicker.js"></script>
        <script src="assets/js/collapse.js"></script>
        <script src="assets/js/transition.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <!-- END  PAGE LEVEL SCRIPTS -->

</body>

</html>
