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
$ProjektiID = $_GET ['ProjektiID'];
$sql = "DELETE FROM Tekee WHERE TyontekijaID=$TyontekijaID and ProjektiID=$ProjektiID";	
	
$tulos = mysql_query($sql);

header('Location: tekee.php'); //uudelleenohjaus
	
?>