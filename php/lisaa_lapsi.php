<?php
	require_once ("funktiot.php");
	tarkista_kirjautuminen ("kayttaja");	
?>
	
<?php
	require_once ("funktiot.php");
	HTML_alku ("Lisää lapsi");
	ylaTunniste();
	navigointi();
	aloitaSisalto();

?>	

<form action='tallenna_lapsi.php' method='POST'>
Nimi: <input type='text' name='Nimi' />
<p />
Syntymäaika: <input type='text' name='Syntymaaika' />
<p />
<input  type='hidden' name='TyontekijaID'
 value='<?php print $_GET['TyontekijaID']; ?>' />
<p />
<input type='submit' name='tallenna' value='tallenna' />
<input type='submit' name='peruuta' value='peruuta' />
</form>

<?php
	require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	HTML_loppu();
?>