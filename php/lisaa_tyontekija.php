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

<form  action='tallenna_tyontekija.php' method='post'>

 TyontekijaID: <input type='text' name='TyontekijaID' />
 <p />

 Etunimi  <input type='text' name='Etunimi' />
 <p />

 Sukunimi  <input type='text' name='Sukunimi' />
 <p />

 Palkka   <input type='text' name='Palkka' />
 <p />

 Syntymaaika   <input type='text' name='Syntymaaika' />
 <p />

 
 <?php
require_once "../conf.php";
$yhteys = mysql_connect($palvelin, $kayttaja, $salasana);
mysql_select_db($kanta);
$sql="select OsastoID, OsastoNimi from Osasto order by OsastoNimi";
$tulos=mysql_query($sql);
echo ("<select name='Osasto'>\n");
while ($rivi=mysql_fetch_row($tulos))
 
{
	echo ("<option value='$rivi[0]'>$rivi[1]</option>\n");
	
} 
echo ("</select>\n")
?>

<p />
Lisätäänkö lapsi: <input type='checkbox' name='lapsi' />
<p />
<input type='submit' name='tallenna' value='tallenna' />
<input type='submit' name='peruuta' value='peruuta' />
</form>
<p />


<?php
require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	html_loppu();

?>
