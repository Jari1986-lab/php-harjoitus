<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Keng&auml;n koko</title>
</head>
<body>

<h1>Keng&auml;nnumero luokka</h1>
 
<FORM METHOD="POST" ACTION="kenka.php">
<br>
Sy&ouml;t&auml; keng&auml;nnumerosi: <INPUT TYPE="TEXT" NAME="koko">
 
 
<br>

</FORM>

<?php

$koko=$_POST ['koko'];


if(is_numeric($koko)  &&  $koko>0 && $koko<55   

{
echo "koko"
}

	if($koko<36)
		{
			
			echo "Kengän numerosi on 31 lasten koko";
		}
		elseif($koko<36)
		{
		
		echo "Aikuisten koko!";
		
		}
		elseif($koko<38)
		{
			echo "aikuisten koko";
		}
		elseif($kokoi<41)
		{
			echo "Kunnollinen koko";
			
		}
		elseif($koko<46)
		{	
			echo "kunnollinen koko";
		
		}
		elseif($koko<50)
		{
	
			echo "Olet todella iso kenkäinen"
		
			
			
		}	
		else
		{
		echo "Syötä asiallinen koko kenttään! ";
		}

		}		
		else

		}



?>

</body>
</html>