<?php session_start(); ?>
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
    <title>Personal Vehicle Recommendations | Carmax RecommendIt</title>

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


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
<?php
$userID = $_SESSION['userID'];
$username = $_SESSION['username'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$salesAgent = $_SESSION['salesAgent'];

require_once("includes/db-connect.php");
connectDB();
?>
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="white">
            <div class="nav-wrapper">

                <ul class="left">
                    <li class="no-hover"><a href="#" data-activates="slide-out"
                                            class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light blue darken-3 hide-on-large-only"><i
                                    class="mdi-navigation-menu"></i></a></li>
                    <li>
                        <h1 class="logo-wrapper"><a href="#" class="brand-logo"><img src="images/carmax-logo.png"
                                                                                     alt="materialize logo"></a> <span
                                    class="logo-text">Materialize</span></h1></li>
                </ul>
                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="mdi-action-search"></i>
                    <input type="text" name="Search" class="grey lighten-3 header-search-input z-depth-2"
                           placeholder="Search"/>
                </div>
            </div>
        </nav>

    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation ps-container ps-active-y"
                style="width: 240px:">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="images/bobSaget.jpg" alt="Bob Saget Headshot"
                                 class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
                               data-activates="profile-dropdown"><?php echo $fname . ' ' . $lname; ?><i
                                        class="mdi-navigation-arrow-drop-down right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="bold active"><a href="agent-dashboard.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-dashboard"></i> Dashboard</a>
                </li>
                <li><a href="manage-vehicles.php"><i class="mdi-action-receipt"></i>Manage Vehicles</a>
                </li>
                <!--                <li class="li-hover">-->
                <!--                    <div class="divider"></div>-->
                <!--                </li>-->
                <!--                <li class="no-padding">-->
                <!--                    <ul class="collapsible collapsible-accordion">-->
                <!---->
                <!--                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i-->
                <!--                                        class="mdi-action-account-circle"></i> Customers</a>-->
                <!--                            <div class="collapsible-body">-->
                <!--                                <ul>-->
                <!--                                    <li><a href="user-profile-page.html"><i class="mdi-social-person-add"></i>Create New</a>-->
                <!--                                    </li>-->
                <!--                                    <li><a href="user-login.html"><i class="mdi-social-people"></i>View Existing</a>-->
                <!--                                    </li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                        </li>-->
                <!---->
                <!--                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i-->
                <!--                                        class="mdi-editor-insert-chart"></i> Reports</a>-->
                <!--                            <div class="collapsible-body">-->
                <!--                                <ul>-->
                <!--                                    <li><a href="charts-chartjs.html"><i class="mdi-action-receipt"></i>Itemized-->
                <!--                                            Sales</a>-->
                <!--                                    </li>-->
                <!--                                    <li><a href="charts-chartist.html"><i-->
                <!--                                                    class="mdi-action-trending-up"></i>Analytics</a>-->
                <!--                                    </li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                        </li>-->
                <!--                    </ul>-->
                <!--                </li>-->
            </ul>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <?php
                                echo '<h5 class="breadcrumbs-title">Welcome to your sales dashboard, ' . $fname. ' ' .
                                    $lname. '.</h5>';

                            ?>
                            <ol class="breadcrumb">
                                <li><a href="user-vehicle-listings.php">Dashboard</a></li>
                                <li class="active">Survey</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->


            <!--start container-->
            <div class="container">
                <div class="section">

                        <?php

                        for ($i = 1; $i <= 5; $i++) {
                            $segmentQuery = "SELECT * FROM vehicle where vehicle.Segment_ID = $i";
                            $findVehiclesResult = mysqli_query($db, $segmentQuery) or die("SQL error: " . mysqli_error($db));

                            while ($vehicleRow = mysqli_fetch_array($findVehiclesResult)) {
                                $vehicleURL = $vehicleRow['Vehicle_URL'];
                                $imgURL = $vehicleRow['Vehicle_Image_URL'];
                                $make = $vehicleRow["Vehicle_Make"];
                                $model = $vehicleRow["Vehicle_Model"];
                                $year = $vehicleRow["Vehicle_Year"];
                                $mileage = $vehicleRow["Vehicle_Mileage"];
                                $price = $vehicleRow["Vehicle_Price"];

                                echo '<div id="blog-posts" class="row">
                                        <div class="blog-sizer"></div>
                                            <div class="blog">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <a href="' . $vehicleURL . '"><img src="' . $imgURL . '" alt="blog-img">
                                                    </a>
                                                </div>
                                                <div class="card-content">
                                                    <p class="row">
                                                        <span class="left">' . $mileage . ' miles</span>
                                                        <span class="right">' . "$" . $price . '</span>
                                                    </p>
                                                    <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">' . $year . " " . $make . " " . $model . '</a>
                                                    </h4>';
                                switch ($i) {
                                    case 1:
                                        echo '<h4 style="color: coral">Adventurer</h4>';
                                        break;
                                    case 2:
                                        echo '<h4 style="color: dodgerblue;">Commuter</h4>';
                                        break;
                                    case 3:
                                        echo '<h4 style="color: rebeccapurple">Traveler</h4>';
                                        break;
                                    case 4:
                                        echo '<h4 style="color: #00bfa5;">Eco-friendly</h4>';
                                        break;
                                    case 5:
                                        echo '<h4 style="color: red">Sporty</h4>';
                                        break;
                                }


                                echo '</div></div></div>';
                            }
                        }


                        ?>
                    </div>
                    <!--/ end blog list -->
                </div>
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->


<!-- //////////////////////////////////////////////////////////////////////////// -->

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
<!-- chartist -->
<script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>
<!-- masonry -->
<script src="js/plugins/masonry.pkgd.min.js"></script>
<!-- imagesloaded -->
<script src="js/plugins/imagesloaded.pkgd.min.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript">
    /*
     * Masonry container for blog page
     */
    var $containerBlog = $("#blog-posts");
    $containerBlog.imagesLoaded(function () {
        $containerBlog.masonry({
            itemSelector: ".blog",
            columnWidth: ".blog-sizer",
        });
    });
</script>

</body>
</html>