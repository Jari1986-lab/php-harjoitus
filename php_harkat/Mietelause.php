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
echo "Viikonp�iv�" . $vuosi;
echo "<br>";
echo "Nyt on p�iv� " . date(Y);
echo "<br>";

if (is_numeric($viikonp�iv�) && $viikonp�iv�>8)
		{
		echo "<br>";
		
		echo "P�iv� on".$viikonpaiva;
		
				
				
				
				echo "<br>";
				
		if ($viikonpaiva==0)
		{	
		 echo "Valitse p�iv�.";

		}
		
		elseif($viikonpaiva==1)
		{
			echo "On ensimm�inen viikonp�iv�.";
		}
		
		elseif($viikonpaiva==2) 
		
		{
		
			echo "On viikon toinen p�iv�.";
		}
		
		elseif($viikonpaiva==3)
		
		{
			echo "En��n puolet viikosta j�ljell�.";
		}
		
		elseif($viikonpaiva==4)
		
		{
		
			echo "Torsai tuo onnea.";	
		}
		
		elseif($viikonpaiva==5)
		
		{
		
			echo "Viikonloppu edess�.";
		}

		elseif($viikonpaiva==6)
		
		{

			echo "Karkkip�iv�.";

		}

		elseif($viikonpaiva==7

		{
		
			echo "On pyh�.";
			
		
		}
		
		}	



?>

</body>
</html>
