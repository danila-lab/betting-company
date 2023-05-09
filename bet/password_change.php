<?php
session_start();

$servername = "localhost";
$database = "bet_db";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!isset($_SESSION['user_id'])) {
    header('Location: profile.php');
    exit();
}

// Get the form data
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

// Validate the form data
$errors = array();

if ($current_password != $_SESSION["user_pass"]) {
    $errors[] = "Current password do not match";
}
if (empty($current_password)) {
    $errors[] = "Current password is required";
}

if (empty($new_password)) {
    $errors[] = "New password is required";
}

if (empty($confirm_password)) {
    $errors[] = "Confirm new password is required";
}

if ($new_password != $confirm_password) {
    $errors[] = "New password and confirm new password do not match";
}

// If there are errors, display them
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    exit();
}

// If there are no errors, update the user's password
$id = $_SESSION['user_id'];
$password = $new_password;


// Code here to update the user's password in the database
$stmt = $conn->prepare("UPDATE user SET password = ? WHERE id = ?");
$stmt->bind_param("si", $password, $id);
$stmt->execute();
header('Location:profile.php');
?>