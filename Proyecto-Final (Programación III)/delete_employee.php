<?php
    include('connection.php');
    $con = connection();
    $id = $_GET['emp_id'];

    $sql = "DELETE FROM employees WHERE `emp_id` = '$id'";
    $query = mysqli_query($con, $sql);
    
    if($query){
        Header("Location: employees.php");
    };
?>