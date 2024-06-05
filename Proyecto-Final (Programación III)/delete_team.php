<?php
    include('connection.php');
    $con = connection();
    $id = $_GET['team_id'];

    $sql = "DELETE FROM teams WHERE `team_id` = '$id'";
    $query = mysqli_query($con, $sql);
    
    if($query){
        Header("Location: teams.php");
    };
?>