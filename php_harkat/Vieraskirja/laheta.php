<?php
//jos nime� ei ole annettu, n�ytet��n lomake...
if (!isset($_POST['nimi'])) {
?>

<html>
<head>
  <title>Viestin l�hetys</title>
</head>
<body>
  <h1>Viestin l�hetys</h1>

  <form action="laheta.php" method="post">
  Nimi: <br> <input type="text" name="nimi"> <br>
  S�hk�posti: <br> <input type="text" name="email"> <br>
  Viesti: <br> <textarea name="viesti"></textarea> <br> <br>
  <input type="submit" value="L�het�">
  </form>

</body>
</html>

<?php
//...muussa tapauksessa kirjoitetaan viesti tiedostoon
} else {
   //avataan tiedosto append-tilassa: kirjoitetaan tiedoston loppuun
   $tiedosto = fopen("viestit.txt", "a");

   //haetaan lomakkeen kautta tulleet muuttujat
   $nimi = $_POST['nimi'];
   $email = $_POST['email'];
   $viesti = $_POST['viesti'];

   //poistetaan ylim��r�iset kenoviivat (\)
   $viesti = stripslashes($viesti);
   //estet��n HTML-tagien k�ytt�minen
   $viesti = htmlspecialchars($viesti);
   //muutetaan rivinvaihdot HTML-muotoon
   $viesti = str_replace("\n", "<br>", $viesti);
     
   //otetaan talteen aika, jolloin viesti l�hetettiin
   $aika = time();

   //muodostetaan tiedostoon tallennettava rivi
   $rivi = "$nimi|$email|$aika|$viesti\n";

   //kirjoitetaan rivi tiedostoon
   fwrite($tiedosto, $rivi);

   //suljetaan tiedosto
   fclose($tiedosto);

   //ohjataan k�ytt�j� vieraskirjasivulle
   header("Location: nayta.php");
}
?>