<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pavityssivu</title>
</head>

<body>
<h1>sisalto.txt tekstitiedoston p&auml;ivitt&auml;minen</h1>
<p>

  <?php
//Halutaan hakea sisalto.txt tiedoston sisältö yhteen tekstityyppiseen muuttujaan
//Tulostetaan olemassa oleva tektsi lomakkeen textbox tagiin oletuksena
//Talletetaan kyseinen muokattu teksti uudelleen sisalto.txt tekstitiedostoon
//avataan tiedosto lukumoodissa
$tiedosto=fopen("sisalto.txt","r") or die ("TIedostom avaaminen ei onnistunut");
//käydään avattu tiedosto läpi rivi kerrallaan ja luetaan uusi rivi $kokoteksti muuttujaan
while(!feof($tiedosto))
{
	$rivi=fgets($tiedosto,1024);
	$kokoteksti=$kokoteksti.$rivi;
}
fclose($tiedosto);
//testitulostus tulostetaan $kokoteksti muuttuja
echo $kokoteksti;
?>
</p>
<form id="form1" name="form1" method="post" action="tekstinkirjoitus.php">
  <p>
    <label>
    <textarea name="paivitys" cols="100" rows="10" id="paivitys"><?php echo $kokoteksti; ?></textarea>
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="button" id="button" value="p&auml;ivit&auml; teksti" />
    </label>
  </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
