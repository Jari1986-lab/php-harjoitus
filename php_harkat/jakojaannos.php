<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jakojaannös</title>
</head>

<body>
<p>Testaa luvun jakojäännös</p>
<form id="form1" name="form1" method="post" action="jakojaannos.php">
  <p>Anna luku1:
    <label>
    <input type="text" name="luku1" id="luku1" />
    </label>
  </p>
  <p>Anna luku2:
    <label>
    <input type="text" name="luku2" id="luku2" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="painike" id="painike" value="Testaa" />
    </label>
    <label>
    <input type="submit" name="Reset" id="Reset" value="Tyhjennys" />
    </label>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>

<?php
//Muuttujien vastaanottaminen
//Saadaan kolme muuttujaa kaksi textbox ja yksi painike
//Tehdään malliksi muunto superglobaaleista globaaleita
$luku1=$_POST['luku1'];
$luku2=$_POST['luku2'];
$painike=$_POST['painike'];

//Testitulostus muuttujista
echo "luku 1 " . $luku1 . " ja luku2 " . " . ja painike " . $painike;
echo "<br>";

$jakonannos=$luku1 % $luku2;

//Testataan eri vaihtoehtoja ehtorakenteella
if($jakojannos==0)
{
	//Tässä ehdon kyllä haara
	echo "jakojaannos on nolla. ELi luku1 on jaollinen luvulla2";

}
elseif($jakojaannos>0)
{

	//ei haarassa on uusi ehto ja tässä uuden ehdon kyllä haaran koodirivit
	echo "Postitiivinen jakojaannos " . $jakojaannos;
	
}
else
{
	//Tässä elseif ehdon ei haara
	echo "Jakojaannos jotain muuta " . $jakojaannos;
	
} 

?>
<p>&nbsp; </p>
</body>
</html>
