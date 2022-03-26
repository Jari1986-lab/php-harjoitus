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
<h3>Työntekijöiden projektien tulostus</h3>

<?php
require_once ("../conf.php");
require_once ("Yhteys.php");
$yhteys = new Yhteys($palvelin, $kayttaja, $salasana, $kanta);

$sql="select concat(T.Etunimi, ' ', T.Sukunimi), 
P.ProjektiNimi, Te.Tunnit, concat(T2.Etunimi, ' ', T2.Sukunimi)
from Tyontekija T, Projekti P, Tekee Te, Tyontekija T2
where T.TyontekijaID=Te.TyontekijaID and Te.ProjektiID=P.ProjektiID
      and T2.TyontekijaID=P.Projektipaallikko";
	  
//print_r ($_POST);

if (!empty($_POST['TyontekijaID'])) // annettu työntekijäID
{
	$TyontekijaID=$_POST['TyontekijaID'];
	$sql=$sql." and T.TyontekijaID=$TyontekijaID";
}
else if (!empty($_POST['Tyontekija'])) // valittu alasvetovalikosta työntekijä
{
	$TyontekijaID=$_POST['Tyontekija']; // alasvetovalikko
	$sql=$sql." and T.TyontekijaID=$TyontekijaID";
}

if (!empty($_POST['Sukunimi'])) // annettu työntekijän sukunimi
{
	$Sukunimi=$_POST['Sukunimi'];
	$sql=$sql." and T.Sukunimi LIKE '$Sukunimi'";
}

$tulos = $yhteys->suoritaSQL($sql);
if(mysql_num_rows($tulos)==0)
	echo("Työntekijä ei ole projekteissa");
else
{
	echo ("<table>\n");
	echo ("<th>Työntekijän nimi</th><th>Projektin nimi</th><th>Tunnit</th><th>Projektipäällikkö</th>\n");
	while ($rivi = mysql_fetch_row($tulos)) // toista niin kauan kuin on rivejä
	{
		echo ("<tr>"); // taulun rivi
		foreach ($rivi as $kentta)
		{
			echo ("<td>"); // taulun solu
			echo ("$kentta");		
			echo ("</td>");
		}
		echo ("</tr>\n");
	}
	echo ("</table>\n");
}

$yhteys->suljeYhteys();

?>


<?php
	require_once ("funktiot.php");
	HTML_loppu();
?>