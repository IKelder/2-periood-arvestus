<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 5 - Sessiooni tagasiside</title>
  </head>

  <body>
  <?php 
  	$validUsername = "ingrid";
  	$validPassword = "Villasedsokid";

  	if ($_SESSION["username"] == $validUsername && $_SESSION["password"] == $validPassword) {
  		echo "Kasutajanimi ja parool on õiged.";
  	} else {
  		echo "Kasutajanimi ja/või parool ei klapi.";
  	}

   ?>

    <a href="index.php">Mine tagasi</a>
  </body>
</html>
