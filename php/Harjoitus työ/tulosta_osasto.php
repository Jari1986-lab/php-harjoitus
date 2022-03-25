<?php
session_start();
if (!isset($_SESSION['kayttaja'])) //onko kirjautunut
{	
	header('location: kirjaudu.php'); //ei ole
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content=
"HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
<title>Tulosta työntekijät</title>
</head>
<body>
<?php

require_once "../conf.php";
$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
mysql_select_db($kanta);
$sql = "select * from Osasto";
$tulos = mysql_query($sql);



mysql_select_db("dbp08514551"); // use-käskyä vastaava
$sql = "select *  from Osasto";

$tulos = mysql_query($sql);
	
echo ("<table border=1>\n");
	
	while ($rivi = mysql_fetch_row($tulos)) // toista niin kauan kuin on rivejä
	
{
	$i=1;
	echo ("<tr>");
	foreach ($rivi as $kentta)
	{
	if($i==1)
	{
	$OsastoID=$kentta;
	}
		echo ("<td>$kentta</td>");
		
		$i++;
	}
	echo ("<td><a href='paivita_osasto.php?OsastoID=$OsastoID'>Päivitä</a></td>");
	echo ("<td><a href='poista_osasto.php?OsastoID=$OsastoID'
	onclick=\"javascript:return confirm('Haluatko varmasti poistaa?')\">
	Poista</a></td>");	
	echo ("</tr>\n");
}
echo ("</table>\n");
?>

<a href="etusivu.php">Etusivu</a>
<p />
<a href="lisaa_osasto.php">lisää työntekija</a>
<p />

<a href="kirjaudu_ulos.php">Kirjaudu ulos</a>
</body>
</html>