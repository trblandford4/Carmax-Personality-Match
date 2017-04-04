<?php
session_start();
require_once("includes/db-connect.php");
/*
  Executing SQL query
*/
connectDB();

$vehicleID = "";
$segmentID = "";

if (isset($_POST["submit"])) {
    $vehicleID = $_POST['vehicleID'];
    $segmentID = $_POST['segmentID'];
}

if($vehicleID != "" and $segmentID != "") {

    $updateSegment="UPDATE `vehicle` SET `Segment_ID`= $segmentID WHERE Vehicle_ID = $vehicleID;";
    $updateSegmentResult = mysqli_query($db, $updateSegment) or die("SQL error: " . mysqli_error($db));
    Header("Location:agent-dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
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
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
          media="screen,projection">

</head>

<body class="login-bg">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <div class="section">
                <!--  Insert Content here  -->
                <div class="z-depth-4 grey lighten-4 card-panel" id="login-card">
                        <h4 class="header2 center">Vehicle Segment Assignment</h4>
                        <br />
                    <div class="row">
                        <form class="col s12" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="row">
                                <?php
                                // Fetch all customer id's in users segment
                                $vehicleQry = "SELECT * FROM vehicle";
                                $findVehicles = mysqli_query($db, $vehicleQry) or die("SQL error: " . mysqli_error($db)); ?>

                                <div class="input-field col s12">
                                    <select id="vehicleID" name="vehicleID" type="text">
                                        <option value="" disabled selected>Choose a Vehicle</option>
                                        <? while ($vehicleRow = mysqli_fetch_array($findVehicles)) {
                                            echo '<option value="' . $vehicleRow['Vehicle_ID'] . '">' .
                                                $vehicleRow['Vehicle_Year'] . ' ' .
                                                $vehicleRow['Vehicle_Make'] . ' ' .
                                                $vehicleRow['Vehicle_Model'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <label for="vehicleID">Select a Vehicle</label>
                                </div>
                                <div class="input-field col s12">
                                    <select id="segmentID" name="segmentID" type="text">
                                        <option value="" disabled selected>Assign a Segment</option>
                                        <option value="1">Adventurer</option>
                                        <option value="2">Commuter</option>
                                        <option value="3">Traveler</option>
                                        <option value="4">Eco-friendly</option>
                                        <option value="5">Sporty</option>
                                    </select>
                                    <label for="segmentID">Assign a Segment</label>
                                </div>

                                <div class="input-field center col s12">
                                    <button class="btn waves-effect waves-light center submit" type="submit" name="submit">Save
                                    </button>
                                </div>
                                <div class="input-field col s12">
                                    <p class="margin center medium-small sign-up"><a href="user-vehicle-listings.php">Back to your dashboard</a></p>
                                </div>
                        </form>
                    </div>
                </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->


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
<script type="text/javascript" src="js/j"></script>

</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout03/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2015 16:06:31 GMT -->

</html>