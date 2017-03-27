<?php
    $username = "";
    $password = "";
    $remember = "no";
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
        require_once("db-connect.php");
        /*
          Executing SQL query
        */
        connectDB();
        $sql="select User_Password from user where User_Password='$password'";
        
        $result = mysqli_query($db, $sql) or die("SQL error: " . mysqli_error());
        $row = mysqli_fetch_array($result);
        
        if($row){
            echo "YOUR PASS = " . $password . " DB PASS = " . $row["User_Password"];
            if(strcmp($password, $row["User_Password"]) == 0){
                  $loginOK = true;
            }
            else {
              $loginOK=false;
            }
        }

        if($loginOK) {
            session_start();
            $_SESSION["password"] = $password;

            Header("Location:user-survey.php");
        }
    }
?>