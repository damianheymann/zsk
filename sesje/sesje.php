<?php
session_start();
$_SESSION['name']= "Janusz";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
Witamy<?php echo $_SESSION['name'];?> na stronie!
<a href="sesja2.php">strona2</a>
  <?php

   ?>
  </body>
</html>
