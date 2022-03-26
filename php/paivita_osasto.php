<?php
	require_once ("funktiot.php");
	tarkista_kirjautuminen ("kayttaja");	
?>	
<?php
	require_once ("funktiot.php");
	HTML_alku ("Työntekijän päivitys");
	ylaTunniste();
	navigointi();
	aloitaSisalto();
?>	
<?php

require_once "../conf.php";
$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
mysql_select_db($kanta);

$OsastoID=$_GET['OsastoID'];
$sql="select OsastoID, OsastoNimi
from Osasto where OsastoID=$OsastoID";
$tulos=mysql_query($sql);
$rivi=mysql_fetch_row($tulos);
$OsastoID=$rivi[0];
$OsastoNimi=$rivi[1];


echo "<form action=\"tallenna_osaston_paivitys.php\" method=\"post\">\n";
echo "<table>";
echo "\n<tr><td>OsastoID:</td> <td><input type=\"text\" name=\"OsastoID\" value=\"$OsastoID\"/>";
echo  "<input type=\"hidden\" name=\"Vanha_OsastoID\" value=\"$OsastoID\"/></td></tr>\n";
echo "\n<tr><td>Osaston nimi: </td><td><input type=\"text\" name=\"OsastoNimi\" value=\"$OsastoNimi\"/></td></tr>";
echo "</table>\n";

echo "\n<p><input type=\"submit\" name=\"paivita\" value=\"Päivitä\"/>\n";
echo "\n<input type=\"submit\" name=\"peruuta\" value=\"Peruuta\"/></p>\n";
echo "</form>\n";

?>

<?php
	require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	html_loppu();

?>


