<?php
$username = "";
$password = "";
$userid = null;
$error = false;
$loginOK = null;

if (isset($_POST["submit"])) {
    if (isset($_POST["username"])) $username = $_POST["username"];
    if (isset($_POST["password"])) $password = $_POST["password"];
}

if (empty($username) || empty($password)) {
    $error = true;
}


if (!$error) {
    require_once("includes/db-connect.php");
    connectDB();
    $sql="select User_ID, User_Username, User_Password from systemuser where User_Username = '$username'";

    $result = mysqli_query($db, $sql) or die("SQL error: " . mysqli_error($db));
    $row = mysqli_fetch_array($result);
    if($row){
        if(strcmp($password, $row["User_Password"]) == 0){
            $loginOK = true;
        }
        else {
            $loginOK=false;
        }
    }

    if($loginOK){
        session_start();

        Header("Location:test.php");
    }
}
?>

<!doctype html>
<html>
<head>
    <title>Supplier Login</title>
    <style>
        .errlabel {color:red};
    </style>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <table>
        <tr>
            <td>Supplier ID</td>
        </tr>
        <tr>
            <td><input type="text" name="username" value="<?php if(!empty($username)) echo $username; ?>" /><?php if($error && empty($username)) echo "<span class='errlabel'> please enter a supplier ID</span>"; ?></td>
            <!--Change the value content to use the cookie-->
        </tr>
        <tr>
            <td>Supplier Name</td>
        </tr>
        <tr>
            <td><input type="password" name="password" value="<?php if(!empty($password)) echo $password; ?>" /><?php if($error && empty($password)) echo "<span class='errlabel'> please enter a supplier name</span>"; ?></td>
        </tr>
    </table>
    <table>
        <tr>
            <td><?php if(($loginOK === null) && $loginOK==false) echo "<span class='errlabel'>Username and password do not match.</span>"; ?></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Login" /></td>
        </tr>
    </table>
</form>

</body>
</html>