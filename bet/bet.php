<?php
$servername = "localhost";
$database = "bet_db";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$id=uniqid();
$team1=$_POST['team1'];
$team2=$_POST['team2'];
$odds1=$_POST['odds1'];
$odds2=$_POST['odds2'];

$errors = array();

if (empty($team1)) {
    $errors[] = "Fill team1 form";
}

if (empty($team2)) {
    $errors[] = "Fill team2 form";
}

if (empty($odds1)) {
    $errors[] = "Fill odds1 form";
}

if (empty($odds2)) {
    $errors[] = "Fill odds2 form";
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    exit();
}

mysqli_query($conn,"INSERT INTO `bets` (`id`, `team1`, `team2`, `odds1`, `odds2`) VALUES ('$id', '$team1', '$team2', '$odds1', '$odds2' )");
header('Location:admin.php');