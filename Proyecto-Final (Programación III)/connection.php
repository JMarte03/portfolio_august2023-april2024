<?php
    function connection(){
        $host = "localhost";
        $user = "root";
        $pass = "root";

        $bd = "prog3-final-project-db";

        $connect = mysqli_connect($host, $user,  $pass);

        mysqli_select_db($connect, $bd);

        return $connect;
    }
?>