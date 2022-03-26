<?php
session_start();
if (!isset($_SESSION['kayttaja'])) 
{	
	header('location: kirjaudu.php'); 
}

if ($_POST['paivita'])
{
	require_once "../conf.php";
	$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
	mysql_select_db($kanta);

	$TyontekijaID = $_POST['TyontekijaID'];
	$ProjektiID = strip_tags($_POST['ProjektiID']);
	$Tunnit = strip_tags($_POST['Tunnit']);
	

$sql="update Tekee set
	TyontekijaID=$TyontekijaID, ProjektiID=$ProjektiID,
	Tunnit='$Tunnit'where TyontekijaID=$TyontekijaID";

	$tulos=mysql_query($sql);

header('Location: tekee.php'); 

}
else
{	
	header('Location: tekee.php'); 
}
?>

