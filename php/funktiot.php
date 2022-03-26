<?php

function html_alku($otsikko)
{
	echo ("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"");
	echo ("\n\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
	echo ("\n<html xmlns=\"http://www.w3.org/1999/xhtml\">");
	echo ("\n<head>");
	echo ("\n<link href=\"tyylit.css\" rel=\"stylesheet\" type=\"text/css\"/>");
	echo ("\n<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/>");
	echo ("\n<title>".$otsikko."</title>");
	echo ("\n</head>");
	echo ("\n<body>");
	echo ("<div id=\"kehys\">\n");	
}

function ylaTunniste()
{
	echo ("<div id=\"ylatunniste\">\n");
	echo ("<table class=\"logo\"><tr><td><a href=\"etusivu.php\"><img src=\"logo.JPG\" alt=\"logo\" width=\"200\"/></a></td>");
	echo ("<td>Oy Firma Ab</td></tr></table>");
	echo ("</div>\n");
}

function navigointi()
{
	echo ("<div id=\"navigointi\">");
	echo ("\n<ul>\n");
	echo ("<li><a href=\"etusivu.php\">Etusivu</a></li>\n");
	echo ("<li><a href=\"lisaa_tyontekija.php\">Lisää työntekijä</a></li>\n");
	echo ("<li><a href=\"lisaa_puhelinnumero.php\">Lisää puhelinnumero</a></li>\n");
	echo ("<li><a href=\"lisaa_tekee.php\">Lisää Tekee</a></li>\n");
	echo ("<li><a href=\"tulosta_tyontekijat.php\">Tulosta työntekijät</a></li>\n");
	echo ("<li><a href=\"tulosta_osa.php\">Tulosta Osa</a></li>\n");
	echo ("<li><a href=\"tekee.php\">Tulosta tekee työntekijä</a></li>\n");
	echo ("<li><a href=\"etsi_projektit.php\">Tulosta työntekijän projektit</a></li>\n");
	echo ("<li><a href=\"lisaa_osasto.php\">Lisää osasto</a></li>\n");
	echo ("<li><a href=\"tulosta_osasto.php\">Tulosta osastot</a></li>\n");
	echo ("<li><a href=\"lisaa_projekti.php\">Lisää projekti</a></li>\n");
	echo ("<li><a href=\"tulosta_projektit.php\">Tulosta projektit</a></li>\n");
	echo ("<li><a href=\"kirjaudu_ulos.php\">Kirjaudu ulos</a></li>\n");
	echo ("</ul>");
	echo ("</div>\n");
}

function aloitaSisalto()
{
	echo ("<div id=\"sisalto\">\n");
}

function lopetaSisalto()
{
	echo ("\n</div><!-- sisältö div --!>");
}

function html_loppu()
{
	echo ("\n</body>");
	echo ("\n</html>");
}

function lisaaTaulukonOtsikot ($tulos)
{
	for ($i = 0; $i < mysql_num_fields($tulos); $i++)  // tulostetaan kenttien otsikot 
	{
		print "<th>".mysql_field_name($tulos, $i)."</th>\n";
	} 
}

function lisaaTaulunKentat ($taulu)
{
	require_once ("conf.php");
	require_once ("Yhteys.php");
	$yhteys = new Yhteys($palvelin, $kayttaja, $salasana, $kanta);
	$sql="SHOW COLUMNS FROM $taulu";
	$tulos=$yhteys->suoritaSql($sql);
	
	if (mysql_num_rows($tulos) > 0) 
	{
		while ($rivi = mysql_fetch_assoc($tulos)) 
		{
			//print_r ($rivi);
			echo ("<p>$rivi[Field]: <input type=\"text\" name=\"$rivi[Field]\"/></p>");
		}
	}
}

function luoTaulukko ($tulos)
{
	$i=0;
	echo ("<table>\n");
	lisaaTaulukonOtsikot ($tulos);
	while ($rivi = mysql_fetch_row($tulos))
	{
		if ($i % 2 ==0)
			echo ("<tr class=\"tulostus\">"); 
		else
			echo ("<tr>"); 
		foreach ($rivi as $kentta)
		{
			if (is_numeric($kentta))
				echo ("<td align=\right\">");
			else
				echo ("<td>"); 
			echo ("$kentta");		
			echo ("</td>");
		}
		echo ("</tr>\n");
		$i++;
	}
	echo ("</table>\n");
}

function lisaaTaulukkoLinkein ($tulos, $avain, $avainKohta, $paivitysLinkki, $poistoLinkki)
{
	$j=0;
	echo ("<table>\n");
	lisaaTaulukonOtsikot ($tulos);
	while ($rivi = mysql_fetch_row($tulos)) // toista niin kauan kuin on rivejä
	{
		$i=1;
		if($j % 2 ==0)
			echo ("<tr>");
		else
			echo ("<tr class=\"tulostus\">");
		foreach ($rivi as $kentta)
		{
			if($i==$avainKohta)
			{
				$ID=$kentta;
			}
			if (is_numeric($kentta))
				echo ("<td align=\"right\">");
			else
				echo ("<td>");
			echo ("$kentta</td>");
			$i++;		
		}
		$j++;
		echo ("<td><a href=\"$paivitysLinkki?$avain=$ID\">Päivitä</a></td>");
		echo ("<td><a href=\"$poistoLinkki?$avain=$ID\"
		onclick=\"javascript:return confirm('Haluatko varmasti poistaa?')\">
		Poista</a></td>");	
		echo ("</tr>\n");
	}
	echo ("</table>\n");
}

function tarkista_kirjautuminen($kayttaja)
{
	session_start();
	if (!isset($_SESSION[$kayttaja])) // onko kirjautunut
	{
		header("Location: kirjaudu.php");  // ei ole
	}
}

function luoAlasvetovalikko($tulos,$nimi,$valittu,$vakioValittu)
{
	echo ("<select name=\"$nimi\">");
	if ($vakioValittu)
	{
		echo ("<option value='' selected=\"selected\">$valittu</option>\n");
		while ($rivi=mysql_fetch_row($tulos))
		{
			echo ("<option value='$rivi[0]'>$rivi[1]</option>\n");
		}	
	}
	else
	{
		while ($rivi=mysql_fetch_row($tulos)) 
		{
			if ($valittu==$rivi[0])
				echo ("<option value=\"$rivi[0]\" selected=\"selected\">$rivi[1]</option>\n");
			else
				echo ("<option value=\"$rivi[0]\">$rivi[1]</option>\n");    
		} 
	}
	echo "\n</select>";
}


function kirjaudu_ulos($kayttaja)
{
	session_start();
	unset($_SESSION[$kayttaja] );
	session_destroy();
	header ("location:kirjaudu.php");
}

function alaTunniste()
{
	echo "<div id=\"alatunniste\">";
	echo "&copy; Jari Oiva ".date("Y");
	echo "</div>";
	echo "\n</div><!--kehys--!>"; 
}
function lisaaTaulukkoLinkein2 ($tulos, $avain1, $avainKohta1, $avain2, $avainKohta2, $paivitysLinkki, $poistoLinkki)
{
	$j=0;
	echo ("<table>\n");
	lisaaTaulukonOtsikot ($tulos);
	while ($rivi = mysql_fetch_row($tulos)) 
	{
		$i=1;
		if($j % 2 ==0)
			echo ("<tr>");
		else
			echo ("<tr class=\"tulostus\">");
		foreach ($rivi as $kentta)
		{
			if($i==$avainKohta1)
			{
				$ID1=$kentta;
			}
			if($i==$avainKohta2)
			{
				$ID2=$kentta;
			}
			if (is_numeric($kentta))
				echo ("<td align=\"right\">");
			else
				echo ("<td>");
			echo ("$kentta</td>");
			$i++;		
		}
		$j++;
		echo ("<td><a href=\"$paivitysLinkki?$avain1=$ID1&$avain2=$ID2\">Päivitä</a></td>");
		echo ("<td><a href=\"$poistoLinkki?$avain1=$ID1&$avain2=$ID2\"
		onclick=\"javascript:return confirm('Haluatko varmasti poistaa?')\">
		Poista</a></td>");	
		echo ("</tr>\n");
	}
	echo ("</table>\n");
}
function sivuta($sid, $tulos, $sivulla)
{	
	$sivu=$_SERVER['PHP_SELF'];
	echo "<p>";
	if($sid>0)
	{
		$edellinen=$sid-1;	
		echo "<a href=\"$sivu?sid=$edellinen\"><- Edellinen </a>";
	}
		
	if (mysql_num_rows($tulos)==$sivulla)
	{
		$seuraava=$sid+1;
		echo "<a href=\"$sivu?sid=$seuraava\"> Seuraava -> </a>";
	}
	echo "</p>";
}

?>