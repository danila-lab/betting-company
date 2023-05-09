<?php
$servername = "localhost";
$database = "bet_db";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);


$id=uniqid();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$errors = array();

if (empty($name)) {
    $errors[] = "Fill name form";
}

if (empty($email)) {
    $errors[] = "Fill email form";
}

if (empty($password)) {
    $errors[] = "Fill password form";
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    exit();
}

mysqli_query($conn,"INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES ('$id', '$name', '$email', '$password' )");
header('Location:admin.php');