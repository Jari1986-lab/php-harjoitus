<?php
session_start();
if (!isset($_SESSION['kayttaja'])) //onko kirjautunut
{	
	header('location: kirjaudu.php'); //ei ole
}

require_once "../conf.php";
	$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
	mysql_select_db($kanta);

$TyontekijaID = $_GET ['TyontekijaID'];

$sql = "DELETE FROM Tyontekija WHERE TyontekijaID=$TyontekijaID";	
	
$tulos = mysql_query($sql);

header('Location: tulosta_tyontekijat.php'); //uudelleenohjaus
	
?>



