<?php
include_once "header.php";

$servername = "localhost";
$database = "bet_db";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->query("SELECT * FROM bets");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
.slider {
  width: 100%;
  height: 400px;
  margin: 0 auto;
  overflow: hidden;
  position: relative;
}

.slider img {
  width: 100%;
  height: auto;
}

.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 36px;
  cursor: pointer;
  color: #fff;
  z-index: 1;
}

.prev {
  left: 10px;
}

.next {
  right: 10px;
}
.prev, .next {
  text-decoration: none;
}
.slider-text {
  position: absolute;
  top: 50%;
  left: 20%;
  transform: translateY(-50%);
  z-index: 1;
  color: #fff;
}
@font-face {
  font-family: 'My Custom Font';
  src: url('path/to/my-custom-font.woff2') format('woff2'),
       url('path/to/my-custom-font.woff') format('woff');
}
.slider-text h2 {
  margin: 0;
  padding: 0;
  background-image: linear-gradient(to right, yellow, orange);
  -webkit-background-clip: text;
  color: transparent;
  font-family: 'My Extraordinary Font', sans-serif;
  font-size: 4rem;
  letter-spacing: 0.2rem;
  text-transform: uppercase;
  text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
}

.slider-text p {
  font-size: 2em;
  margin: 0;
  padding: 0;
  background-image: linear-gradient(to right, yellow, orange);
  -webkit-background-clip: text;
  color: transparent;
}
.data-container {
  display: flex;
  flex-direction: row;
  align-items: center;
  border: 1px solid #ccc;
  padding: 20px;
  margin: 10px;
  color: white;
  margin-top: 50px;
}
.data-container h3 {
  margin-right: 10px; 
}
.container {
  display: flex;
  justify-content: flex-end;
}
form {
  margin-left: auto;
}

    </style>
</head>
  <body>
  <div class="slider">
  <div class="slider-text">
    <h2 class="yellow-text">BET</h2>
    <p class="yellow-text">"The odds are in your favor."</p>
  </div>
    <img src="pics/pic3.jpg" alt="Image 1">
    <img src="pics/pic1.jpg" alt="Image 2">
    <img src="pics/pic2.jpg" alt="Image 3">
    <a class="prev">&#10094;</a>
    <a class="next">&#10095;</a>
  </div>
</div>

<?php
foreach ($rows as $row) {
  echo '<div class="data-container">';
  echo '<h3>' . $row['team1'] . '</h3>';
  echo '<h3>' . $row['odds1'] . '</h3>';
  echo '<h3>' .  '–'. '</h3>';
  echo '<h3>' . $row['team2'] . '</h3>';
  echo '<h3>' . $row['odds2'] . '</h3>';
  echo '<div class="container">
    <form action="tickets.php" method="POST" style="margin-left: auto;">
      <input type="hidden" name="id" value='. $row['id'] .' required>
      <label for="amount">Enter amount:</label>
      <input type="number" name="amount" id="amount" min=1 required>
      <label for="team">Choose team:</label>
      <select name="team" id="team" required>
        <option value=' . $row['team1'] . '>' . $row['team1'] . '</option>
        <option value=' . $row['team2'] . '>' . $row['team2'] . '</option>
      </select>
      <button type="submit">Save</button>
    </form>
  </div>';
  echo '<p>' . $row['id'] . '</p>';
  echo '</div>';
}
?>


<script>
const images = document.querySelectorAll('.slider img');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
let index = 0;

prev.addEventListener('click', () => {
  images[index].style.display = 'none';
  index = (index - 1 + images.length) % images.length;
  images[index].style.display = 'block';
});

next.addEventListener('click', () => {
  images[index].style.display = 'none';
  index = (index + 1) % images.length;
  images[index].style.display = 'block';
});
</script>
</body>
</html>