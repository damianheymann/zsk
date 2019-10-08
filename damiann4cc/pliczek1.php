<?php
$text = <<< TEKST
zsk - zespol
szkol
komunikacji
TEKST;
echo "przed wywolaniem funkcji nl2br: <br> $text";
echo "<br> Po wyw funkcji nl2br: <br>";
echo nl2br($text),'<br><br>';

//na małe litery
echo strtolower($text),'<br>';
//na duze litery
echo strtoupper($text),'<br>';


$text= 'anna AgnieSZka tomasz';

echo ucfirst($text),'<br>';

echo ucwords($text),'<br>';


$lorem= "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ";
$kolumna = wordwrap($lorem,40,'<hr>');
echo $kolumna,'<hr>';
//czyscimy wszystko do tej pory

ob_clean();

//usuwanie białych znaków

$name='Kasia';
$name1='  Kasia';
echo 'Dlugosc zmiennej name:',strlen($name),'<br>';
echo 'Dlugosc zmiennej name1:',strlen($name1),'<br>';


echo strlen(ltrim($name1));
echo strlen(rtrim($name1));
echo strlen(trim($name1)),'<br>';

//przeszukiwaie ciagu znakówarning

$address = 'Poznan, ul. Fredry 13, tel. (61) 444-44-44';
$search = strstr($address, 'tel');
echo $search,'<hr>';


$address1 = 'Poznan, ul. Fredry 13, tel. (61) 444-44-44';
$search1 = strstr($address, 'tel',true); //Poznan ul fredry
echo $search1,'<hr>';

$mail = strstr('zsk@gmail.com','@');
echo $mail, '<br>';

$mail = strstr('zsk@gmail.com',64);
echo $mail, '<br>';

$ciag1 = 'a';
$ciag2 = 'aa';

echo strcmp($ciag1,$ciąg2); //-1
echo strcmp('zzz','zzz'); //0
echo strcmp('zza','zzz'); //-1
echo strcmp('zzz','zza'); //1
echo strcmp('zzza','zzz'),'<br>'; //1

ob_clean();
//pozycja


$poz = strpos('abcdefg','cde');
echo $poz;
$poz = strpos('abcdefg','abc');
echo $poz;


//zad1


$text1= 'abcdabcd';
$text2 = 'ab';

if(strpos($text1,$text2) ===false) {
  echo "nie znaleziono";

}
else {
  echo "znaleziono";
}

//przetwarzani ciąów znakow

$replace = str_replace('%name%', 'Janusz', 'Mam na imie: %name%');
echo $replace, '<hr>';



//substr


$surname = substr('Janusz Kowalski',2);
echo $surname; //nusz Kowalski - ucina 2sze dwa
$surname = substr('Janusz Kowalski',7,5);
echo $surname;

//zamian polskich znaków

$login= 'bączek';
$censore= array('ą','ę','ć','ń','ś','ż','ó','ł','ź');
$replace= array('a','e','c','n','s','z','o','l','z');
$newlogin= str_replace($censore,$replace,$login);
echo $newlogin; //baczek
 //napisz apke cenzurujaca zdanie podane przez uzytkownika
 //user ddaj zdanie w form


 echo <<< FORM
 <form method ="post" actiom="index.html">
 <input type="text" name="dane placeholder="wpisz dane"<br><br>
 <input type="submit"  value="zatwierdz">
 </form>
FORM;
if(isset($_POST['dane'])){
  $data = $_POST['dane'];
}
  echo $data;


$niedozwolona = array('czarny', 'biały');
$zmiana '#####';
$poprawne = str_ireplace($niedozwolona,$zmiana,$data);
echo "<h6>Błedne dane: $data<h6>";"


 ?>
