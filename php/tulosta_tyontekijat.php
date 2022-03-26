<?php

	require_once ("funktiot.php");
	tarkista_kirjautuminen ("kayttaja");	
?>
	
<?php
	require_once ("funktiot.php");
	HTML_alku ("Työntekijän tulostus");
	ylaTunniste();
	navigointi();
	aloitaSisalto();
?>	

<?php
require_once ("../conf.php");
require_once ("Yhteys.php");
$yhteys = new Yhteys($palvelin, $kayttaja, $salasana, $kanta);

$sql = "select * from Tyontekija";
$tulos = $yhteys->suoritasql($sql);



mysql_select_db("dbp08514551"); // use-käskyä vastaava
$sql = "select *  from Tyontekija";

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
	$TyontekijaID=$kentta;
	}
		echo ("<td>$kentta</td>");
		
		$i++;
	}
	echo ("<td><a href='paivita_tyontekija.php?TyontekijaID=$TyontekijaID'>Päivitä</a></td>");
	echo ("<td><a href='poista_tyontekija.php?TyontekijaID=$TyontekijaID'
	onclick=\"javascript:return confirm('Haluatko varmasti poistaa?')\">
	Poista</a></td>");	
	echo ("</tr>\n");
}
echo ("</table>\n");
$yhteys->suljeyhteys();
?>


<?php
require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	html_loppu();

?>

