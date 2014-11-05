<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsised</title>
  </head>

  <body>
  <?php
$name = "arvestus";
$value = "Cookie on olemas";
$expire = time() + 20;
?>
<pre>
<?php 
	print_r($_COOKIE);
	if (isset($_COOKIE['arvestus'])) {
		echo $value;
	} else {
		echo "Cookie-t ei ole!";
	}
?>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_COOKIE); ?></pre>
  </body>
</html>
