<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php  //operatory rzutowania
  //bool,int,float,string,array,object, unset

  $text = '123ssd';
  $x = (int)$text;
  echo $x. "<br>";
  $text1= -1;
  $x1 = (bool)$text1;
  echo $x1."<br>"; //1

  $text2 = 10;
  $x2 = (unset)$text2;
  echo $x2."<br>"; //pusto
  echo gettype($x2)."<br>";//null
  //rozmiar typu integer
  echo PHP_INT_SIZE."<br>"; //8bajtow
  //kontrola typow zmiennych
  $x = 10;
  echo is_int($x)."<br>"; // true
  echo is_string($x)."<br>"; //false nic nie zwraca
  echo is_bool($x)."<br>"; // false jak wyzej
  echo is_float($x)."<br>"; //false jw.
  echo is_null($x)."<br>"; //false

  $w;
  echo @$w; //notice
  echo @gettype($w),"<hr>"; //null

   //zienne globalne
   //$_GET,$_POST,$_COOKIE, $_FILES, $_SESSION, $_SERWER
   echo $_SERVER['SERVER_PORT'],"<br>"; //:80
   echo $_SERVER['SERVER_NAME'],"<br>";//127.0.0.1
   echo $_SERVER['SCRIPT_NAME'],"<br>";//sciezka do pliku
   echo $_SERVER['SERVER_PROTOCOL'],"<br>";//protokol SEVRWEra
   echo $_SERVER['DOCUMENT_ROOT'],"<br>"; // lokalizacja httdocs


   $lokalPliku = $_SERVER['DOCUMENT_ROOT'];
   $lokalPliku = $_SERVER['SCRIPT_NAME'];
   ECHO $lokalPliku,"<br><hr><br>";


   //stałe

   //stałe z duzych liter
//wez od adama bo nie zdazyłes






    ?>
  </body>
</html>
