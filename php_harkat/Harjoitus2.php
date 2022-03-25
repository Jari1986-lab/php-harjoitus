<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Harjoitus 2</title>
</head>

<body>
<?php
//Kommentti
/*  Monirivinen kommentti */

$tuote= "Hilavitkutin";
$hinta= 13.90;
$avl=0.22;

$myyntihinta=$hinta + $hinta * $alv;

print "hello world!";

print "<br>";
/* merrkijono yhdistettynä pisteellä */
echo $tuote . " on hyvä tuote. "; 
print "<br>";

/* printf hoitaa muotoillun tulostuksen */
printf("Hinta kun sentit pyöristetään pois: %d <br>", $hinta);

print "<br>";

echo "lause päättyy puolipisteeseen \n"; #Rivinvaihtoon on oma erikoismerkkinsä \n 

?>
</body>
</html>
