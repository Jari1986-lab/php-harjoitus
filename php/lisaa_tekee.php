<?php
	require_once ("funktiot.php");
	tarkista_kirjautuminen ("kayttaja");	
?>
	
<?php
	require_once ("funktiot.php");
	HTML_alku ("Tekee lisäys");
	ylaTunniste();
	navigointi();
	aloitaSisalto();
	
?>	
<h3>Lisää Tekee</h3>
<form  action='tallenna_tekee.php' method='post'>

 <p />
 <table>
 <tr><td>TyontekijaID: </td><td><input type='text' name='TyontekijaID'/></td></tr>
 <tr><td>ProjektiID:</td> <td><input type='text' name='ProjektiID'/></td></tr>
 <tr><td>Työ tunnit:</td> <td><input type='text' name='Tunnit'/></td></tr>
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
