<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>onnenlukulaaja</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>Onnenlukulaskuri</p>
  <p>
  <SELECT NAME=paiva>
    <OPTION VALUE=0> Valitse syntymäpäivä
      <OPTION VALUE=1>1
      <OPTION VALUE=2>2
      <OPTION VALUE=3>3
      <OPTION VALUE=4>4
      <OPTION VALUE=5>5
      <OPTION VALUE=5>5
      <OPTION VALUE=6>6
      <OPTION VALUE=7>7
      <OPTION VALUE=8>8
      <OPTION VALUE=9>9
      <OPTION VALUE=1>10
      <OPTION VALUE=2>11
      <OPTION VALUE=3>12
      <OPTION VALUE=4>13
      <OPTION VALUE=5>14
      <OPTION VALUE=6>15
      <OPTION VALUE=7>16
      <OPTION VALUE=8>17
      <OPTION VALUE=9>18
      <OPTION VALUE=1>19
      <OPTION VALUE=2>20
      <OPTION VALUE=3>21
      <OPTION VALUE=4>22
      <OPTION VALUE=5>23
      <OPTION VALUE=6>24
      <OPTION VALUE=7>25
      <OPTION VALUE=8>26
      <OPTION VALUE=9>27
      <OPTION VALUE=1>28
      <OPTION VALUE=2>29
      <OPTION VALUE=3>30
      <OPTION VALUE=4>31
    </SELECT>
    
    /
  <SELECT NAME=kuukausi>
    <OPTION VALUE=0>Valitse syntymäkuukausi
      <OPTION VALUE=1>1
      <OPTION VALUE=2>2
      <OPTION VALUE=3>3
      <OPTION VALUE=4>4
      <OPTION VALUE=5>5
      <OPTION VALUE=5>5
      <OPTION VALUE=6>6
      <OPTION VALUE=7>7
      <OPTION VALUE=8>8
      <OPTION VALUE=9>9
      <OPTION VALUE=1>10
      <OPTION VALUE=2>11
      <OPTION VALUE=3>12
    </SELECT>
    /
  <select name=vuosi>
    <option value=0>Valitse syntymävuosi
      <option value=3>2010
      <option value=2>2009 
      <option value=1>2008 
      <option value=9>2007 
      <option value=8>2006
      <option value=7>2005 
      <option value=6>2004 
      <option value=5>2003 
      <option value=4>2002 
      <option value=3>2001 
      <option value=2>2000 
      <option value=1>1999 
      <option value=9>1998 
      <option value=8>1997 
      <option value=7>1996 
      <option value=6>1995 
      <option value=5>1994 
      <option value=4>1993 
      <option value=3>1992 
      <option value=2>1991 
      <option value=1>1990 
      <option value=9>1989 
      <option value=8>1988 
      <option value=7>1987 
      <option value=6>1986 
      <option value=5>1985 
      <option value=4>1984 
      <option value=3>1983 
      <option value=2>1982 
      <option value=1>1981 
      <option value=9>1980 
      <option value=8>1979 
      <option value=7>1978 
      <option value=6>1977 
      <option value=5>1976 
      <option value=4>1975 
      <option value=3>1974 
      <option value=2>1973 
      <option value=1>1972 
      <option value=9>1971 
      <option value=8>1970 
      <option value=7>1969 
      <option value=6>1968 
      <option value=5>1967 
      <option value=4>1966 
      <option value=3>1965 
      <option value=2>1964 
      <option value=1>1963 
      <option value=9>1962 
      <option value=8>1961 
      <option value=7>1960 
      <option value=6>1959 
      <option value=5>1958 
      <option value=4>1957 
      <option value=3>1956 
      <option value=2>1955 
      <option value=1>1954 
      <option value=9>1953 
      <option value=8>1952 
      <option value=7>1951 
      <option value=6>1950 
      <option value=5>1949 
      <option value=4>1948 
      <option value=3>1947 
      <option value=2>1946 
      <option value=1>1945 
      <option value=9>1944 
      <option value=8>1943 
      <option value=7>1942 
      <option value=6>1941 
      <option value=5>1940 
      <option value=4>1939 
      <option value=3>1938 
      <option value=2>1937 
      <option value=1>1936 
      <option value=9>1935 
      <option value=8>1934 
      <option value=7>1933 
      <option value=6>1932 
      <option value=5>1931 
      <option value=4>1930 
      <option value=3>1929 
      <option value=2>1928 
      <option value=1>1927 
      <option value=9>1926 
      <option value=8>1925 
      <option value=7>1924 
      <option value=6>1923 
      <option value=5>1922 
      <option value=4>1921 
      <option value=3>1920 
      <option value=2>1919 
      <option value=1>1918 
      <option value=9>1917 
      <option value=8>1916 
      <option value=7>1915 
      <option value=6>1914 
      <option value=5>1913 
      <option value=4>1912 
      <option value=3>1911 
      <option value=2>1910 
      <option value=1>1909 
      <option value=9>1908 
      <option value=8>1907 
      <option value=7>1906 
      <option value=6>1905 
    </select>
