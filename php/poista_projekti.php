<?php
session_start();
if (!isset($_SESSION['kayttaja'])) //onko kirjautunut
{	
	header('location: kirjaudu.php'); //ei ole
}

require_once "../conf.php";
	$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
	mysql_select_db($kanta);

$ProjektiID = $_GET ['ProjektiID'];
$TyontekijaID = $_GET ['$TyontekijaID'];

$sql = "DELETE FROM Projekti WHERE ProjektiID=$ProjektiID, TyontekijaID=$TyontekijaID";	
	
$tulos = mysql_query($sql);

header('Location: tulosta_projektit.php'); //uudelleenohjaus
	
?>

