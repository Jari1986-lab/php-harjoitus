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
		$OsastoID = $_POST['OsastoID'];
		$OsastoNimi = $_POST['OsastoNimi'];		
		$sql = "INSERT INTO Osasto VALUES ($OsastoID, '$OsastoNimi')";	
		$tulos = $yhteys->suoritaSql($sql);
		header('Location: tulosta_osasto.php'); 
	}	
	else
	{
		header('Location: tulosta_osasto.php'); 
	}
	$yhteys->suljeYhteys();
?>