<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!doctype html>
<html>
<head>
    <title>My Website</title>
</head>
<body>

    <a href="logout.php">Log Out</a>
    <h1>This is the index page</h1>

    <br>
        Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>