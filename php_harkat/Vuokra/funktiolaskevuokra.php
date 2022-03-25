<?php

function Laskevuokra($leveys, $pituus, $neliohinta)
{

	$pinta_ala=$leveys*$pituus;
	$vuokra=$neliohinta*$pinta_ala;
	//Tämä funktio palauttaa vuokranmäärän kutsukohtaan pitää olla return
	return $vuokra;
	
}






?>