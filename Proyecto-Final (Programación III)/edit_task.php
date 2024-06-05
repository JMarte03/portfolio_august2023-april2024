<?php
  include('connection.php');
  $con = connection();

  $id = $_POST['id'];
  $title = $_POST['title'];
  $project = $_POST['project'];
  $emp = $_POST['assignedTo'];
  $dueDate = $_POST['dueDate'];
  $status = $_POST['status'];

  $sql = "UPDATE tasks SET `task_title`='$title', `project`='$project', `assigned_to`='$emp', `task_due_date`='$dueDate', `status`='$status'
  WHERE `task_id`='$id'";
  
  $query = mysqli_query($con, $sql);

  if($query){
    Header("Location: tasks.php");
  };
?>