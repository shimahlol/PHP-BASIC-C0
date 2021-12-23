<?php
$myHeroesNames =  ['tijger', 'mickey', 'tijger'];
echo $myHeroesNames[0];
echo $myHeroesNames[1];
echo $myHeroesNames[2];
$myHeroesNames[1] = 'panter';
echo $myHeroesNames[1];
echo "<br>";
$myHeroesNames[3] = "jamiro";
array_push($myHeroesNames, "silver");
print_r($myHeroesNames); 