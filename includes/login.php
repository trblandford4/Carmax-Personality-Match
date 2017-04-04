<?php
session_start();

if (isset($_SESSION['userID']) != "") {
    header("Location: user-vehicle-listings.php");
}

$username = "";
$password = "";
$userid = null;
$error = false;
$loginOK = null;

if (isset($_POST["submit"])) {
    if (isset($_POST["username"])) $username = $_POST["username"];
    if (isset($_POST["password"])) $password = $_POST["password"];
    if (isset($_POST["remember"])) $remember = $_POST["remember"];
}

if (empty($username) || empty($password)) {
    $error = true;
}



if (!$error) {
    require_once("includes/db-connect.php");
    /*
      Executing SQL query
    */
    connectDB();
    $sql="select * from systemuser where User_Username = '$username'";

    $result = mysqli_query($db, $sql) or die("SQL error: " . mysqli_error($db));
    $row = mysqli_fetch_array($result);

    if($row){
        if(strcmp($password, $row["User_Password"]) == 0){
            $loginOK = true;
            $userid = $row["User_ID"];
            $fname = $row['User_firstName'];
            $lname = $row['User_lastName'];
            $salesAgent = ($row['User_Type_ID'] == 2);
        }
        else {
            $loginOK=false;
        }
    }

    if($loginOK) {
        session_start();
        $_SESSION["userID"] = $userid;
        $_SESSION["username"] = $username;
        $_SESSION["fname"] = $fname;
        $_SESSION["lname"] = $lname;
        $_SESSION["salesAgent"] = $salesAgent;

        if($salesAgent) {
            Header("Location:agent-dashboard.php");
        }
        else {
            Header("Location:user-survey.php");
        }
    }
}
?>
