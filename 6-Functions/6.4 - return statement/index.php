<?php
function geefTienProcent(){
	$koopPrijs = 75;
	$korting = 10;
	$korting = ($koopPrijs / 100) * $korting;
	return $koopPrijs - $korting;
}

geefTienProcent();