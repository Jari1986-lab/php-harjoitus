<?php
		require_once ("funktiot.php");
		tarkista_kirjautuminen ("kayttaja");
?>

<?php
require_once ("funktiot.php");
	HTML_alku  ("Tyontekiöiden projektit");
	ylaTunniste();
	navigointi();
	aloitaSisalto();
?>

<h3>Etsi työntekijöiden projektit</h3>
<p />
<form action='tulosta_tyontekijan_projektit.php' method='post'>
TyonkteijaID: <input type"'text' name='TyontekijaID' />
<p />
Sukunimi: <input type='text' name='Sukunimi' />
<p />

Työntekija:
<?php
require_once ("../conf.php");
require_once ("Yhteys.php");
$yhteys = new Yhteys($palvelin, $kayttaja, $salasana, $kanta);

$sql = "select TyontekijaID, concat (Sukunimi,',', Etunimi) from Tyontekija;";
$tulos = $yhteys->suoritasql($sql);

echo ("<select name='Tyontekija'>\n");
echo ("<option selected value=''>-- Valitse tästä --</option>\n");
while ($rivi=mysql_fetch_row($tulos))
{
	echo ("<option value='$rivi[0]'>$rivi[1]</option>\n");

}
echo ("</select>\n<p />");
?>
<input type='submit' name='Etsi' value='Etsi' />
</form>
<?php
require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	HTML_loppu();
?>


