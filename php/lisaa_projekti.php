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
<h3>Lisää projekti</h3>
<form  action='tallenna_projekti.php' method='post'>

 <p />
 <table>
 <tr><td>ProjektiID </td><td><input type='text' name='ProjektiID'/></td></tr>
 <tr><td>Projektin nimi:</td> <td><input type='text' name='ProjektiNimi'/></td></tr>
 <tr><td>projektipäällikko:</td> <td><input type='text' name='Projektipaallikko'/></td></tr>
 </table>
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

