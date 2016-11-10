<?php
include './connection.php';
session_start();
if (!isset($_SESSION['id_user'])|| strcmp($_SESSION['id_user'],'1') == 0) {
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
    <script type="text/javascript">
        $(function () {    // Makes sure the code contained doesn't run until
            //     all the DOM elements have loaded

            $('#anomalie').change(function(){
                $('.autre').hide();
        if(($(this).val())==='autre')
                $('#' + $(this).val()).show();
            });

        });
        
    $(function () {    // Makes sure the code contained doesn't run until
            //     all the DOM elements have loaded

            $('#anomalie_soft').change(function(){
                $('.autre_soft').hide();
        if(($(this).val())==='autre_soft')
                $('#' + $(this).val()).show();
            });

        });
        
        $(function () {
            $('#datetimepicker6').datetimepicker();
            $('#datetimepicker7').datetimepicker({
                useCurrent: false //Important! See issue #1075
            });
            $("#datetimepicker6").on("dp.change", function (e) {
                $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker7").on("dp.change", function (e) {
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            });
            $('.datepicker .input-group.date').datepicker({
                clearBtn: true,
                daysOfWeekHighlighted: "0",
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker9').datetimepicker({
                format: 'YYYY-MM-DD'
            });
        });
        $(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
            $('#datetimepicker4').datetimepicker({
                useCurrent: false, //Important! See issue #1075
                format: 'LT'
            });
            $("#datetimepicker3").on("dp.change", function (e) {
                $('#datetimepicker4').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker4").on("dp.change", function (e) {
                $('#datetimepicker3').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>

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

                <a class="navbar-brand" href="acceuil.php">
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
                                <a href="acceuil.php">
                                    <i class="glyph-icon flaticon-forms"></i> Acceuil
                                </a>
                            </li>
                            
                            <li>
                                <a href="demande_user.php">
                                    <i class="glyph-icon flaticon-panels"></i> Demandes de<br> 
                                    <i class="glyph-icon"></i> Videoconference
                                </a>
                            </li>
                            <li>
                                <a href="anomalie_hard_user.php">
                                    <i class="fa fa-hdd-o"></i> Anomalies HardWare
                                </a>
                            </li>
                            <li>
                                <a href="anomalie_soft_user.php">
                                    <i class="fa fa-upload"></i> Anomalies SoftWare
                                </a>
                            </li>
                            <li>
                                <a href="service_user.php">
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
            <div class="row">
                <div class="col-md-10">
                    <h3>Service</h3>
                    <div class="tabcordion">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#tab1_1" data-toggle="tab">Demande de Videoconference</a></li>
                            <li class=""><a href="#tab1_2" data-toggle="tab">Anomalies Hardware</a></li>
                            <li class=""><a href="#tab1_3" data-toggle="tab">Anomalies Software</a></li>
                            <li class=""><a href="#tab1_4" data-toggle="tab">Service</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="tab1_1">
                                <form action="add_demande.php" method="post" parsley-validate>
                                    <div class="row">
                                        <div class="container">
                                            <div class='col-md-5'>
                                                <div class="form-group">
                                                    Le 
                                                    <div class='input-group date' id='datetimepicker9'>
                                                        <input type='text' parsley-type='date' name="date" class="form-control" required/>
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar">
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='col-md-2'>


                                            </div>
                                            <div class='col-md-5'>
                                                <div class="row">
                                                    <div class='col-sm-6'>
                                                        <div class="form-group">
                                                            De
                                                            <div class='input-group date' id='datetimepicker3'>
                                                                <input type='text' parsley-type='time' name="h_debut" class="form-control" required/>
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-time"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class='col-sm-6'>
                                                        <div class="form-group">
                                                            A
                                                            <div class='input-group date' id='datetimepicker4'>
                                                                <input type='text' name="h_fin" parsley-type='time' class="form-control" required/>
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-time"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row column-seperation">
                                        <div class="col-md-6 line-separator">
                                            <h4 id="part">    A partir de: </h4>

                                            <?php
                                            $res = $db->query("SELECT * FROM site");
                                            while ($row = $res->fetch()) {
                                                ?>
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio" value="<?php echo $row['nom_s']; ?>">
                                                        <?php echo $row['nom_s']; ?>
                                                    </label>
                                                </div>
                                                <?php
                                            }
                                            if (isset($_GET['error']) && $_GET['error'] == "5C") {
                                                ?>
                                                <div class="alert alert-danger">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Choisissez une option</strong> 
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 id="part">Avec: </h4>
                                            <?php
                                            $res1 = $db->query("SELECT * FROM site");
                                            while ($row = $res1->fetch()) {
                                                ?>
                                                <div class="checkbox">
                                                    <label><input type="checkbox"  name="check_list[]" value="<?php echo $row['id_s']; ?>">
                                                        <?php echo $row['nom_s']; ?>
                                                    </label>
                                                </div>
                                                <?php
                                            }
                                            if (isset($_GET['error']) && $_GET['error'] == "5D") {
                                                ?>
                                                <div class="alert alert-danger">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Choisissez au moins une option</strong> 
                                                </div>
                                            <?php } ?>



                                        </div>
                                    </div>
                                    <ul>
                                        <li class="divider"></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h4 >Adresse IP </h4>

                                                <div class="controls" >
                                                    <input type="text" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" name="ip" placeholder="x.x.x.x" class="form-control" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <h4 >N° de salle </h4>

                                                <div class="controls" >
                                                    <input type="number" min='1' name="salle" placeholder="xx" class="form-control" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <div class="pull-right">
                                                <button class="btn btn-primary m-b-10" >Envoyer</button>

                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab1_2">
                                <form action="add_anomalie_hard.php" method="post" parsley-validate>


                                    <div class="row column-seperation">
                                        <div class="col-md-6 line-separator">
                                            <h4 id="part">    Type d'anomalie: </h4>
                                            <select name="compos" id="anomalie" class="form-control" class="form-control" required>
                                                <?php $res2 = $db->query("SELECT * FROM anomalie_exist WHERE type=1");
                                            while ($row = $res2->fetch()) { ?>
                                                <option><?php echo $row['composant']; ?></option>
                                            <?php } ?>
                                                <option value='autre'>Autre...</option>

                                            </select>
                                            <br><br>
                                        </div>
                                        <div class="col-md-6">
                                        <div id="autre" class="autre row"  style="display: none">
                                            <h4 id="part">Specifier le composant: </h4>
                                            <div class="controls col-md-12">
                                                <input type="text" name="autre" class="form-control">
                                                </div>
                                        </div>
                                            <div class="row">
                                            <h4 id="part">Description: </h4>
                                            <div class="col-sm-12">
                                                <textarea rows="5" name="desc" class="form-control valid" placeholder="Expliquer l'anomalie..."></textarea>
                                            </div>
                                        </div>
                                        </div>
                                    </div><br>
                                    <ul>
                                        <li class="divider"></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h4 >Adresse IP </h4>

                                                <div class="controls" >
                                                    <input type="text" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" name="ip" placeholder="x.x.x.x" class="form-control" required>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <div class="pull-right">
                                                <button class="btn btn-primary m-b-10" >Envoyer</button>

                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab1_3">
                                <form action="add_anomalie_soft.php" method="post" parsley-validate>


                                    <div class="row column-seperation">
                                        <div class="col-md-6 line-separator">
                                            <h4 id="part">    Type d'anomalie: </h4>
                                            <select name="compos_soft" id="anomalie_soft" class="form-control" class="form-control" required>
                                                <?php $res2 = $db->query("SELECT * FROM anomalie_exist WHERE type=2");
                                            while ($row = $res2->fetch()) { ?>
                                                <option><?php echo $row['composant']; ?></option>
                                            <?php } ?>
                                                <option value='autre_soft'>Autre...</option>

                                            </select>
                                            <br><br>
                                        </div>
                                        <div class="col-md-6">
                                        <div id="autre_soft" class="autre_soft row"  style="display: none">
                                            <h4 id="part">Specifier le probleme: </h4>
                                            <div class="controls col-md-12">
                                                <input type="text" name="autre_soft" class="form-control">
                                                </div>
                                        </div>
                                            <div class="row">
                                            <h4 id="part">Description: </h4>
                                            <div class="col-sm-12">
                                                <textarea rows="5" name="desc_soft" class="form-control valid" placeholder="Expliquer l'anomalie..."></textarea>
                                            </div>
                                        </div>
                                        </div>
                                    </div><br>
                                    <ul>
                                        <li class="divider"></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h4 >Adresse IP </h4>

                                                <div class="controls" >
                                                    <input type="text" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" name="ip_soft" placeholder="x.x.x.x" class="form-control" required>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <div class="pull-right">
                                                <button class="btn btn-primary m-b-10" >Envoyer</button>

                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab1_4">
                                <form action="add_service.php" method="post" parsley-validate>


                                    <div class="row column-seperation">
                                        <div class="col-md-6 line-separator">
                                            <h4 id="part">    Type de service: </h4>
                                            <div class="controls" >
                                                    <input type="text"  name="serv" placeholder="specifier le service" class="form-control" required>
                                                </div>
                                            <br><br>
                                        </div>
                                        <div class="col-md-6">
                                        
                                            <div class="row">
                                            <h4 id="part">Description: </h4>
                                            <div class="col-sm-12">
                                                <textarea rows="5" name="desc_serv" class="form-control valid" placeholder="Expliquer le service demande..."></textarea>
                                            </div>
                                        </div>
                                        </div>
                                    </div><br>
                                    <ul>
                                        <li class="divider"></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h4 >Adresse IP </h4>

                                                <div class="controls" >
                                                    <input type="text" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" name="ip_serv" placeholder="x.x.x.x" class="form-control" required>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <div class="pull-right">
                                                <button class="btn btn-primary m-b-10" >Envoyer</button>

                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
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
