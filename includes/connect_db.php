<?php

    require_once('db_constants.php');

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if(!$conn){
        die('Database connection error' . mysqli_connect_error());
    }

?>