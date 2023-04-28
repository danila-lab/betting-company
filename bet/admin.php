<?php
include_once "header.php";

$servername = "localhost";
$database = "bet_db";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<style>


    th,td{
        padding: 10px;
        color: black;
    }
    th{
        background: #fade7f;
        color: black;
    }
    td{
        background: #FFE400;
        color: black;
    }
    button{
        padding: 10px;
        background: #e3e3e3;
        border: unset;
        cursor: pointer;
    }

.float-container {
    
    padding: 20px;
}

.float-child {
    background: #747474;
    width: 50%;
    float: left;
    padding: 20px;
    border: 1px solid;
} 

</style>
<body>

<div class="float-container">
<div class="float-child">

  <table>
        <tr>
            <th>users_id</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
        </tr>
            <?php
            $user = mysqli_query($conn,"SELECT * FROM `user`");
            $user=mysqli_fetch_all($user);
        foreach ($user as $users)
        {
        echo '
        <tr>
            <td>' .$users[0]  . '</td>
            <td>' .$users[1]  . '</td>
            <td>' .$users[2]  . '</td>
            <td>' .$users[3]  . '</td>
        </tr>
        ';
        }
            ?>
        </table>
</div>


<div class="float-child" >
  <h1>Add</h1>
        <form action="addadmin.php" method="post" enctype="multipart/form-data">
            <p><b>username</b></p>
            <input type="text" name="name">
            <p><b>email</b></p>
            <input type="email" name="email">
            <p><b>password</b></p>
            <input type="password" name="password">&nbsp&nbsp&nbsp
            <button type="submit" class="btn" style="background-color: green;">Add</button>
        </form><br>
        <h1>Delete</h1>
        <form action="admindelete.php" method="post" enctype="multipart/form-data">
            <p><b>users_id</b></p>
            <input type="text" name="id">&nbsp&nbsp&nbsp

            <button type="submit" class="btn" style="background-color: red;">Delete </button><br><br><br>
        </form>
</div>
</div>
</body>
</html>