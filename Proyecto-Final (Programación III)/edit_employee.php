<?php
  include('connection.php');
  $con = connection();

  $id = $_POST['id'];
  $name = $_POST['name'];
  $lastName = $_POST['lastName'];
  $role = $_POST['role'];
  $email = $_POST['email'];
  $team = $_POST['team'];

  $sql = "UPDATE employees SET `emp_name`='$name', `emp_last_name`='$lastName', `role`='$role', `gmail`='$email', `team`='$team'
  WHERE `emp_id`='$id'";
  
  $query = mysqli_query($con, $sql);

  if($query){
    Header("Location: employees.php");
  };
?>