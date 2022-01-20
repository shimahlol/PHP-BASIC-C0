<?php
function zetTweeWoordenAanElkaar(){
	$woordje = 'Hallo';
	$zinnetje = 'mooie blauwe lucht';
	$helezin = $woordje . $zinnetje;
	$helezin =strtoupper($helezin);
	echo $helezin;
}

zetTweeWoordenAanElkaar();