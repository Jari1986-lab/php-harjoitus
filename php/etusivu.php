<?php
	
	require_once ("funktiot.php");
	tarkista_kirjautuminen ("kayttaja");	
?>
	
<?php
	require_once ("funktiot.php");
	HTML_alku ("Etusivu");
	ylaTunniste();
	navigointi();
	aloitaSisalto();

?>	

<h3> Tervetuloa etusivulle!</h3>

<a href="tulosta_tyontekijat.php">Tulosta työntekijä</a>
<p />
<a href="etsi_projektit.php">Etsi projektit</a>
<p />
<a href="kirjaudu_ulos.php">Kirjaudu ulos</a>

<?php
	require_once ("funktiot.php");	
	lopetaSisalto();
	alaTunniste();
	html_loppu();
?>