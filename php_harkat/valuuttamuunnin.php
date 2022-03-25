<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Valuuttalaskuri </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
 
<body>
<h1>Valuuttalaskuri </h1>
<form name="form1" id="form1" method="post" action="versio1.php">
  <p>Anna muunnettava valuuttam&auml;&auml;r&auml;: 
    <input name="eurot" type="text" id="eurot" />
    euroa</p>
  <p>Valitse valuutta</p>
  <p> 
    <label> 
    <input type="radio" name="valuutta" value="Ruotsi" />
    Ruotsin kruunu</label>
    <br />
    <label> 
    <input type="radio" name="valuutta" value="Viro" />
    Viron kruunu</label>
    <br />
    <input type="submit" name="Submit" value="Muunna valuutta" />
  </p>
</form>

<?php

$eurot=$_POST['eurot'];


echo "eurot ". $eurot . " ,  sek ". $sek . " eek " . $eek; 
echo "<br>";

if(is_numeric($eurot) && $eurot<0)
{
	if($eurot=='eurot')		
			
{
	$eurot=eurot*15.647 
	
	echo "valuutta on."

}


elseif

{

	$eurot=eurot*10.372

	echo "valuutta on."
}

else
		{
		echo "Anna asialliset syötteet";
		}

}
	
?>	
		




</body>
</html>
