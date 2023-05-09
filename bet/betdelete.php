<?php
$servername = "localhost";
$database = "bet_db";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);


$id=$_POST['id'];
mysqli_query($conn,"DELETE FROM `bets` WHERE id='$id'");
header("Location:admin.php");