<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Vieraskirja</title>
</head>

<body>
<?php
//Luetaan viestit viestit taulukkomuuttujaan
$viestit=file("viestit.txt");
//käännetään taulukko, jolloin uusin viesti ylimpänä
$viestit=array_reverse($viestit);
//viestien määrä on suoraan talukon rivien määrä
$viestimaara=count($viestit);
//tulostetaan viestit selaimelle
//tiedetään viestimäärä ja missä muuttujassa sisältö on niin askeltavassa silmukassa käydään taulukko läpi
for($i=0;$i<$viestimaara;$i++)
{
	//$viestit[$i] on merkkijono, joka sisältää yhden viestin tiedot putkimerkeillä erotettuna
	//jaetaan rivin osat $tiedot taulukko muuttujaan
	$tiedot=explode("|", $viestit[$i],4);
	//erotellaan tiedot omiin muuttujiinsa
	$nimi=$tiedot[0];
	$email=$tiedot[1];
	$aika=$tiedot[2];
	$viesti=$tiedot[3];
	//tulostetaan yhden viestin tiedot
	echo "Lähettäjä " . $nimi . " email " . $email;
	echo "<br>";
	echo "Aika: " . date("d.m.Y H:i" , $aika);
	echo "<br>";
	echo $viesti;
}
?>
</body>
</html>
