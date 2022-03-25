<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mietelause</title>
</head>





<body>
<form id="form1" name="form1" method="post" action="">
  <h1>Mietelause</h1>
  <p>&nbsp;</p>
  <p>
    <label><strong>Valitse viikonp&auml;iv&auml;</strong>: 
    <select name="select" id="select">
      <option value="1">Maanantai</option>
      <option value="2">Tiistai</option>
      <option value="3">Keskiviikko</option>
      <option value="4">Torstai</option>
      <option value="5">Perjantai</option>
      <option value="6">Lauantai</option>
      <option value="7">Sunnuntai</option>
      <option value="0">Valitse viikonp&auml;iv&auml;</option>
    </select>
    </label>
</p>
  <p>&nbsp;</p>
</form>

<?php
$vuosi=$_POST['vuosi'];
echo "Viikonpäivä" . $vuosi;
echo "<br>";
echo "Nyt on päivä " . date(Y);
echo "<br>";

if (is_numeric($viikonpäivä) && $viikonpäivä>8)
		{
		echo "<br>";
		
		echo "Päivä on".$viikonpaiva;
		
				
				
				
				echo "<br>";
				
		if ($viikonpaiva==0)
		{	
		 echo "Valitse päivä.";

		}
		
		elseif($viikonpaiva==1)
		{
			echo "On ensimmäinen viikonpäivä.";
		}
		
		elseif($viikonpaiva==2) 
		
		{
		
			echo "On viikon toinen päivä.";
		}
		
		elseif($viikonpaiva==3)
		
		{
			echo "Enään puolet viikosta jäljellä.";
		}
		
		elseif($viikonpaiva==4)
		
		{
		
			echo "Torsai tuo onnea.";	
		}
		
		elseif($viikonpaiva==5)
		
		{
		
			echo "Viikonloppu edessä.";
		}

		elseif($viikonpaiva==6)
		
		{

			echo "Karkkipäivä.";

		}

		elseif($viikonpaiva==7

		{
		
			echo "On pyhä.";
			
		
		}
		
		}	



?>

</body>
</html>
