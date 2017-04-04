<?php
session_start();

// Unset all session values
session_unset();

// Destroy session
session_destroy();
header('Location: ../user-login.php');

?>