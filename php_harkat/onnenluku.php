<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Onnenluku</title>
</head>

<body>
<h1>Onnenluvunlaskentaa:</h1>
<form id="form1" name="form1" method="post" action="onnenluku.php">
  <label></label> 
  <div align="center">
    <p>Anna syntymapaiva</p>
    <p>
      <label>
      <select name="paiva" id="paiva">
        <option value="0">Valitse syntymapaiva</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="1">10</option>
        <option value="2">11</option>
        <option value="3">12</option>
        <option value="4">13</option>
        <option value="5">14</option>
        <option value="6">15</option>
        <option value="7">16</option>
        <option value="8">18</option>
        <option value="1">19</option>
        <option value="2">20</option>
        <option value="3">21</option>
        <option value="4">22</option>
        <option value="5">23</option>
        <option value="6">24</option>
        <option value="7">25</option>
        <option value="8">26</option>
        <option value="9">27</option>
        <option value="1">28</option>
        <option value="2">19</option>
        <option value="3">30</option>
        <option value="4">31</option>
                                          </select>
      </label>
    </p>
    <p>
      <label>
      <input type="submit" name="button" id="button" value="Laskentaan" />
      </label>
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;  </p>
  </div>
</form>

<?php
//Tästä alkaa vuokaavion alku
//Muuttujan "käyttöönotto"
$paiva=$_POST['paiva'];
//Ehto eli valintarakenteella if-elseif-else rakenteella tulostetean onnenluku ja teksti
//Ehto on salmiakki kuva jossa aina ei ja kyllä haara, jos ehdon ei haarassa uusi ehto eli salmiakki kuva
//niin silloin elseif
if($paiva==0)
//Ensimmäinen salmiakki on tarkistus onko saatu paiva yhtäsuuri kuin nolla
{
	//Tämä on kyllä haaraan suorakaide
	echo "Hei, et valinnuttaan viela syntymapaivaasi!";

}
//Ensimmäisen ehdon eli salmiakin ei haarassa siis uusi ehto jolloin sinne uusi salmiakki
elseif($paiva==1)
{
	//Tämä kyllä haaran taas suorakaide jos ehto yhtäsuuri kuib yksi tosi
	echo "Onnenlukusi on mainio ykkönen " . $paiva;

} 
elseif($paiva==2)
{
	echo "Onnenlukusi on mainio kakkonen eli " . $paiva;

}
elseif($paiva==3)
{
	echo "Onnenlukusi on mainio kolmonen eli " . $paiva;
	
}
elseif($paiva==4)
{
	echo "Onnenlukusi on mainio nelonen eli " . $paiva;
}
elseif($paiva==5)
{
	echo "Onnenlukusi on mainio viitonen eli " . $paiva;
}
elseif($paiva==6)

{
	echo "Onnenlukusi on mainio kuutonen eli " . $paiva;
}
elseif($paiva==7)

{
	echo "Onnenlukusi on mainio seitsemän eli " . $paiva;
}

elseif($paiva==8)
{	
	echo "Onnenlukusi on mainio kahdeksan eli " . $paiva;

}
else
{
	echo "Onnenlukusi on mainio yhdeksän eli " . $paiva;
} 	
//Tähän loppuun vuokaavio kuvake
//Tähän loppuu vuokaavion alku
?>
<p>&nbsp; </p>
</body>
</html>
