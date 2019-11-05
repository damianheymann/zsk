<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
function value ($a){
  if($a < 0){
    return 'ujemna';

  }
  else if
  ($a==0){
    return 'zero';
  }
  else {
    return 'dodatnia';
  }
}
echo value(10); //dodatnia

function getValue():int{
  return 20.99;
}
echo getValue(); //20
$x=10;//zmienna globalna
function show(){
  echo "<br>wartosc zmiennej \$x wynosi: ";
  echo $GLOBALS['x'];
}
show();
$y=10;
function show1(){
  global $y;
  echo "<br>wartosc zmiennej \$x wynosi: $y";

}
show1();

function sum (){
static $number = 10;
  echo " \$number wynosi: $number <br>";
  $number+=10;
}
sum();
sum();
sum();
sum();//number dzieki static cały czas rosnie




//argumenty
function add ($x,$y = 1){
  return $x+$y;
}
  echo add(2),'<br>';//x przyjmuje wart 2
  echo add(2,4),'<br>';//6
  $z=5;
  echo add(2,$z),'<br>';

  //typy danych

  function multi(float $x,int $y){
    return $x * $y;
  }
  echo multi(8,9),'<br>';//72
  echo multi(8,7),'<br>';//56
  echo multi(2.5,3),'<br>';//7,5
  echo multi(3,2.5),'<br>';//7,5

     ?>
  </body>
</html>
