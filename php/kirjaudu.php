<?php
	require_once ("funktiot.php");
	html_alku ("kirjaudu firmaan");
	ylaTunniste();
?>

<form action='tarkista_kirjautuminen.php' method='post'>
<table>
	<tr>
	<td> Tunnus:</td> <td><input type='text' name='tunnus' /> </td>
	</tr>
	<tr>
	
	<td>Salasana: </td><td><input type='password' name='salasana' /></td>
	</tr>

</table>
<p />
<input type='submit' name='kirjaudu' value='kirjaudu' />
</form>
<p />
<?php>
	require_once ("funktiot.php");
	lopetaSisalto();
	alaTunniste();
	HTML_loppu()
?>
