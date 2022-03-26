<?php
require_once "../conf.php";
$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
mysql_select_db($kanta);

$tunnus=$_POST['tunnus'];
$salasana=md5($_POST['salasana']);


$sql="select tunnus, salasana from kayttaja where tunnus='$tunnus' and 
	 salasana='$salasana'";


	 
	$tulos=mysql_query($sql);

if (mysql_num_rows($tulos) ==1)
{
		session_start(); //istunto
	$_SESSION['kayttaja']=$tunnus; //asetetaan istuntomuistiin käyttäjä
	header ('location: etusivu.php');	


}	
else
	header('Location: kirjaudu.php'); 



?>

