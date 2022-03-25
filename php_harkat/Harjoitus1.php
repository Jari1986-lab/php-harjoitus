<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-iso-8859-1" />
<title>Harjoitus 1</title>
</head>


<body>

<?php
//Tässä otetaan käyttöön muuttuja ja sijoitetaan siihen sisältöä
//Muuttuja alkaa aina taalan kerkillä
//muuttuja on ohjelman suorituksen aikanen muistipaikka
//Pysyvään tallentamiseen tarvitaan ulkoinen tietorakenne esim. tekstitiedosto
// tai tietokanta
$do = "lot of work!"; 
//PHP:ssa muuttujat ovat heikosti tyypitettyjä, joka tarkoittaa sitä
//että muuttujaa ei tarvitse esitellä eikä kertoa mitä tietotyyppejä siihen sijoitetaan
//käyttö helppoa, mutta väärinkirjoitetusta muuttujan nimestä ei php-tulkki  "herjaa" mitenkään

//= tarkoittaa sijoittamista sen sijaan ohjelmoinnissa aina yhtäsuuruus merkki on ==
$muuttuja="sijoitettava teksti.";

//Tulostetaan muuttujan sisältö selaimelle
echo $do;
echo "<br>";
print $do;
echo "<br>";
//tulostus funktioita ovat echo ja print
//printf hoitaa muotoilun tulostuksen 
//jos haluaa tulostaa rivinvaihdon niin tulostetaan html tagi <br> 

//Kun tulostettaessa halutaan käyttää sekä staattista tekstiä, että muuttujan sisältöä
//tarvitaan merkkijono yhditelyä, joka php:ssä hoidetaan pisteellä
echo "Aphorism:" . $do . " (Pelkkä sanonta.)";




?>


</body>
</html>
