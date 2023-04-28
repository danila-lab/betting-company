<?php
$servername = "localhost";
$database = "bet_db";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
mysqli_query($conn,"INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password' )");
header('Location:admin.php');