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

	$ProjektiID = $_POST['ProjektiID'];
	$ProjektiNimi = $_POST['ProjektiNimi'];
	$Vanha_ProjektiID=$_POST['Vanha_ProjektiID'];
	$Projektipaallikko=$_POST['Projektipaallikko'];
	$sql="update Projekti set ProjektiID=$ProjektiID, ProjektiNimi='$ProjektiNimi', 
		Projektipaallikko=$Projektipaallikko 
		where ProjektiID=$Vanha_ProjektiID";

	$tulos=$yhteys->suoritaSql($sql);
	
	header('Location: tulosta_projektit.php'); 
}
else
{	
	header('Location: tulosta_projektit.php'); 
}
?>

