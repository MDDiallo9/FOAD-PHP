<?php 
$tempCelsius = [25,03,35,11];

function conversion($tempC){
    return ($tempC * 9/5) + 32;
}

echo conversion(25);
?>
