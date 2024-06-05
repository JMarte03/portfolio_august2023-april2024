<?php
    include('connection.php');
    $con = connection();
    $id = $_GET['task_id'];

    $sql = "DELETE FROM tasks WHERE `task_id` = '$id'";
    $query = mysqli_query($con, $sql);
    
    if($query){
        Header("Location: tasks.php");
    };
?>