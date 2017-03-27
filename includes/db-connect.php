<?php
    function connectDB() {
        global $db;  // makes this variable available outside of just the scope of this function
        $db = mysqli_connect('localhost', 'student', 'student', 'meggles') or die ("I cannot connect to the database because: " . mysqli_connect_error());
    }
?>