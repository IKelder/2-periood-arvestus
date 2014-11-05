<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>

  <?php

$username = isset($_POST["username"]) ? $_POST["username"] : "Puudub";
$sex = isset($_POST["sex"]) ? $_POST["sex"] : "Puudub";
if ($username == "Puudub") {
  echo "Palun minge tagasi ja sisestage nimi.";
  }
elseif ($sex == "Puudub") {
  echo "Palun minge tagasi ja valige sugu";
} elseif ($username == "Puudub" || $sex == "Puudub") {
	echo "Palun minge tagasi ja taitke valjad";
} else {
	echo "Tere {$username}! Olete {$sex}";
}
?>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_POST); ?></pre>

    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
