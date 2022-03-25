<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nelilaskin</title>
</head>

<body>
<h1>Nelilaskin sovellus</h1>
<p>Syötä laskettavat luvut!</p>
<form id="form1" name="form1" method="post" action="nelilaskin.php">
  Syötä luku 1:
  <label>
  <input type="text" name="luku1" id="luku1" />
  </label>
  <p>Syötä luku2:
    <label>
    <input type="text" name="luku2" id="luku2" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Button" id="Button" value="yhteen" />
    </label>
    <label>
    <input type="submit" name="Button" id="Button" value="vahennys" />
    </label>
    <label>
    <input type="submit" name="Button" id="Button" value="kerto" />
    </label>
    <label>
    <input type="submit" name="Button" id="Button" value="jako" />
    </label>
  </p>
</form>

<?php
//otetaan vastaan muuttuja
$luku1=$_POST['luku1'];
$luku2=$_POST['luku2'];
$Button=$_POST['Button'];
//tarkistus tulostus

echo "luku1 ". $luku1 . " ,  luku2 ". $luku2 . " ja Painike " . $Button; 
echo "<br>";
//Peräkkäisrakenteessa (eli ohjelman suorttamisesta rivi kerrallaan)
//poketen voidaan käyttää ehto- elivalintarakennetta
//Yksinkertaisimmassa ehtorakenteessa vain ehdon toteutuessa suoritetaan
//ehtolauseen sisään kirjoitetut ohlemarivir
//testataan yhteenlasku ensimmäiseksi
//yhtäsuuruus vertaus on == ja sijoitus =
//Aluksi on testattava ovatko käyttäjän syötteet lukuja eteesi turhaan suoriteta lasku
if (is_numeric($luku1)&& is_numeric($luku2))
{
//vain jos molemmat syötteet ovat numeerisia laksutoimituksia 
		if($Button=='yhteen');
		{
			//ehtolauseen lohkomerkkien sisään sijoitetaan ehdon toteutuessa 
			//suoritettavat lauseet
			//Esim. voidaan suorittaa laskentaa
			$yhteen=$luku1+$luku2;
			//tulostus
			echo "summa on " . $yhteen;
			echo "<br>";
			//laskenta voisi olla myös tulostukessa
			print "Summa " . $luku1 . " + " . $luku2 . " = " . ($luku1+$luku2);
			
				}
				
				if($Button=='vahennys')
				{
		
			 $vahennys=$luku1-luku2;
			 echo "Vahennyslasku on " . $vahennys;
			 echo "<br>";
			 echo "vahennys $luku1-$luku2 = " . ($luku1-$luku2);
		
		}
		
			if($Button=='kerto')
		{
		
			 $kerto=$luku1*luku2;
			 echo "kertolasku on " . $kerto;
			 echo "<br>";
			 echo "kerto $luku1*$luku2 = " . ($luku1*$luku2);
			 
		}
		
			if($Button=='kerto')
		//Aina huomioitava jos jakolaskutoimistus ettei nollalla voi jakaa
		//Yhtäsuuruus vertaus on aina == ja erisuuruus !=
		if ($luku2!=0)
		{
		
			 $jako=$luku1/luku2;
			 echo "jakolasku on " . $jako;
			 echo "<br>";
			 echo "jako $luku1/$luku2 = " . ($luku1/$luku2);
		
		}

//Tässä numeerisuuden tastauksen ehtolauseen päättävä lohkomerkki
}
else
{
//tässä else lohkossa olevat lauseet suoritetaan vain jos syötteet tai toinen suöte on numeerinen
//Testataan ovatko muuttujat tyhjiä eli esim. tilanne tultaessa svuille ensimmäisen kerran
//tyhjän testaukseen voi käyttää empty-funktiota tai verrata arvoa "tyhjään"
//Tai operandit eli or voidaan kirjoittaa kahdella putkimerkallä ||
//if{$luku1=="" || $luku2=="")  		
		if(empty($luku1) || empty($luku2)
		(
			echo "Anna laskettavat luvut";
		)
		
		else
		(
			echo "Anna asialliset syötteet";
}  

?>



<p>&nbsp; </p>
</body>
</html>
