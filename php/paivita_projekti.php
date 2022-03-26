<?php
	require_once ("funktiot.php");
	tarkista_kirjautuminen ("kayttaja");
?>

<?php
	require_once ("funktiot.php");
	HTML_alku("Tulosta projektit");
	ylaTunniste();
	navigointi();
	aloitaSisalto();
?>
<?php
require_once ("../conf.php");
require_once ("Yhteys.php");
require_once ("funktiot.php");
$yhteys = new Yhteys($palvelin, $kayttaja, $salasana, $kanta);

$ProjektiID=$_GET["ProjektiID"];
$sql="select ProjektiID, ProjektiNimi, Projektipaallikko from Projekti where ProjektiID=$ProjektiID";
$tulos=$yhteys->suoritaSql($sql);
$rivi=mysql_fetch_row($tulos);
$ProjektiID=$rivi[0];
$ProjektiNimi=$rivi[1];
$Projektipaallikko=$rivi[2];

echo "<form action=\"tallenna_projektin_paivitys.php\" method=\"post\">\n";
echo "<table>";
echo "\n<tr><td>ProjektiID:</td> <td><input type=\"text\" name=\"ProjektiID\" value=\"$ProjektiID\"/>";
echo  "<input type=\"hidden\" name=\"Vanha_ProjektiID\" value=\"$ProjektiID\"/></td></tr>\n";
echo "\n<tr><td>Projektin nimi: </td><td><input type=\"text\" name=\"ProjektiNimi\" value=\"$ProjektiNimi\"/></td></tr>";

echo "<tr><td>Projektipäällikkö:</td><td>";
$sql="select TyontekijaID, concat (Sukunimi, ' ', Etunimi) as Nimi from Tyontekija 
	order by Sukunimi";
$tulos=$yhteys->SuoritaSql($sql);
luoAlasvetovalikko ($tulos, "Projektipaallikko", $Projektipaallikko, false);
echo "\n</td></tr>\n</table>\n";
echo "\n<p><input type=\"submit\" name=\"paivita\" value=\"Päivitä\"/>\n";
echo "\n<input type=\"submit\" name=\"peruuta\" value=\"Peruuta\"/></p>\n";
echo "</form>\n";

?>
<?php
	require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	HTML_loppu();
?>