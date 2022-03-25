<?php
//jos nimeä ei ole annettu, näytetään lomake...
if (!isset($_POST['nimi'])) {
?>

<html>
<head>
  <title>Viestin lähetys</title>
</head>
<body>
  <h1>Viestin lähetys</h1>

  <form action="laheta.php" method="post">
  Nimi: <br> <input type="text" name="nimi"> <br>
  Sähköposti: <br> <input type="text" name="email"> <br>
  Viesti: <br> <textarea name="viesti"></textarea> <br> <br>
  <input type="submit" value="Lähetä">
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

   //poistetaan ylimääräiset kenoviivat (\)
   $viesti = stripslashes($viesti);
   //estetään HTML-tagien käyttäminen
   $viesti = htmlspecialchars($viesti);
   //muutetaan rivinvaihdot HTML-muotoon
   $viesti = str_replace("\n", "<br>", $viesti);
     
   //otetaan talteen aika, jolloin viesti lähetettiin
   $aika = time();

   //muodostetaan tiedostoon tallennettava rivi
   $rivi = "$nimi|$email|$aika|$viesti\n";

   //kirjoitetaan rivi tiedostoon
   fwrite($tiedosto, $rivi);

   //suljetaan tiedosto
   fclose($tiedosto);

   //ohjataan käyttäjä vieraskirjasivulle
   header("Location: nayta.php");
}
?>