<?php
class Yhteys// yhteys-luokka
{

	private $yhteys;
	
	public function __construct ($palvelin, $kayttaja, $salasana, $kanta) 
	{
		$this->yhteys = mysql_connect ($palvelin, $kayttaja, $salasana, $kanta);
		mysql_select_db($kanta,$this->yhteys);
		mysql_set_charset('utf8', $this->yhteys);
	}
	
	public function suljeYhteys()
	{
		mysql_close($this->yhteys);		
	}
	public function suoritaSql($sql)
	{
		$sql=strip_tags($sql);
		$tulos=mysql_query($sql);
		return $tulos;		
	}
	
}
?>