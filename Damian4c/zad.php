<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  $number = 1;
  $_number = 1;
  $imie = 1;
  echo '$number';
  echo "$number";


  //typy danych


  //boolean


  $prawda = true;
  $fałśz =  false;

//integer

$całkowita = 100;
$szesnastkowa = 0xA;
$osemkowa = 010;
echo "<br>".$osemkowa;
$binarna = 0b1010;
echo '<br>',$binarna;
 //składnia herdoc

 $imie = 'Janusz';
 $wiek = 18;

 $napis = <<< TEKST
 <br>Masz na imie: $imie <br>

 Twoj wiek: $wiek <br>
TEKST;
 echo $napis;
echo <<< TEKST
Janusz <br>
TEKST;
//uzupełnij jakis drugi herdoc czy cos 


   ?>

  </body>
</html>
