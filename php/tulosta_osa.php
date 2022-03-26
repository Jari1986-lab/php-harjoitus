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
$sql = " select P.ProjektiNimi, T.ToimittajaNimi, O.Osanimi
from Projekti P, Toimittaja T, Osa O, Osan_toimitus OT
where P.ProjektiID=OT.ProjektiID and T.ToimittajaID=OT.ToimittajaID and O.OsaID=OT.OsaID";
$tulos = mysql_query($sql);

mysql_select_db("dbp08514551"); 
$sql = "select P.ProjektiNimi, T.ToimittajaNimi, O.Osanimi
from Projekti P, Toimittaja T, Osa O, Osan_toimitus OT
where P.ProjektiID=OT.ProjektiID and T.ToimittajaID=OT.ToimittajaID and O.OsaID=OT.OsaID";
$tulos = mysql_query($sql);


	
echo ("<table border=1>\n");
	
	while ($rivi = mysql_fetch_row($tulos)) 
	
{
	$i=1;
	echo ("<tr>");
	foreach ($rivi as $kentta)
	{
	if($i==1)
	{
	$Toimittaja=$kentta;
	}
		echo ("<td>$kentta</td>");
		
		$i++;
	}
	
}
echo ("</table>\n");
?>
<?php
	require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	html_loppu();

?>
