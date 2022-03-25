<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ikälaskuri</title>
</head>
<body bgcolor="FFFFCC">

<FORM METHOD="POST" ACTION= "ikalaskuri.php">
<br>
 <INPUT TYPE=radio NAME=sukupuoli VALUE="nainen" >Nainen
  <INPUT TYPE=radio NAME=sukupuoli VALUE="mies">Mies
<br>
Syötä syntymävuotesi muodossa vvvv: <INPUT TYPE="TEXT" NAME="svuosi">
<br>

<br>
<INPUT TYPE="SUBMIT" NAME="Button" VALUE="Laske ikäsi!">


</FORM>

<?php

$sukupuoli=$_POST ['sukupuoli'];
$syntymavuosi=$_POST['svuosi'];
//Kannatta laittaa testitulostus

//Nelosen ja vitosen suorituksessa on myös käyttäjän syötteiden testaus 
//esim. tässä testataan ennn iän kertomista onko annettu svuosi
//numeerinen ja onko se järkevissä mitoissa tässä pienempi tai yhtäsuuri kuin
//kuluva vuosi joka tässä date(Y) tai sitten suurempi kuin 1894

echo "Vuosi: ". date(Y);

$ika=date(Y)-$syntymavuosi;
//testi tulostus iästä
echo "<br>";

echo "Ikasi on ".$ika;


if($ika<21)

{
 	echo "olen nuori";
}

elseif($ika<31)
{
	echo "olet aika vanha";
}

elseif($ika<41) 

{

	echo "olet jo vanha";
}

elseif($ika<51)

{
	echo "olet jo todella vanha";
}

elseif($ika<60)

{

	echo "olet erittäin vanha";	
}

else

{

	echo "olet haudan partaalla";
}

?>


</body>
</html>