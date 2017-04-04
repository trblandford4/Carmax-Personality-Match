<?php
session_start();

if (isset($_SESSION['userID']) != "") {
    header("Location: user-vehicle-listings.php");
}

$fname = "";
$lname = "";
$email = "";
$username = "";
$password = "";
$cpassword = "";
$userid = null;
$error = false;
$registerOK = null;

if (isset($_POST["submit"])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
}

if (!$error) {
    require_once("includes/db-connect.php");
    /*
      Executing SQL query
    */
    connectDB();
    $checkEmailQry="select * from systemuser where User_email = '$email'";
    $result = mysqli_query($db, $checkEmailQry) or die("SQL error: " . mysqli_error($db));

    if(mysqli_num_rows($result) > 0){
        $registerOK=false;
        $error=true;
    }
    else {
        $sql = "INSERT INTO `systemuser`(`User_ID`, `User_Username`, `User_Password`, 
            `User_firstName`, `User_lastName`, `User_email`, `User_Type_ID`) 
            VALUES (null,'$username','$password','$fname', '$lname','$email',1)";
        $registerResult = mysqli_query($db, $sql) or die("SQL error: " . mysqli_error($db));
        $registerOK = true;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
    }

    if($registerOK) {
        Header("Location:register-success.php");
    }
}

?>