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
		$ProjektiID = $_POST['ProjektiID'];
		$ProjektiNimi = $_POST['ProjektiNimi'];		
		$Projektipaallikko = $_POST['Projektipaallikko'];		
		$sql = "INSERT INTO Projekti VALUES ($ProjektiID, '$ProjektiNimi', $Projektipaallikko)";	
		$tulos = $yhteys->suoritaSql($sql);
		header('Location: tulosta_projektit.php'); 
	}	
	else
	{
		header('Location: tulosta_projektit.php'); 
	}
	$yhteys->suljeYhteys();
?>