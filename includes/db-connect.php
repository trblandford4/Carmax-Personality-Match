<?php
    function connectDB() {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

        //localhost
//        $server = 'localhost';
//        $username = 'student';
//        $password = 'student';
//        $db = 'meggles';


        $server = $url["host"];
        $username = $url["user"];
        $password = $url["pass"];
        $database = substr($url["path"], 1);


        global $db;  // makes this variable available outside of just the scope of this function
        $db = mysqli_connect($server, $username, $password, $database) or die ("I cannot connect to the database because: " . mysqli_connect_error());
    }
?>