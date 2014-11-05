<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päring</title>
  </head>
  <body>
  <form action="result.php" method="post" style="width: 250px">
	<input type="text" name="username" placeholder="Username"><br>
	<input type="text" name="age" placeholder="Age"><br>
	<input type="submit" value="Saada" name="submit">
</form>
  <pre>
  <?php 
  	$link_page = "result.php";
  	$username = $_GET['Ingrid'];
  	$age = $_GET[21];
  	print_r ($_GET);
  ?>
  </pre>
  <a href="<?php echo $link_page; ?>">Teine leht</a>
  </body>
</html>
