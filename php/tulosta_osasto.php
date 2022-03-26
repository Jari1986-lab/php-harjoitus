<?php
	require_once ("funktiot.php");
	tarkista_kirjautuminen ("kayttaja");	
?>
<?php
	require_once ("funktiot.php");
	HTML_alku ("Työntekijän lisäys");
	ylaTunniste();
	navigointi();
	aloitaSisalto();	
?>	
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
<?php
	require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	html_loppu();

?>

