<?php
    include('connection.php');

    function getEmployeeCount() {
        $con = connection();

        $sql = "SELECT COUNT(emp_name) as name_count FROM employees";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($query);

        $nameCount = $row['name_count'];
        return $nameCount;
    }

    function getPendingTasksCount(){
        $con = connection();

        $sql = "SELECT COUNT(task_id) as task_count FROM tasks WHERE `status` = 'Pending'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($query);

        $taskCount = $row['task_count'];
        return $taskCount;    
    }

    function getProjectsCount(){
        $con = connection();

        $sql = "SELECT COUNT(proj_id) as proj_count FROM projects";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($query);

        $projectCount = $row['proj_count'];
        return $projectCount;    
    }

    function getTeamsCount(){
        $con = connection();

        $sql = "SELECT COUNT(team_id) as teams_count FROM teams";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($query);

        $teamsCount = $row['teams_count'];
        return $teamsCount;    
    }

    function fetchDataFromQuery($sqlQuery) {
        $con = connection();
        $query = mysqli_query($con, $sqlQuery);
        $data = [];

        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }

        return $data;
    }
?>

