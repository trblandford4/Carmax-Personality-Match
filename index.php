<?php
session_start();

if($_SESSION['salesAgent']){
    header("Location: agent-dashboard.php");
}
elseif (isset($_SESSION['userID']) != "") {
    header("Location: user-vehicle-listings.php");
}
else {
    header("Location: user-login.php");
}