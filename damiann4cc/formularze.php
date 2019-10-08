<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form method="post">
<input type="text" name="name" placeholder="Podaj imie"><br><br>
<input type="number" name="age" placeholder="Podaj wiek"><br><br>
<input type="submit" name="button" value="zatwierdz"><br><br>

<?php
if(!empty($_POST['name']) && !empty($_POST['age']))
{
$name=$_POST['name'];
$age=$_POST['age'];
echo 'Przed poprawą: ', $name,' ',$age,'<br>';
$name=trim($name);
$name=substr($name,0,10);
$name=strtolower($name);
$name=ucfirst($name);
echo 'Po poprawie: ';
echo <<< Tabela
<table>
<tr><th>IMIE</th><th>WIEK</th></tr>
<tr><td>$name</td><td>$age</td></tr>


Tabela;
}
//zabezpiecz formularz przed podaniem błędnych danych tj. białe znaki, imie nie dłuzsz niz 10 znakow
//1sza litera imienia duza a pozniej małe, wyswietl dane w formacie przed poprawa, po poprawie
//Dane poprawione wyswietl w tabeli z nagłowkami w nazwach  Imie oraz wiek

 ?>
</form>

  </body>
</html>
