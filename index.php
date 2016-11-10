<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

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
        <!-- END  MANDATORY STYLE -->
        <!-- BEGIN PAGE LEVEL STYLE -->
        <link href="assets/plugins/modal/css/component.css" rel="stylesheet">
        <link href="assets/css/animate-custom.css" rel="stylesheet">
        <!-- END PAGE LEVEL STYLE -->
        <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body class="login fade-in" data-page="login">
        <?php if (isset($_GET['Message']) && !empty($_GET['Message'])) { ?>
                <div class="alert alert-danger">
                    <strong>Login ou Mot de passe incorecte</strong> 
                </div>
            <?php } ?>
        <?php if (isset($_GET['stat']) && !empty($_GET['stat'])) { ?>
                <div class="alert alert-success">
                    <strong>Votre demande à était envoyée avec succes.</strong>Il faut attendre la confirmation de l'administrateur 
                </div>
            <?php } ?>
        <!-- BEGIN LOGIN BOX -->
        <div  id="login-block">
            
            <div class="row">
                <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                    <div class="login-box clearfix animated flipInY">
                        <div class="page-icon animated bounceInDown">
                            <img src="assets/img/account/user-icon.png" alt="Key icon">
                        </div>
                        <div class="login-logo">
                            <a>
                                <img src="assets/img/logo.png" alt="Company Logo">
                            </a>
                        </div>
                        <hr>
                        <div class="login-form">
                            <!-- BEGIN ERROR BOX -->
                            <div class="alert alert-danger hide">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <h4>Error!</h4>
                                Your Error Message goes here
                            </div>
                            <!-- END ERROR BOX -->
                            <form action="authentification.php" method="post" parsley-validate>
                                <input type="text" name="login" placeholder="Username" class="input-field form-control user" required />
                                <input type="password" name="mdp" placeholder="Password" class="input-field form-control password" required/>

                                <button type="submit" class="btn btn-login">Login</button>
                            </form>
                            <div class="login-links">
                                <a href="">Mot de passe oublié?</a>
                                <br>
                                Nouveau compte? <a class="btn btn-default" data-modal="modal-19"><strong>Sign Up</strong></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        
        <div class="md-modal md-effect-1" id="modal-19">
            <div class="md-content md-content-white col-md-12">
                <h3>Sign up</h3>
                <div>
                    <form action="add_wait_user.php" method="post" parsley-validate>
                        <div class="form-group">
                            <label class="form-label"><strong>Nom</strong>
                            </label>
                            <span class="tips"></span>
                            <div class="controls">
                                <input type="text" name="nom" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><strong>Prenom</strong>
                            </label>
                            <span class="tips"></span>
                            <div class="controls">
                                <input type="text" name="prenom" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><strong>Poste</strong>
                            </label>
                            <span class="tips">poste au sein de la societe</span>
                            <div class="controls">
                                <input type="text" name="poste" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><strong>Login</strong>
                            </label>
                            <span class="tips"></span>
                            <div class="controls">
                                <input type="text" name="add_login" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><strong>Mot de passe</strong>
                            </label>
                            <span class="tips"></span>
                            <div class="controls">
                                <input type="password" name="add_mdp" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><strong>Telephone</strong>
                            </label>
                            <span class="tips"></span>
                            <div class="controls">
                                <input type="text" parsley-type="phone" name="phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn btn-default col-md-3">Fermer</button>
                            <button class="btn btn-dark col-md-2 pull-right" type="submit">OK</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- END LOCKSCREEN BOX -->
        <!-- BEGIN MANDATORY SCRIPTS -->
        <script src="assets/plugins/jquery-1.11.js"></script>
        <script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
        <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END MANDATORY SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/plugins/parsley/parsley.js"></script>
        <script src="assets/plugins/parsley/parsley.extend.js"></script>
        <script src="assets/plugins/modal/js/classie.js"></script>
        <script src="assets/plugins/modal/js/modalEffects.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
    </body>

</html>
