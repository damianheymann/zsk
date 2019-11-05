<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form method="post">
<input type="number" name="ile" placeholder="ilu masz czlonkow rodziny">
<input type="submit" value="spr"><br>

<?php





$x = $_POST['ile'];

if($x>1 && $x<70)
{
  for( $i=1;$i<=$x;$i++){

    echo "<input type=\"number\" placeholder=\"podaj wiek $i osoby\" name=\"age$i\"><br>";
}}
$j=[""];
for( $i=1;$i<=$x;$i++)
{
  $j[$i]=$_POST["age$i"];
}
 ?>
</form>

  </body>
</html>
