<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>Painoindeksilaskuri -sovellus</h1>
<p>&nbsp;</p>
<form id="pituus" name="pituus" method="post" action="">
  <label></label>
  <p>
    <label>Pituus on 
    <input type="text" name="pituus" id="pituus" />
    </label>
  </p>
  <p>Paino kg 
    <label>
    <input type="text" name="paino" id="paino" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="button" id="button" value="Laske" />
    </label>
  </p>
  <p>&nbsp;</p>
</form>

<?php
//pituus ja paino muuttujina
$pituus=$_POST['pituus'];
$paino=$_POST['paino'];

//Tähän asiti siis peräkkäisrakenne eli kukin koodirivi suoritetaan rivi kerrallaan
//Ehtorakenteessa jota vuokaaviossa kuvataan salmiakilla ehdon täyttymistä jatketaan kyllä haaraan ja 
//Ehdon ollessa epätosi ei haaraan
//Pituus ja painon syötteiden tarkistus eli paino ja pituus pitää olla suurempi kuin nolla ja numeerisia
if(is_numeric($pituus)  && is_numeric($paino) && $paino>0 && $pituus>0 )
{
		//Tässä muuttujien tarkistuksen kyllä haara
		//testitulostus ennen jatkamista
		echo "Pituus " . " ja paino " . $paino;
		//Indeksin laskenta
		$painoindeksi=10000*$paino/($pituus*$pituus);
		//Indeksin tulostus pyöristyksellä
		echo "Painoindeksisi on " . round($painoindeksi,2);
		
		//Käyttäjän painoindekistä riippuen tulostetaan erilaisia ohjeita 
		//Tämä rakennetaan myös ehtolauseilla
		if($painoindeksi<15)
		{
			//Jos ehto toteutuu kyllä haarassa tulosteteaan oikea vihje
			//ja sen jälkeen siirrytään ohjelman loppuun		
			echo "Painosi on liian alhaihen, syö jotakin!";
		}
		elseif($painoindeksi<17)
		{
		//<15 ehdon ei haarassa uusi ehto
		//jos tämä uusi ehto toteutuu tulostetaan vihje ja sitten loppuun
		
		echo "Lähentelee jo normaalipainoa!";
		
		}
		elseif($painoindeksi<19)
		{
			echo "normaalin rajoissa!";
		}
		elseif($painoindeksi<25)
		{
			echo "Tosinormaali!";
			
		}
		elseif($painoindeksi<30)
		{	
			echo "hivenen normaalipainoinen yläpuolella!";
		
		}
		elseif($painoindeksi<35)
		{
	
			echo "Lievästi ylipainoinen!";
		}
		elseif($painoindeksi<40)
		{
			//Tämä viimeinen ehdon else haara eli haara
			echo "Olet merkittävästi ylipainoinen!";
		}	
		else
		{
		echo "Tosi paha tilanne!";
		}
//Seuraavassa alla oleva lohkomerkki muuttujien tarkistuksen kyllä haaran lopetus		
}		
		
else
{
  //Tässä  muuttujien ei haara
  echo "Et antanut kunnollisia arvoja!";

}

?>













</body>
</html>
