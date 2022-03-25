<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tietojen tulostus</title>
</head>

<body>

<?php
//lähettävältä lomakkeelta Saadut muuttujat tulevat superglobaaleina muuttujina
//Tässä esimerkin vuoksi vastaanotetaan superglobaalit ja sijoitetaan ne globaaleihin

$nimi=$_POST['nimi'];
$email=$_POST['email'];

//Tässä tulostetaan nimi merkkijonoyhdistelyllä (pisteellä) selaimelle

echo "heippa " . $nimi ;
echo "<br>";
echo "Heippa " . $_POST['nimi'] ;

echo "<br>";

echo "Email-osoite " . $email;
echo "<br>";

echo "Email-osoite " . $_POST['email'];




?>
</body>
</html>
