<?php
 include ("content/include/var.php");
 // include ("content/include/dbconnexion.php");
 ?>
 

<!DOCTYPE html>
<!--
- Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: ALLALI Redha
Contact: allali.redha@gmail.com
Follow: www.twitter.com/xxxx
Like: www.facebook.com/xxxx
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr">
<!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>GPAV | Login </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- for edge compatibilities -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/simple-line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="plugins/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="content/pages/css/login3.css" rel="stylesheet" type="text/css" /> <!  ------------------a revoir -------------------------------------/!>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN THEME STYLES -->
    <link href="content/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="content/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="content/layout/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="content/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="content/layout/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="login">
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="index.php">
            <img src="content/layout/img/logo_AT_w.png" alt="" />
        </a>
    </div>
    <!-- END LOGO -->
    
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <!-- END SIDEBAR TOGGLER BUTTON -->


    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="ctrl_user.php" method="post">
            <h3 class="form-title">Connexion </h3>
            
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
			Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Adresse e-mail pro" name="username" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" />
                </div>
            </div>
            <div class="form-actions">
                <label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> Remember me </label>
                <button type="submit" class="btn green-haze pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
               <p> <a href="javascript:;" id="forget-password">
				Mot de passe oublié ? </a></p> 
            </div>


        </form>
        <!-- END LOGIN FORM -->

        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="forget-form" action="index.html" method="post">
            <h3>Mot de passe oublié ?</h3>
            <p>
                Enter your e-mail address below to reset your password.
            </p>
            <div class="form-group">
                <div class="input-icon">
                    <i class="fa fa-envelope"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
                </div>
            </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
                <button type="submit" class="btn green-haze pull-right">
			Submit <i class="m-icon-swapright m-icon-white"></i>
			</button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->
        
        <!-- BEGIN REGISTRATION FORM -->   
        <!-- END REGISTRATION FORM -->

    </div>
    <!-- END LOGIN -->



    <!-- BEGIN COPYRIGHT -->
    <div class="copyright">
        2016 &copy; Algerie Telecom. Developpement d'Affaires.
    </div>
    <!-- END COPYRIGHT -->



<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
<script src="plugins/respond.min.js"></script>
<script src="plugins/excanvas.min.js"></script>
<![endif]-->
    <script src="plugins/jquery.min.js" type="text/javascript"></script>
    <script src="plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="plugins/bootstrap/scripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="plugins/select2/select2.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="content/scripts/metronic.js" type="text/javascript"></script>
    <script src="content/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="content/layout/scripts/demo.js" type="text/javascript"></script>
    <script src="content/pages/scripts/login.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            Login.init();
            Demo.init();
        });
    </script>
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>
