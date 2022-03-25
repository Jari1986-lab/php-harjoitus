<html>
<head>
<title>PHP-kurssin harjoitustöitä</title>
</head>
<body>
<center><p>PHP-harkat<p>
<table>
<tr>
<?php 

  $taulu = file("info.txt");  
  $lkm = sizeof($taulu);

// Open a known directory, and proceed to read its contents
if ($handle = opendir('.')) {
    while (false !== ($filename = readdir($handle))) { 
        if ($filename != "info.txt" && $filename != "." && $filename != ".." && $filename != ".htpasswd" && $filename != ".htaccess" && $filename != "index.php" && $filename != "index.html") { 
               
            echo "<td width='50%' align='right'><a href=' $filename\n '> $filename\n </a></td> "    ;

      for($indeksi = 0; $indeksi <= $lkm; $indeksi++) {
              if ( substr($taulu[$indeksi],0,strlen($filename)) == $filename)  {
               echo "<td width='50%'>".substr($taulu[$indeksi],strlen($filename))."</td>";
              } 
              
       }

       echo "</tr><tr>";   

       } 
    }
    closedir($handle); 
}
?>

</tr>
</table>
</center>
</body>
</html>

