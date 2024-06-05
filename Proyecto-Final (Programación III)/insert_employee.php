<?php
  include('connection.php');
  $con = connection();

  $name = $_POST['name'];
  $lastName = $_POST['lastName'];
  $role = $_POST['role'];
  $email = $_POST['email'];
  $team = $_POST['team'];

  $sql = "INSERT INTO `employees` (`emp_name`, `emp_last_name`, `role`, `gmail`, `team`) 
  VALUES ('$name', '$lastName', '$role', '$email', '$team')";
  
  $query = mysqli_query($con, $sql);

  if($query){
    Header("Location: employees.php");
  };
?>