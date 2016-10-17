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
        <a href="index.html">
            <img src="content/layout/img/logo_AT_w.png" alt="" />
        </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="index.html" method="post">
            <h3 class="form-title">Connexion </h3>
            <p>
              <?php
              
              print_r (" dd");
               ?>
             </p>

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
            </div>
            <div class="login-options">
                <h4>Or login with</h4>
                <ul class="social-icons">
                    <li>
                        <a class="facebook" data-original-title="facebook" href="javascript:;">
                        </a>
                    </li>
                    <li>
                        <a class="twitter" data-original-title="Twitter" href="javascript:;">
                        </a>
                    </li>
                    <li>
                        <a class="googleplus" data-original-title="Goole Plus" href="javascript:;">
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" data-original-title="Linkedin" href="javascript:;">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="forget-password">
                <h4>Forgot your password ?</h4>
                <p>
                    no worries, click <a href="javascript:;" id="forget-password">
				here </a> to reset your password.
                </p>
            </div>
            <div class="create-account">
                <p>
                    Don't have an account yet ?&nbsp; <a href="javascript:;" id="register-btn">
				Create an account </a>
                </p>
            </div>
        </form>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="forget-form" action="index.html" method="post">
            <h3>Forget Password ?</h3>
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
        <form class="register-form" action="index.html" method="post">
            <h3>Sign Up</h3>
            <p>
                Enter your personal details below:
            </p>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Full Name</label>
                <div class="input-icon">
                    <i class="fa fa-font"></i>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="fullname" />
                </div>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Email</label>
                <div class="input-icon">
                    <i class="fa fa-envelope"></i>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Address</label>
                <div class="input-icon">
                    <i class="fa fa-check"></i>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">City/Town</label>
                <div class="input-icon">
                    <i class="fa fa-location-arrow"></i>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="City/Town" name="city" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Country</label>
                <select name="country" id="select2_sample4" class="select2 form-control">
					<option value=""></option>
					<option value="DZ">Algeria</option>
					<option value="FR">France</option>
					<option value="AE">United Arab Emirates</option>
					<option value="GB">United Kingdom</option>
					<option value="US">United States</option>
				</select>
            </div>
            <p>
                Enter your account details below:
            </p>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                <div class="controls">
                    <div class="input-icon">
                        <i class="fa fa-check"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>
			<input type="checkbox" name="tnc"/> I agree to the <a href="javascript:;">
			Terms of Service </a>
			and <a href="javascript:;">
			Privacy Policy </a>
			</label>
                <div id="register_tnc_error">
                </div>
            </div>
            <div class="form-actions">
                <button id="register-back-btn" type="button" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
                <button type="submit" id="register-submit-btn" class="btn green-haze pull-right">
			Sign Up <i class="m-icon-swapright m-icon-white"></i>
			</button>
            </div>
        </form>
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
