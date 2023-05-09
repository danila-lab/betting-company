<?php
    session_start();
    require('database.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
  <style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');

body{
	font-family: 'Poppins', sans-serif;
	font-weight: 300;
	font-size: 15px;
	line-height: 1.7;
	background-color: #1f2029;
	overflow-x: hidden;
}
/* width */
::-webkit-scrollbar {
    width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
    background: rgb(24, 25, 31); 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #808080; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}

        .css-test{
            background-color:;
            text-align:center;
            width:6rem;
            color:white;
        }
        .css-test:hover{
            background-color:yellow;
            color:black;
        }

        li{
            margin:3px;
        }

        .padding-navbar {
            padding-left: 8rem;
            padding-right: 8rem;
        }
        .class-navbar{
            height: 65px;
            font-size: 19px;
        }
        .form-control-header {
         width: 500px;  
         border-radius: 10px; 
         background-color: rgb(47, 47, 56);
         color: rgb(219, 219, 219);
         border-width: 1px;
         border-style:solid;

         border-color: gray;
        }
        .collum-main{
         height: 100%;
         padding-bottom: 10px;   
         background-color: #2e2c2c;
         color: #fff;
        }
.btn{  
  border-radius: 4px;
  height: 44px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  -webkit-transition : all 200ms linear;
  transition: all 200ms linear;
  padding: 0 30px;
  letter-spacing: 1px;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  text-align: center;
  border: none;
  background-color: #fade7f;
  color: #102770;
  box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);
}
.btn:active,
.btn:focus{  
  background-color: #102770;
  color: #ffeba7;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}
.btn:hover{  
  background-color: #102770;
  color: #ffeba7;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}
</style>
<nav class="padding-navbar navbar navbar-expand-lg navbar bg-dark class-navbar" data-bs-theme="dark">
    <div class="container-fluid">
    <a href="index.php"><img class="navbar-brand" src="/bet/pics/logo.png" width="60px" alt=""></a>
        <a class="navbar-brand g-lg-0Å¾" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
        </div>
    </div>
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

    <li class="menu-member">
        
    <?php if (isset($_SESSION["user_id"])):?>
        <a  href="profile.php" class="btn mt-1 rounded">Profile</a>
        <li><a href="logout.php" class="nav-link">Logout</a></li> 
    <?php else: ?>
        <li><a href="login.php" class="nav-link">Login</a></li>
        <li><a href="signup.php" class="nav-link">Signup</a></li>
    <?php endif; ?>       
</nav>