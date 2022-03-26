<?php
session_start();
if (!isset($_SESSION['kayttaja'])) //onko kirjautunut
{	
	header('location: kirjaudu.php'); //ei ole
}

if ($_POST['paivita'])
{
	require_once "../conf.php";
	$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
	mysql_select_db($kanta);

	$TyontekijaID = $_POST['TyontekijaID'];
	$Etunimi = strip_tags($_POST['Etunimi']);
	$Sukunimi = strip_tags($_POST['Sukunimi']);
	$Palkka = strip_tags($_POST['Palkka']);
	$Syntymaaika = strip_tags($_POST['Syntymaaika']);
	$Osasto = strip_tags($_POST['Osasto']);

$sql="update Tyontekija set
	TyontekijaID=$TyontekijaID, Etunimi='$Etunimi',
	Sukunimi='$Sukunimi', Palkka='$Palkka', Syntymaaika='$Syntymaaika',
	Osasto='$Osasto' where TyontekijaID=$TyontekijaID";
	
	$tulos=mysql_query($sql);

header('Location: tulosta_tyontekijat.php'); 
}
else
{	
	header('Location: tulosta_tyontekijat.php'); 
}
?>

