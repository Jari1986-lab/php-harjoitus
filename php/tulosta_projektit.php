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

$sql="select P.ProjektiID as 'ID', P.ProjektiNimi as 'Projektin nimi',
	concat(T.Sukunimi, ',',T.Etunimi) as 'Projektipäällikkö'
	from Projekti P,Tyontekija T
	where P.Projektipaallikko=T.TyontekijaID";
	  
	$tulos=$yhteys->suoritasql($sql);
	echo ("<h3>Firman projektit</h3>");
	lisaaTaulukkoLinkein($tulos, "ProjektiID", 1, "paivita_projekti.php", "poista_projekti.php");
	$yhteys->suljeYhteys();

?>


<?php
	require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	HTML_loppu();
?>