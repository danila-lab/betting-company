<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Home</h1>
    <?php if (isset($_SESSION["user_id"])):?>
        <p>You are logged in</p>
        <p><a href="logout.php">Log out</a></p> 
    <?php else: ?>
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
    <?php endif; ?>
</body>
</html>