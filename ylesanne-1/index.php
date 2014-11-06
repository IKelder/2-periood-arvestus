<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päring</title>
  </head>
  <body>
  <pre>
  <?php
  	$username = 'Ingrid';
  	$age = '15';
  	$link_page = "result.php?username=".$username."&age=".$age;
  ?>
  </pre>
  <a href="<?php echo $link_page; ?>">Teine leht</a>
  </body>
</html>
