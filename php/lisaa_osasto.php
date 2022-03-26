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
<h3>Lisää osasto</h3>
<form  action='tallenna_osasto.php' method='post'>

 <p />
 <table>
 <tr><td>osastoID: </td><td><input type='text' name='OsastoID'/></td></tr>
 <tr><td>osasto nimi:</td> <td><input type='text' name='OsastoNimi'/></td></tr>
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

