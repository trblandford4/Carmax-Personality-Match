<?php

//// Get form responses
//$responses = array(0, 0, 0, 0, 0);
//$arrlength = count($responses);
//
//if (isset($_POST["submit"])) {
//    if (isset($_POST["outdoors"])) $responses[0] = $_POST["outdoors"];
//    if (isset($_POST["travel_often"])) $responses[1] = $_POST["travel_often"];
//    if (isset($_POST["drive_to_work"])) $responses[2] = $_POST["drive_to_work"];
//    if (isset($_POST["fuel_efficiency_important"])) $responses[3] = $_POST["fuel_efficiency_important"];
//    if (isset($_POST["adrenaline_junkie"])) $responses[4] = $_POST["adrenaline_junkie"];
//}
//
//// Count number of responses to determine segment id
//$counts = array(0, 0, 0, 0, 0);
//for($x = 0; $x < $arrlength; $x++) {
//    $counts[$responses[$x]]++;
//}
//
//// Set segment equal to index of max value in array, or 0 if more than 1 max exists.
//$maxKeys = array_keys($array, max($array));
//if (count($segment) > 1) {
//    $segment = 0;
//} else {
//    $segment = $maxKeys[0] + 1;
//}
//
//echo "Your segment id is : " . $segment;
?>

<!DOCTYPE html>
<html lang="en">

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

    <div class="container">

        <!--jqueryvalidation-->
        <div class="section">
            <div class="row center">
                <div class="col s12">
                    <div class="card-panel z-depth-5">
                        <h4 class="header2">Vehicle Personality Matching</h4>
                        <p>Please take the quick quiz below to help us find the perfect vehicle match for you.</p>
                        <br />
                        <div class="row">
                            <form class="personalityQuiz" id="personalityQuiz" method="post" action="user-vehicle-listings.php">
                                <div class="row">
                                    <div class="input-field col s10 offset-s1">
                                        <select class="validate" name="outdoors" id="outdoors" data-error=".errorTxt1">
                                            <option value="" disabled selected>Which activities sound the most fun to you?</option>
                                            <option value="0">Going on an all day hike </option>
                                            <option value="1">A quiet weekend at home </option>
                                            <option value="2">Taking a trip across the coast </option>
                                            <option value="3">Planting a garden </option>
                                            <option value="4">Going to a car show in town </option>
                                        </select>
                                        <label>Question 1</label>
                                        <div class="errorTxt1"></div>
                                    </div>
                                    <div class="input-field col s10 offset-s1">
                                        <select name="travel_often" id="travel_often" data-error=".errorTxt2">
                                            <option value="" disabled selected>How would your friends describe you?</option>
                                            <option value="0">Outdoorsy </option>
                                            <option value="1">Hard worker </option>
                                            <option value="2">Always on the road </option>
                                            <option value="3">Tree hugger </option>
                                            <option value="4">Adrenaline junkie </option>
                                        </select>
                                        <label>Question 2</label>
                                        <div class="errorTxt2"></div>
                                    </div>
                                    <div class="input-field col s10 offset-s1">

                                        <select name="drive_to_work" id="drive_to_work" data-error=".errorTxt3">
                                            <option value="" disabled selected>What is most important to you in a car?</option>
                                            <option value="0">Durability </option>
                                            <option value="1">Comfort </option>
                                            <option value="2">Luggage space </option>
                                            <option value="3">Gas mileage </option>
                                            <option value="4">Cool factor </option>
                                        </select>
                                        <label>Question 3</label>
                                        <div class="errorTxt3"></div>
                                    </div>
                                    <div class="input-field col s10 offset-s1">
                                        <select name="fuel_efficiency_important" id="fuel_efficiency_important" data-error=".errorTxt4">
                                            <option value="" disabled selected>What is one of your pet peeves? </option>
                                            <option value="0">People that don't enjoy the great outdoors </option>
                                            <option value="1">When someone cuts you off and then slows down in the left lane </option>
                                            <option value="2">Your kids screaming “Are we there yet?” On your way to Disney World </option>
                                            <option value="3">People who don't recycle </option>
                                            <option value="4">When people bring food in your car </option>
                                        </select>
                                        <label>Question 4</label>
                                        <div class="errorTxt4"></div>
                                    </div>
                                    <div class="input-field col s10 offset-s1">
                                        <select name="adrenaline_junkie" id="adrenaline_junkie" data-error=".errorTxt5">
                                            <option value="" disabled selected> What is one characteristic that describes you?</option>
                                            <option value="0">You always try new activities </option>
                                            <option value="1">You're dedicated to your career </option>
                                            <option value="2">You like to take road trips </option>
                                            <option value="3">You care about the environment </option>
                                            <option value="4">You’re a speed demon </option>
                                        </select>
                                        <label>Question 5</label>
                                        <div class="errorTxt5"></div>
                                    </div>
                                    <div class="input-field col s12">
                                        <button class="btn waves-effect waves-light center submit" type="submit" name="action">Submit
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                    <div class="input-field col s12">
                                        <p class="margin center medium-small sign-up">Don't want your recommendation yet? <a href="vehicle-listings.php">View all vehicles</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
<!--        <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>-->


<!--        <script>-->
<!--            $("#personalityQuiz").validate({-->
<!--                    rules: {-->
<!--                        activities:"required",-->
<!--                        describe_you:"required",-->
<!--                        most_important:"required",-->
<!--                    },-->
<!--                    //For custom messages-->
<!--                    messages: {-->
<!--                        uname:{-->
<!--                            required: "Enter a username",-->
<!--                            minlength: "Enter at least 5 characters"-->
<!--                        },-->
<!--                        curl: "Enter your website",-->
<!--                    },-->
<!--                    errorElement : 'div',-->
<!--                    errorPlacement: function(error, element) {-->
<!--                      var placement = $(element).data('error');-->
<!--                      if (placement) {-->
<!--                        $(placement).append(error)-->
<!--                      } else {-->
<!--                        error.insertAfter(element);-->
<!--                      }-->
<!--                    }-->
<!--                 });-->
<!--        </script>-->
</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout03/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2015 16:06:31 GMT -->

</html>