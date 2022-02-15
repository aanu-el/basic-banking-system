<?php
    // This file contains all the basic functions

    // This confirms if the sql query is successful
    function confirm_query($result){
        if(!$result){
            die('Database query failed' . mysqli_error());
          }
    }
    
    function get_user(){
        global $conn;

        $user_sql = "SELECT * FROM user";
        $user_query = mysqli_query($conn, $user_sql);
        confirm_query($user_query);

        return $user_query;
    }

    function get_all_customers(){
        global $conn;

        $customers_sql = "SELECT * FROM customers ORDER BY customers_id ASC";
        $customers_query = mysqli_query($conn, $customers_sql);
        confirm_query($customers_query);

        return $customers_query;
    }

?>