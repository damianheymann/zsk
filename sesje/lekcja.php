<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
//tablice asocjacyjna
$data=array(
  'name'=>'Janusz',
  'surname'=>'Nowak',
  'age'=>20
);
foreach ($data as $value) {

echo $value;
}

echo "<br>";
function ShowArrayAssoc ($tab){
foreach ($tab as $key => $value) {
  echo "$key:$value<br>";
}
}
ShowArrayAssoc($data);
$student = array(
  array('Anna','Nowak',20),
  array('tomasz'),
  array('Pawel','Nowak',20,'Poznan')
);
function pokasowe ($tab){
  foreach ($tab as $key => $value){
    foreach ($value as $indeks => $war){
      echo $war," ";
    }
  }
}
function jazdafor ($tab)
{
  for($i=0;$i<count($tab);$i++){
    for($j=0;$j<count($tab[$i]);$j++){
    echo $tab[$i][$j]," ";
  }}
}
pokasowe($student);
jazdafor($student);
/*napisac funkcje wyswietlajaca taqblice trojwymiarowa*/
//sortowanko
$tabli = array(10,1,5,75,-4,1000,100);
function tab3($tab){
  foreach ($tab as $value) {
    echo "$value ";
  }
}
tab3($tabli);

//niemalejaco
sort($tabli);
tab3($tabli);
//niemalejaco
rsort($tabli);
tab3($tabli);



$tab2 = array("Katarzyna","Anna","Maria","Wesołowoska");
tab3($tab2);
sort($tab2);
tab3($tab2);
echo "<br>";
//sortowanie tablicy asocjacyjnej

$tabassoc = array (
  "surname" => "Nowak",
  "name" => "Andrzej",
  "city"=> "Poznan",
  "age"=>30
);
ShowArrayAssoc($tabassoc);
sort($tabassoc);
ShowArrayAssoc($tabassoc);
asort($tabassoc);
ShowArrayAssoc($tabassoc);
arsort($tabassoc);
ShowArrayAssoc($tabassoc);
ksort($tabassoc);
ShowArrayAssoc($tabassoc);
//wyswietlanie tab

var_dump($tabassoc);
print_r($tabassoc);
echo "<pre>";
print_r($tabassoc);
echo "</pre>";




   ?>
  </body>
</html>
