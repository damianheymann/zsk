<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>
    <?php
//skrypt 1
$connect = mysqli_connect('localhost','root','','sklep');
$sql = "SELECT `nazwa` FROM `towary` WHERE `promocja` = 1";
mysqli_set_charset($connect,'utf8');
$result= mysqli_query($connect,$sql);
echo "<ul>";
while ($row=mysqli_fetch_assoc($result)) {
  echo '<li>',$row["nazwa"],"</li>";
  // code...
}
echo "</ul>";

mysqli_close($connect);

     ?>
     <form method="post">
     <select name="towar">
    <option value="czekolada">Czekolada</option>
    <option value="baton">Baton</option>
  </select>
  <input type="submit" value="WYBIERZ">
<?php
//skrypt 2
if(isset($_POST['towar'])) {
  $towar=$_POST['towar'];
  echo $towar;
  $sql = "SELECT `cena` FROM `towary` WHERE `nazwa` = '$towar'";
  $connect = mysqli_connect('localhost','root','','sklep');
  mysqli_set_charset($connect,'utf8');
  $result= mysqli_query($connect,$sql);
  $row=mysqli_fetch_assoc($result);
  $rabat = round($row['cena']*0.85,2);
  echo $rabat;
}

 ?>

  </body>
</html>
