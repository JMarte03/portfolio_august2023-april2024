<?php
    include('connection.php');
    $con = connection();

    $id = $_GET['team_id'];

    $sql = "SELECT * FROM teams WHERE `team_id` = '$id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit team</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
</head>
<body>
        <form action="edit_team.php" method="POST">
              <div
                class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
              >
                <input
                    type="hidden"
                    name="id"
                    value="<?= $row['team_id'] ?>"
                />
                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Title:</span>
                  <input
                    type="text"
                    name="title"
                    required
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="<?= $row['team_title'] ?>"
                    />
                </label>
                <br>

                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Leader:</span>
                  <input
                    type="text"
                    name="leader"
                    required
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="<?= $row['leader'] ?>"
                    />
                </label>
                <br>

                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Description:</span>
                  <textarea 
                    name="description" 
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" 
                    rows="3"
                    placeholder="<?= $row['team_description'] ?>"
                  >
                  </textarea>
                </label>
                <br>

                <div>
                  <input
                    type="submit" 
                    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    value="Save changes"
                    >
                </div>
                <br>
            </form>
</body>
</html>