<?php
session_start();
if (!isset($_SESSION['kayttaja'])) //onko kirjautunut
{	
	header('location: kirjaudu.php'); //ei ole
}

require_once "../conf.php";
	$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
	mysql_select_db($kanta);

$OsastoID = $_GET ['OsastoID'];

$sql = "DELETE FROM Osasto WHERE OsastoID=$OsastoID";	
	
$tulos = mysql_query($sql);

header('Location: tulosta_osasto.php'); //uudelleenohjaus
	
?>

