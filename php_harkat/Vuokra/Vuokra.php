<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laskettu vuokra</title>
</head>

<body>
<h1>Laskettu vuokra</h1>
<p><a href="vuokralomake.html">Vuokralomake</a></p>
<p>
  <?php
//Otetaan vastaan muuttujat vuokralomake.html tiedostolta
$lev=$_POST['lev'];
$pit=$_POST['pit'];
$nelioh=$_POST['nelioh'];
//halutaan käyttäåä jo valmiina olevia koodipätkiä esim. useasta kohteesta kutsutaan
//samaa laskenta funktiota
//include php funktio lisää parametrina annetun tiedoston koodin sivulle
include("funktiolaskevuokra.php");
//Kutsutaan funktiolaskevuokra.php sovelluksessa olevaa 
//LakseVuokra funktiota, jolle välitetään kutsuttaessa kolme parametria
//LaskeVuokra funktio palauttaa kutsukohtaan return komennolla vuokran arvon
//Saatu return palautus arvo sijoitetaan vuokra.php sovelluksessa $vuokra muuttujaan
//Testataan käyttäjän syötteitä että numerista
if(is_numeric($lev) && is_numeric($pit) && is_numeric($nelioh) )
{

	$vuokra=Laskevuokra($lev, $pit, $nelioh);
	
	echo "Asuntosi koko on: " . $lev . " * " .$pit;
	echo "<br>";
	echo "Neliohinta on: " . $nelioh;
	echo "<br>";
	
	echo "Asunnon vuokra on: " . $vuokra;
}
else
{
	echo "Antamasi arvot eivät olleet numeerisia!";


}

?>
</p>
<p>&nbsp;</p>
</body>
</html>
