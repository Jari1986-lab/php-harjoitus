<?php

$yhteys = mysql_connect("mydb.tamk.fi", "p0851455", "Rooma773"); 
if (!$yhteys)
{
	die('EI saada yhteyttä tietokantaan!), ' . mysql_error());
}
else
	echo ("Yhteys luotu!");


mysql_select_db("dbp08514551"); // use-käskyä vastaava
$sql = "select *  from Tyontekija";

$tulos = mysql_query($sql);
	
echo ("<table border=1>\n");
	
	while ($rivi = mysql_fetch_row($tulos)) // toista niin kauan kuin on rivejä
	
{
	echo ("<tr>");
	foreach ($rivi as $kentta)
	{
	echo ("<td>$kentta</td>");
	
	}
	echo ("</tr>\n");
}
echo ("</table>\n");
?>