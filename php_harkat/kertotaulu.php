<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table>
<?php
//tulostetaan kertaulu taulukkoon
//Ensin tulostetaan vasemman yläkulman staattinen teksti i/j
//aloitetaan ekan rivin aloitustagi jasinne yksi solu
echo "<tr><td>i/j</td>";
//Tämän jälkeen ekalle riville tulostetaan numerot 1-10 omiin soluihinsa
//Tämä hoidetaan silmukka eli toistorakenteella
//Koska tiedetään kuinka monta kierrosta eli 10 niin askeltava for silmukka
for ($i=1;$i<=10;$i++)
{

	echo "<td><b>$i</b></td>";
}
//Tulostetaan ekan rivin lopetustagi
echo "</tr>";
//Pääsilmukka joka tulostaa rivin kerrallaan
for($i=1;$i<=10;$i++)
{
	//Tulostetaan rivin aloitustagi
	echo "<tr>";
	//tulostetaan rivin aloitussolu, joka on bold
	echo "<td><b>$i</b></td>";
	//Tulostetaan kyseisen rivin solut silmukassa
	//Koska meillä on pääsilmukassa käytössä laskurimuuttujana $i niin otetaaan sisäsilmukkaan $j
	for($j=1;$j<=10;$j++)
	{
	
		echo "<td>" . $i*$j . "</td>";
	}	
	echo "</tr>"; 



//Tämän alle taulukon rivin loppulohko
}


?>
</table>
</body>
</html>
