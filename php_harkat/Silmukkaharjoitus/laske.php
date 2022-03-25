<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Keskiarvon laskenta</title>
</head>

<body>
<?php
//Esitell��n uudelleenohjausfunktio
function redirect($url, $timeout)
{
echo "<meta http-equiv=\"Refresh\" content=\"$timeout; url=$url\">";
} 
//Otetaan tarkistettava muuttuja k�sittelyyn
//T�ss� tapauksessa k�ytt�j�n antaman sy�tteen on 0 suurempi

$syote1=$_POST['syote1'];

if (is_numeric($syote1) && $syote1>0 )
{
//jos sy�te numeerinen niin kerrotaan k�ytt�j�lle mit� pit�� tehd�
print " Sy�t� valitsemasi m��r�n mukaan lukuja ohjelmaan!";
}
else
{
print " Et antanut numeerista nollaa suurempaa kokonaisluku sy�tett�.";
redirect("keskiarvo.html", "1");
  //exit lopettaa kyseisen sovelluksen t�h�n koodiriviin
  //exitin j�lkeist� koodirivi� ei en�� suoriteta
exit;
}

?>



<h1>Keskiarvon laskenta </h1>
<form id="form1" name="form1" method="post" action="laske.php">
  <p>
    <?php
  //Otetaan globaaliksi muuttujaksi keskiarvo.html sivulta l�hetetty superglobaalimuuttuja
  $syote1=$_POST['syote1'];
  //Tulosetetaan formiin k�ytt�j�n haluama m��r� textbox kentti� silmukassa
  //koska m��r� tiedossa voidaan k�ytt�� askeltavaa for silmukkaa
  for($i=1;$i<=$syote1;$i++)
  {
  	echo "<input type=text name=luku$i size=3>";
  }
 //Kun k�ytt�j� on t�l�� lasek.php sivulla antanut laskettavat luvut niin submit painikkeen j�lkeen
 //kutsutaan taas sivua itse�ns� uudestaan menetet��n ensimm�isell� kerralla saatujen muuttujien sis�lt�
 //T�ytyy huolehtia niiden mukana olo esim. hidden kent�ll�
 ?>
  </p>
  <p>
    <input name="syote1" type="hidden" id="syote1" value="<?php echo $syote1; ?>" />
</p>

  <p>
    <label>
    <input type="submit" name="button" id="button" value="Laske annettujen lukujen keskiarvo" />
    </label>
  </p>
</form>
<?php
//Edelleen siis tieto lukujen m��r�st� ?syote1 muuttujassa
//Halutaan laskea annettujen lukujen summa t�m� hoidetaan silmukassa
$summa=0;
for($i=1;$i<$syote1;$i++)
{
//Luodaan apumuuttuja kunkin kierroksen muuttujalle, joka siis on superglobaali eli muotoa $_POST['name']
	 $muuttuja="luku" . $i;
	//lis�t��n kunkin kierroksen luku summa muuttujaan
	
	$summa=$summa + $_POST[$muuttuja];	
}

echo "Lukujen summa " . $summa . " jaettuna maaralla " . $syote1 . "antaa keskiarvon ". round(($summa/$syote1),2);






?>
Alla esimerkki $_POST taulukon muuttujista
<?php
echo '<pre>'; 
print_r($_POST); 
echo '</pre>'; 
?>

<?php
echo date("y/n/d");
?>




<p>&nbsp;</p>
</body>
</html>
