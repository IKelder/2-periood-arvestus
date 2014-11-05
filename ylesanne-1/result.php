<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päringu tagasiside</title>
  </head>

  <body>
  <?php 
  if ($_GET['age'] >= 18) {
  	echo "Tere!" . $_GET['username'] . " Olete lehekulje vaatamiseks piisavalt vana!";
  } else {
  	echo "Tere" . $_GET['username'] . " Olete lehekulje kulastamiseks liiga noor!";
  }
  ?>
    <a href="index.php">Mine tagasi</a>
  </body>
</html>
