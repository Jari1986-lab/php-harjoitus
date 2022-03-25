<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<h1>Horoskooppi-ohjelm</h1>
<FORM METHOD="POST" ACTION= "koe2.php">
<br>
Valitse syntymäkuukausi:
<SELECT NAME=kuukausi>
      <OPTION VALUE=1>Tammikuu
      <OPTION VALUE=2>Helmikuu
      <OPTION VALUE=3>Maaliskuu
 <OPTION VALUE=4>Huhtikuu
    <OPTION VALUE=5>Toukokuu
    <OPTION VALUE=6>Kesäkuu
 <OPTION VALUE=7>Heinäkuu
    <OPTION VALUE=8>Elokuu
    <OPTION VALUE=9>Syyskuu
 <OPTION VALUE=10>Lokakuu
    <OPTION VALUE=11>Marraskuu
    <OPTION VALUE=12>Joulukuu
</SELECT>
<br>
Syötä syntymäpäiväsi:

<SELECT NAME=paiva>
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
    <OPTION VALUE=10>10
    <OPTION VALUE=11>11

    <OPTION VALUE=12>12
    <OPTION VALUE=13>13
    <OPTION VALUE=14>14
  <OPTION VALUE=15>15
    <OPTION VALUE=16>16
    <OPTION VALUE=17>17
 <OPTION VALUE=18>18
    <OPTION VALUE=19>19
    <OPTION VALUE=20>20
  <OPTION VALUE=21>21
    <OPTION VALUE=22>22
    <OPTION VALUE=23>23

    <OPTION VALUE=24>24
    <OPTION VALUE=25>25
    <OPTION VALUE=26>26
  <OPTION VALUE=27>27
    <OPTION VALUE=28>28
    <OPTION VALUE=29>29
 <OPTION VALUE=30>30
    <OPTION VALUE=31>31
</SELECT>
<br>

<br>
<INPUT TYPE="SUBMIT" NAME="Button" VALUE="Kerro horoskooppi">

</FORM>

<?php
//Otetaan vastaan superglobaalit muuttujat globaaleiksi
?kuukausi=$_POST['kuukausi'];
$paiva=$_POST['paiva'];
//Testitulostus
echo "Olet syntynyt " . $paiva . "/" . $kuukausi;
echo "<br>";
//Testataan hieman käyttäjän mahdollsia virheellisiä valintoja
if( ( $kuukausi==2 && $paiva<29 ) || ( $paiva<31 $$($kuukausi==4 || $kuukausi==6 || $kuukausi9 || $kuukausi==11 )) 
|| ($paiva<32 && ( $kuukausi==1 || $kuukausi==3 || $kuukausi || $kuukausi==5 || kuukausi==7 || $kuukausi==8 || [kuukausi==10$ ||$kuukausi==12)) 

{
//Horoskoopin testaaminen jos päivät oikein



if(($kuukausi==1 &&paiva<20) || ($kuukausi==12&&paiva>22))

{

	echo "olet horoskoopiltasi kauris!";
}
elseif(($kuukausi==1 && $paiva>19) || ($kuukausi==2 && $paiva<20))
{

	echo "Olet horoskoopiltasi vesimies!";
}

 elseif (($kuukausi==2 && $paiva>19) || ($kuukausi==3 && $paiva<21))
      
		 {
            echo "Olet horoskoopiltasi kalat";
  
        }
  

         elseif (($kuukausi==3 && $paiva>20) || ($kuukausi==4 && $paiva<20))
         {
    
               echo "Olet horoskoopiltasi oinas";
 
          }

  
          elseif (($kuukausi==4 && $paiva>19) || ($kuukausi==5 && $paiva<21))
          {
    
                echo "Olet horoskoopiltasi härkä";
 
          }

 

          elseif (($kuukausi==5 && $paiva>20) || ($kuukausi==6 && $paiva<22))
          {
    
               echo "Olet horoskoopiltasi kaksoset";
 
          }


          elseif (($kuukausi==6 && $paiva>21) || ($kuukausi==7 && $paiva<23))
          {
                  echo "Olet horoskoopiltasi rapu";
 
           }


          elseif (($kuukausi==7 && $paiva>22) || ($kuukausi==8 && $paiva<23))
           {
    
                 echo "Olet horoskoopiltasi leijona";
 
           }

           elseif (($kuukausi==8 && $paiva>22) || ($kuukausi==9 && $paiva<23))
          {
    
                echo "Olet horoskoopiltasi neitsyt";
 
           }

 
           elseif (($kuukausi==9 && $paiva>22) || ($kuukausi==10 && $paiva<24))
           {
    
                    echo "Olet horoskoopiltasi vaaka";
 
            }


            elseif (($kuukausi==10 && $paiva>23) || ($kuukausi==11 && $paiva<23))
            {
    
                   echo "Olet horoskoopiltasi skorpioni";
 
             }

             elseif (($kuukausi==11 && $paiva>22) || ($kuukausi==12 && $paiva<23))
             {
    
                     echo "Olet horoskoopiltasi jousimies";
 
              }
			  
}
else
{

	//Tulostoe jos valinnoissa virheellisyyttä esim. valittu 31 päivä helmikuuta
	echo "Syötä asialliset syötteet! Helmikuu vain 28 päivää,
	huhtikuu, kesäkuu, syyskuu, ja marraskuu vain 30 päivää)";
}

 
            


?>



</body>

</html>
