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

$TyontekijaID=$_GET['TyontekijaID'];
$sql="select TyontekijaID, Etunimi, Sukunimi, Palkka, Syntymaaika,
Osasto from Tyontekija where TyontekijaID=$TyontekijaID";
$tulos=mysql_query($sql);
$rivi=mysql_fetch_row($tulos);
$TyontekijaID=$rivi[0];
$Etunimi=$rivi[2];
$Sukunimi=$rivi[2];
$Palkka=$rivi[3];
$Syntymaaika=$rivi[4];
$Osasto=$rivi[5];

echo "<form action='tallenna_paivitys.php' method='post'>\n";
echo "TyontekijaID: <input type='text' name='TyontekijaID' value='$TyontekijaID'>\n";
echo "<p>";
echo "Etunimi: <input type='text' name='Etunimi' value='$Etunimi'>\n";
echo "<p>";
echo "Sukunimi: <input type='text' name='Sukunimi' value='$Sukunimi'>\n";
echo "<p>";
echo "Palkka: <input type='text' name='Palkka' size='5' value='$Palkka'>\n";
echo "<p>";
echo "Syntymaaika: <input type='text' name='Syntymaaika' value='$Syntymaaika'>\n";
echo "<p>";
echo "<p>";

$sql="select OsastoID, OsastoNimi from Osasto order by OsastoNimi";
$tulos=mysql_query($sql);
echo ("<select name='Osasto'>\n");
while ($rivi=mysql_fetch_row($tulos))
 
{
    if ($Osasto==$rivi[0])
    echo ("<option selected value='$rivi[0]'>$rivi[1]</option>\n");
    else
    echo ("<option value='$rivi[0]'>$rivi[1]</option>\n");
    
} 
echo "<input type='submit' name='paivita' value='Päivitä'>\n";

echo "<input type='submit' name='peruuta' value='Peruuta'>\n";
echo "<form>\n";

?>
<p />


<?php
	require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	html_loppu();

?>

