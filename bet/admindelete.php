<?php
$servername = "localhost";
$database = "bet_db";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$errors = array();

$id=$_POST['id'];
mysqli_query($conn,"DELETE FROM `user` WHERE id='$id'");
header("Location:admin.php");