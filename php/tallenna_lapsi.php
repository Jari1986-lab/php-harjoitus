<?php
session_start();
if (!isset($_session['kayttaja']))
{
	header('location: kirjaudu.php');
}

if (isset($_POST['tallenna']))
{

require_once "../conf.php";
$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
mysql_select_db($kanta);

$Huoltaja=$_POST['TyontekijaID'];
$Nimi=$_POST['Nimi'];
$Syntymaaika=$_POST['Syntymaaika'];
$sql="insert into Lapsi values ($Huoltaja, '$Nimi', '$Syntymaaika')";

$tulos=mysql_query($sql);
}
header('location: tulosta_tyontekijat.php');

?> 