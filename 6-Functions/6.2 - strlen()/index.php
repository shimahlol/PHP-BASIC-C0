<?php
function mijnNaamIsGroot(){
	$voornaam = 'bart';
	$achternaam= 'simpson';
	$zinnetje = 'mijn naam is ';
	$gehelenaam = $zinnetje . $voornaam . $achternaam;
	$gehelenaam =strtoupper($gehelenaam);
	echo $gehelenaam;
}

mijnNaamIsGroot();