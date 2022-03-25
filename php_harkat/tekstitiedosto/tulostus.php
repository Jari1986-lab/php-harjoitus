<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tulostus</title>
</head>

<body>
<h1>Tulostuva teksti sisalto.txt tiedostosta</h1>


<?php
//Avataan tiedosto lukumoodissa, jos ei avaaminen onnistu ilmoitetaan käyttäjälle 
//"tiedostovirhe"
$tiedosto=fopen("sisalto.txt", "r") or die("tiedostovirhe! Avaaminen ei onnistunut");
//Käydään läpi tekstitiedosto silmukalla eli toistorakenteella
//loopataan kunnes tiedoston loppu eli feof palauttaa true
while(!feof($tiedosto))
{
	//luetaan tiedostoa rivi kerrallaan
	//mutta kuitenkin vain 1024 tavua riviltä 
	$rivi=fgets($tiedosto, 1024);
	//tulostetaan rivi ja rivin vaihto
	echo $rivi . "\n";
}
//suljetaan tiedosto
fclose($tiedosto);

?>

</body>

</html>
