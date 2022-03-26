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
		
		$Tyontekija = $_POST['Tyontekija'];
		$Puhelinnumero = $_POST['Puhelinnumero'];		
		$sql = "INSERT INTO Puhelinnumero VALUES ($Tyontekija, '$Puhelinnumero')";	
		$tulos = $yhteys->suoritaSql($sql);
		header('Location: tulosta_tyontekijat.php'); 
	}	
	else
	{
		header('Location: tulosta_tyontekijat.php'); 
	}
	$yhteys->suljeYhteys();
?>