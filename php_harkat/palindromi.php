<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Palindromi</title>
</head>

<body>
<h1>Palindromi</h1>
<form id="form1" name="form1" method="post" action="palindromi.php">
  Anna testattava sana tai lause 
  <label>
  <input name="Teksti" type="text" id="Teksti" size="50" />
  </label>
  <p>
    <label>
    <input type="submit" name="button" id="button" value="Palindromi?" />
    </label>
  </p>
  <p>&nbsp; </p>
</form>
<p>&nbsp; </p>

<?php
//Muuttujan nappaaminen
$Teksti=$_POST['Teksti'];
//Tyyppimuunnos k�ytt�j� on voinut sy�tt�� my�s lukujonoja
$Merkkijono=(string)$Teksti;
//Testataan merkkijonon pituus
$pituus=strlen($Merkkijonio);
//Tulostetaan aputestauksia
echo "Annoit lauseen " . $Merkkijono ."jonka pituus on " . $pituus;
echo "<br>"; 
//Koska isoilla ja pienill� kirjaimilla on merkityst� k�ytet��n merkkijonofunktioita
$Merkkijono=strtolower($Merkkijono);
//Korvataan tyhj�t merkit eli v�lily�nnit 
$Merkkijono=str_replace(" ", "", $Merkkijono);
//Testitulostus ilman v�lily�ntej�
echo "Merkkijono ilman v�lily�ntej� " . $Merkkijono;
echo "<br>";
//K�ytet��n askeltavaa for silmukkaa merkkijonon l�pik�ymiseksi merkki kerrallaan
//Kasvatetaan silmukassa uutta muuttujaa takaperin
for($i=0;$i<$pituus;$u++)
{
	$Palindromi=$Merkkijono[$i].$Palindromi;
}
//Tulostetaan testin� merkkijono k��nteisen�
echo "Merkkijono k��nnettyn� " . $Palindromi;
echo "<br>";
//Ehto-eli valintarakenne vertalilun testaukseen 
if($Merkkijono==$Palindromi)
{
	echo "on Palindromi!";
}
else

{
	echo "ei ole Palindromi!";
}



?>


</body>
</html>
