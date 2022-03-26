<?php
session_start();
if (!isset($_SESSION['kayttaja'])) //onko kirjautunut
{	
	header('location: kirjaudu.php'); //ei ole
}

	require_once "../conf.php";
	$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
	mysql_select_db($kanta);

if ($_POST['tallenna'])
{	



$TyontekijaID = $_POST['TyontekijaID'];
$Etunimi = $_POST['Etunimi'];
$Sukunimi = $_POST['Sukunimi'];
$Palkka = $_POST['Palkka'];
$Syntymaaika = $_POST ['Syntymaaika'];
$Osasto = $_POST ['Osasto'];
	
$sql = "INSERT INTO Tyontekija VALUES ($TyontekijaID, '$Etunimi', '$Sukunimi', 
		$Palkka, '$Syntymaaika', $Osasto)";
	
	$tulos = mysql_query($sql);

	if (isset($_POST['lapsi']))
	{
		
		header("location: lisaa_lapsi.php?TyontekijaID=$TyontekijaID");
	
	}
	
	else
	{
	header('Location: tulosta_tyontekijat.php'); //uudelleenohjaus
	}
}	
	else
	{
	header('Location: tulosta_tyontekijat.php'); //uudelleenohjaus
	}

?>

