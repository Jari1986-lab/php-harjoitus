<?php
	require_once ("funktiot.php");
	tarkista_kirjautuminen ("kayttaja");
?>
<?php
	require_once ("../conf.php");
	require_once ("Yhteys.php");
	$yhteys = new Yhteys($palvelin, $kayttaja, $salasana, $kanta);
	if ($_POST['tallenna'])
	{	
		$TyontekijaID = $_POST['TyontekijaID'];
		$ProjektiID = $_POST['ProjektiID'];		
		$Tunnit = $_POST['Tunnit'];	
		$sql = "INSERT INTO Tekee (TyontekijaID, ProjektiID, Tunnit) 
		VALUES ($TyontekijaID, $ProjektiID, $Tunnit)";		
		$tulos = $yhteys->suoritaSql($sql);
		header('Location: tekee.php'); 
	}	
	else
	{
		header('Location: tekee.php'); 
	}
	$yhteys->suljeYhteys();
?>