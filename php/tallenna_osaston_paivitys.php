<?php
	require_once ("funktiot.php");
	tarkista_kirjautuminen ("kayttaja");
?>
<?php

if ($_POST['paivita'])
{
	require_once ("../conf.php");
	require_once ("Yhteys.php");
	$yhteys = new Yhteys($palvelin, $kayttaja, $salasana, $kanta);

	$OsastoID = $_POST['OsastoID'];
	$OsastoNimi = $_POST['OsastoNimi'];
	$Vanha_OsastoID=$_POST['Vanha_OsastoID'];

	$sql="update Osasto set OsastoID=$OsastoID, OsastoNimi='$OsastoNimi' 
		where OsastoID=$Vanha_OsastoID";
	
	$tulos=$yhteys->suoritaSql($sql);

	header('Location: tulosta_osasto.php'); 
}
else
{	
	header('Location: tulosta_osasto.php'); 
}
?>

