<?php
    include_once 'includes/register.php';
?>

<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 2.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout03/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2015 16:06:28 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Welcome to Carmax</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon/favicon.ico" type="image/x-icon">


    <!-- CORE CSS-->

    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->
    <link href="css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body class="login-bg">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->



    <?php
    if (!empty($error_msg)) {
        echo $error_msg;
    }
    ?>
    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
            <form class="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row">
                    <div class="input-field col s12 center">
                        <h4>Register</h4>
                        <p class="center">Join to our community now !</p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-social-person prefix"></i>
                        <input id="first_name" name="first_name" type="text">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">

                        <input id="last_name" name="last_name" type="text">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <i class="mdi-action-today prefix"></i>
                    <input type="date" class="datepicker">
                    <label for="dob">Birthday</label>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-account-box prefix"></i>
                        <input id="username" name="username" type="text">
                        <label for="username" class="center-align">Username</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="email" type="email" name="email" class="validate">
                        <label for="email" data-error="wrong" class="center-align">Email</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="password" name="password" type="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="cpassword" name="cpassword" type="password">
                        <label for="cpassword">Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn blue lighten-2 waves-effect waves-light col s12" type="submit" name="submit">Register
                        </button>
                    </div>

                </div>
                <!--                <div class="row">-->
                <!--                    <div class="input-field col s12 m12 l12  login-text">-->
                <!--                        <input type="checkbox" id="remember" name="remember" value="yes" />-->
                <!--                        <label for="remember">Remember me</label>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="row">
                    <div class="input-field col s12">
                        <p class="margin center medium-small sign-up">Already have an account? <a href="user-login.php">Login</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>

    <script>
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 117, // Creates a dropdown of 15 years to control year
            max: 'Today'
        });
    </script>

</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout03/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2015 16:06:31 GMT -->

</html>