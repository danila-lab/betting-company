<?php
session_start();

$servername = "localhost";
$database = "bet_db";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $amount = $_POST['amount'];

    $user_id = $_SESSION['user_id'];

    if ($amount < 0 ) {
        $errors[] = "Enter positive number";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        exit();
    }

    $sql = "UPDATE user SET balance = balance + $amount WHERE id = $user_id";

    if (mysqli_query($conn, $sql)) {
        echo "Balance updated successfully";
    } else {
        echo "Error updating balance: " . mysqli_error($conn);
    }
}
?>

