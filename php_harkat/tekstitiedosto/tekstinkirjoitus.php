<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>P&auml;ivitys</title>
</head>

<body>
<?php
//Esitellään sivun uudelleenohjaus funktion alussa
function redirect($url, $timeout)
  {
	echo "<meta http-equiv=\"Refresh\" content=\"$timeout; url=$url\">";
  } 
//Avataan tiedosto kirjoitustilassa 
$tiedosto2=fopen("sisalto.txt","w") or die ("Tiedoston avaaminen ei onnistunut");
//Saatu muuttuja paivitys.php:ltä
$paivitys=$_POST['paivitys'];
//Jotakin voisi tarkistaa käyttäjän syötteestä
if($paivitys!="")
{
	//kirjoitetaan muuttujan uusi sisältö sisalto.txt tiedostoon
	fwrite($tiedosto2,$paivitys);

}
//suljetaan tiedosto
fclose($tiedosto2);
//uudelleenohjaus paivitys.php sivulle
redirect("paivitys.php", "1");
?>





</body>
</html>
