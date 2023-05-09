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
    width: 100%; 
    
}

.float-child {
    background: #747474;
    width: 50%;
    padding: 20px;
    border: 1px solid;
    width: 50%; /* Set the width of the container */
    margin: 0 auto; /* Set margin to center the container */
    text-align: center;
} 


</style>
<body>

<div class="float-container">
<div class="float-child">
  <table>
        <tr>
            <th>UserID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Balance</th>
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
            <td>' .$users[4]  . '</td>
            <td>' .$users[5]  . '</td>
        </tr>
        ';
        }
            ?>
        </table>
</div>
<div class="float-child">
  <table>
        <tr>
            <th>UserID</th>
            <th>Team1</th>
            <th>Team2</th>
            <th>Odds1</th>
            <th>Odds2</th>
        </tr>
            <?php
            $bets = mysqli_query($conn,"SELECT * FROM `bets`");
            $bets=mysqli_fetch_all($bets);
        foreach ($bets as $bet)
        {
        echo '
        <tr>
            <td>' .$bet[0]  . '</td>
            <td>' .$bet[1]  . '</td>
            <td>' .$bet[2]  . '</td>
            <td>' .$bet[3]  . '</td>
            <td>' .$bet[4]  . '</td>
            
        </tr>
        ';
        }
            ?>
        </table>
</div>
<div class="float-child">

  <table>
        <tr>
            <th>TicketID</th>
            <th>UserID</th>
            <th>BetID</th>
            <th>WinTeam</th>
            <th>Amount</th>
            <th>Coefficent</th>
        </tr>
            <?php
            $tickets = mysqli_query($conn,"SELECT * FROM `tickets`");
            $tickets=mysqli_fetch_all($tickets);
        foreach ($tickets as $ticket)
        {
        echo '
        <tr>
            <td>' .$ticket[0]  . '</td>
            <td>' .$ticket[1]  . '</td>
            <td>' .$ticket[2]  . '</td>
            <td>' .$ticket[3]  . '</td>
            <td>' .$ticket[4]  . '</td>
            <td>' .$ticket[5]  . '</td>     
        </tr>
        ';
        }
            ?>
        </table>
</div>

<div class="float-child" >
  <h1>Add User</h1>
        <form action="addadmin.php" method="post" enctype="multipart/form-data">
            <p><b>username</b></p>
            <input type="text" name="name">
            <p><b>email</b></p>
            <input type="email" name="email">
            <p><b>password</b></p>
            <input type="password" name="password"><br><br>
            <button type="submit" class="btn" style="background-color: green;">Add</button>
        </form><br>
        <h1>Delete User</h1>
        <form action="admindelete.php" method="post" enctype="multipart/form-data">
            <p><b>users_id</b></p>
            <input type="text" name="id"><br><br>
            <button type="submit" class="btn" style="background-color: red;">Delete </button>
        </form>
</div>

<div class="float-child" >
  <h1>Add Bet</h1>
        <form action="bet.php" method="post" enctype="multipart/form-data">
            <p><b>team1</b></p>
            <input type="text" name="team1">
            <p><b>team2</b></p>
            <input type="text" name="team2">
            <p><b>odds1</b></p>
            <input type="float" name="odds1"><br><br>
            <p><b>odds2</b></p>
            <input type="float" name="odds2"><br><br>

            <button type="submit" class="btn" style="background-color: green;">Add</button>
        </form><br>
        <h1>Delete Bet</h1>
        <form action="betdelete.php" method="post" enctype="multipart/form-data">
            <p><b>users_id</b></p>
            <input type="text" name="id"><br><br>
            <button type="submit" class="btn" style="background-color: red;">Delete </button>
        </form>
</div>

<div class="float-child" >
        <h1>Search the database</h1>
        <form method="get" action="search.php">
            <label for="search">Search:</label>
            <input type="text" name="search" id="search">
            <input type="submit" value="Search">
        </form>
</div>
</div>
</body>
</html>