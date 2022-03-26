<?php
require_once ("funktiot.php");
	tarkista_kirjautuminen ("kayttaja");	
?>
	
<?php
	require_once ("funktiot.php");
	HTML_alku ("Tekee päivitys");
	ylaTunniste();
	navigointi();
	aloitaSisalto();


require_once "../conf.php";
$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
mysql_select_db($kanta);

$TyontekijaID=$_GET['TyontekijaID'];
$sql="select TyontekijaID,ProjektiID, Tunnit 
from Tekee where TyontekijaID=$TyontekijaID";
$tulos=mysql_query($sql);
$rivi=mysql_fetch_row($tulos);
$TyontekijaID=$rivi[0];
$ProjektiID=$rivi[1];
$Tunnit=$rivi[2];

echo "<form action='tallenna_tekee_paivitys.php' method='post'>\n";
echo "TyontekijaID: <input type='text' name='TyontekijaID' value='$TyontekijaID'>\n";
echo "<p>";
echo "ProjektiID: <input type='text' name='ProjektiID' value='$ProjektiID'>\n";
echo "<p>";
echo "Tunnit: <input type='text' name='Tunnit' value='$Tunnit'>\n";
echo "<p>";

 

echo "<input type='submit' name='paivita' value='Päivitä'>\n";
echo "<input type='submit' name='peruuta' value='Peruuta'>\n";
echo "<form>\n";

?>




<?php
	require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	html_loppu();

?>