</p>
  <p>
    <label>
    <input type="submit" name="button" id="button" value="Laske onnenluku" />
    </label>
</p>
</form>
<?php
//Tässä ohjelman alku
//Muuttujat, jotka käytössä 
$paiva=$_POST['paiva'];
$kuukausi=$_POST['kuukausi'];
$vuosi=$_POST['vuosi'];
//Saatujien muuttujien yhteenlaskeminen onnenlukumuuttujaan
$onnenluku=$paiva+$kuukausi+$vuosi;
//Testitulostus saadulle ensimmäiselle onnenluvulle
echo "Onnenluku ennen tarkistusta" . $onnenluku;
echo "<br>";
//Onnenluku saa olla välillä 1-9
//Tästä syystä tarkistetaan alkuehtoisessa while-silmukassa on saatu luku suurempi kuin 9
//Ehtona siis $onnenluku>9, jos on niin lasketaan (merkkijonojen osia) yhteen
while ($onnenluku>9)
{
	//Näiden lohkomerkkien sisään sijoitetaan silmukassa suoritettavat ohjelmalauseet
	//Tyyppimuunnost luku eli integer tietotyypistä merkkijonoksi eli stringiksi
	$merkkijono=(string)$onnenluku;
	//Tarkistetaan muunnetun merkkijonon pituus eli montako merkkiä
	$tavuja=strlen($merkkijono);
	//Tämä vaoidaan askeltavassa silmukassa laskea merkkijonon yksittäiset tavut eli merkit yhteen
	//askeltavat silmukat sopii hyvin tähän, koska tiedetään etukäteen kuinka monta merkkiä merkkijonossa
	//for silmukassa kolme parametria
	//1. mikä muuttuja toimii kierroslaskurina ja mikä on sen arvo
	//2. mihin laskurin arvoon asti kierroksia suoritetaan
	//3. mikä on "hyppy" eli paljonko laskurin arvoa ksvatetaan tai lasketaan kierroksella 
	for($i=0;$i<$tavuja;$i++)
	{
	//Tähän sijoitetaan askeltavan silmukan ohjelmalauseet
	//Otetaan apumuuttujan $summa käyttöön
	$summa=$summa+$merkkijono[$i];
	//ALla askeltavan for silmukan loppulohko
	}
	
  	//Sijoitetaan saatu uusi summa $onnenluku muuttujaan
	$onnenluku=$summa;
	//nollataan summa muuttuja
	$summa=0;
	//Alla silmukan lopetuslohkomerkki

}
//Kun saatu onnenluku on 9 tai pienempi poistutaan silmukasta ja tulostetaan uusi onnenluku
echo "Onnenluku nyt  " . $onnenluku;

//Sitten tähän kopsataan ekan suppeaman onnenluku sovelluksen ehtolauseet
echo "<br>";

if($onnenluku==0)
//Ensimmäinen salmiakki on tarkistus onko saatu paiva yhtäsuuri kuin nolla
{
	//Tämä on kyllä haaraan suorakaide
	echo "Hei, et valinnuttaan viela syntymapaivaasi!";

}
//Ensimmäisen ehdon eli salmiakin ei haarassa siis uusi ehto jolloin sinne uusi salmiakki
elseif($onnenluku==1)
{
	//Tämä kyllä haaran taas suorakaide jos ehto yhtäsuuri kuib yksi tosi
	echo "Onnenlukusi on mainio ykkönen " . $onnenluku;

} 
elseif($onnenluku==2)
{
	echo "Onnenlukusi on mainio kakkonen eli " . $onnenluku;

}
elseif($onnenluku==3)
{
	echo "Onnenlukusi on mainio kolmonen eli " . $onnenluku;
	
}
elseif($onnenluku==4)
{
	echo "Onnenlukusi on mainio nelonen eli " . $onnenluku;
}
elseif($onnenluku==5)
{
	echo "Onnenlukusi on mainio viitonen eli " . $onnenluku;
}
elseif($onnenluku==6)

{
	echo "Onnenlukusi on mainio kuutonen eli " . $onnenluku;
}
elseif($onnenluku==7)

{
	echo "Onnenlukusi on mainio seitsemän eli " . $onnenluku;
}

elseif($onnenluku==8)
{	
	echo "Onnenlukusi on mainio kahdeksan eli " . $onnenluku;

}
else
{
	echo "Onnenlukusi on mainio yhdeksän eli " . $onnenluku;
} 	
//Tähän loppuun vuokaavio kuvake
//Tähän loppuu vuokaavion alku
?>










</body>
</html>



