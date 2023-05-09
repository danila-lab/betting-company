<?php
include_once "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.4); 
}


.modal-content {
  background-color: #fefefe;
  margin: 15% auto; 
  padding: 20px;
  border: 1px solid #888;
  width: 80%; 
}


.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
    </style>
</head>
<body>
<section>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="pics/logo.jpg" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">
              <?php 
                $user = mysqli_query($conn,"SELECT * FROM user WHERE id='{$_SESSION['user_id']}'");
                $user=mysqli_fetch_all($user);
                echo $user[0][1];
                ?>  </h5>
            <div class="d-flex justify-content-center mb-2">
            <?php if (isset($_SESSION["user_id"]) && $_SESSION["user_role"] == 1):?>
              <a href= "admin.php" type="button" class="btn ">Admin</a>
              <a href= "logout.php" class="btn btn-outline-primary ms-1">Logout</a>
            <?php else: ?>
              <a href= "logout.php" class="btn btn-outline-primary ms-1">Logout</a>
            <?php endif; ?>  
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php 
                $user = mysqli_query($conn,"SELECT * FROM user WHERE id='{$_SESSION['user_id']}'");
                $user=mysqli_fetch_all($user);
                echo $user[0][1];
                ?>  </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">
                <?php 
                $user = mysqli_query($conn,"SELECT * FROM user WHERE id='{$_SESSION['user_id']}'");
                $user=mysqli_fetch_all($user);
                echo $user[0][2];
                ?> </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Password</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">
                  <?php 
                  $user = mysqli_query($conn,"SELECT * FROM user WHERE id='{$_SESSION['user_id']}'");
                  $user=mysqli_fetch_all($user);
                  echo $user[0][3];
                  ?> 
                  <button id="myBtn" class="btn" style="background-color: green;">Change Password</button>
                      <div id="myModal" class="modal">
                        <div class="modal-content">
                          <span class="close">&times;</span>
                            <form method="POST" action="password_change.php">
                              <label for="current_password">Current Password:</label>
                              <input type="password" id="current_password" name="current_password"><br><br>
                              <label for="new_password">New Password:</label>
                              <input type="password" id="new_password" name="new_password"><br><br>
                              <label for="confirm_password">Confirm New Password:</label>
                              <input type="password" id="confirm_password" name="confirm_password"><br><br>
                              <input type="submit" value="Change Password">
                            </form>
                        </div>
                </p>
              </div>
            </div>
          </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Balance</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-0">
                  <?php 
                  $user = mysqli_query($conn,"SELECT * FROM user WHERE id='{$_SESSION['user_id']}'");
                  $user=mysqli_fetch_all($user);
                  echo $user[0][5];
                  ?> 
                  <button id="myBtn2" class="btn" style="background-color: green;" >Deposit</button>
                  <div id="myModal2" class="modal">
                    <div class="modal-content">
                      <span class="close">&times;</span>
                      <form method="POST" action="deposit.php">
                        <label for="amount">Amount:</label>
                        <input type="number" id="amount" name="amount" required>
                        <br><br>
                        <input type="submit" value="Add Balance">
                      </form>
                    </div>
                </p>
            <hr>
            </div>
          </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                    <div class="col-sm-9">
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Statistics</span></p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6" >
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Statistics</span></p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container overflow-hidden">
  <div class="row gy-5">
    <div class="col-6">
      <div class="p-3"></div>
    </div>
    <div class="col-6">
      <div class="p-3"></div>
    </div>
    <div class="col-6">
      <div class="p-3"></div>
    </div>
    <div class="col-6">
      <div class="p-3"></div>
    </div>
    <div class="col-6">
      <div class="p-3"></div>
    </div>
  </div>
</div>
</section>
<script>
var modal2 = document.getElementById("myModal2");

var btn2 = document.getElementById("myBtn2");

var span2 = document.getElementsByClassName("close")[1];

btn2.onclick = function() {
  modal2.style.display = "block";
}

span2.onclick = function() {
  modal2.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<?php
include_once "footer.php";
?>
</body>
</html>