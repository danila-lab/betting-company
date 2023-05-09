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

$betid = $_POST['id'];
$result = mysqli_query($conn, "SELECT * FROM bets");

while ($row = mysqli_fetch_assoc($result)) {
    $odds1 = $row["odds1"];
    $odds2 = $row["odds2"];
}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $id = uniqid();
  $uid = $_SESSION['user_id'];
  $betid = $_POST['id'];
  $team = $_POST['team'];
  $amount = $_POST['amount'];

  $coef = $odds1;
  

  
  $sql = "INSERT INTO tickets (id, userid, betid, winteam, amount, coef) VALUES ('$id','$uid', '$betid',  '$team', '$amount', '$coef')";
  
  if (mysqli_query($conn, $sql)) {
    echo "Data saved successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  header("Location: index.php");
  ?>