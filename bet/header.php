<?php
    session_start();
    require('database.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <style>


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
            background-color:#e6e4e3;
            color:#363534;
        }

        li{
            margin:3px;
        }

        .padding-navbar {
            padding-left: 8rem;
            padding-right: 8rem;
        }

        .red{
         background-color: red;   
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
        .btn-outline-success{
         background-color: rgb(66, 66, 255);  
         border: none;
         color:#fff; 
         border-radius: 6px;
        }

        .border-radiuss-1{
            radius:50px;    /*doesnt work*/
        }
    </style>
  </head>
  <body>

    <nav class="padding-navbar navbar navbar-expand-lg bg-body-tertiary navbar bg-dark class-navbar" data-bs-theme="dark">



    <div class="container-fluid">
    <a href="#"><img class="navbar-brand" src="/bet/pics/logo.png" width="60px" alt=""></a>
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
        <li><a href="profile.php" class=" border nav-link border border-white rounded  css-test" >Profile</a></li>
        <li><a href="logout.php" class="nav-link">Logout</a></li> 
    <?php else: ?>
        <li><a href="login.php" class="nav-link">Login</a></li>
        <li><a href="signup.php" class="nav-link">Signup</a></li>
    <?php endif; ?>       
</nav>