<!doctype html>
<html>
<head>
    <title>Successful Login</title>
</head>
<body>
<?php
//resume the session variable on this page
session_start();

echo "<p>Hello, ".$_SESSION["username"]."</p>";

?>

</body>
</html>