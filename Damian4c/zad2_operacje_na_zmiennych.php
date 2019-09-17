<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$potega = 2**10;

echo $potega,'<br>';

//operatory bitowe: and &, or |, not ~, xor ^, przesuniecie bitowe w lewo >>, w prawo <<
$dziesiec=0b1010;
echo $dziesiec, '<br>'; //10
$dziesiec = $dziesiec >>1;
echo $dziesiec,'<br>'; //101



//operatory logiczne
// and, &&,or ||,xor , negacja !

//sprawdz czy w sklepie kupisz rower lub hulajnoge
$sklep = 'otwarty';
$pieniadze = 1000;
$romet = true;
$hulajnoga = false;

if($sklep == 'otwarty' && $pieniadze > 1500 && ($romet|| $hulajnoga))
{
  if($romet)
  echo "kupiles rower";
}
else if ($hulajnoga==true){
  echo "kupiles hulajnoge";
}
else {
  echo "nic nie kupiles";
}
echo '<br>';

$x = 11;
$y = 11.0;
echo gettype($x),'<br>';
echo gettype($y),'<br>';
$x=2;
echo $x++;
echo ++$x;
echo $x;
$y=$x++;
echo $y;

echo $y=++$x;
echo $y;
echo ++$y;


     ?>
  </body>
</html>
