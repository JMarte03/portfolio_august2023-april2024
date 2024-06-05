<?php
  include('connection.php');
  $con = connection();

  $id = $_POST['id'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $dueDate = $_POST['dueDate'];

  $sql = "UPDATE projects SET `proj_name`='$name', `proj_description`='$description', `proj_due_date`='$dueDate'
  WHERE `proj_id`='$id'";
  
  $query = mysqli_query($con, $sql);

  if($query){
    Header("Location: projects.php");
  };
?>