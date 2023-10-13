<?php 
 
 function debug($value)
 {
     echo '<pre style="background-color:black;color:white;overflow: auto;padding: 1rem;font-family:monospace;">';
     print_r($value);
     // var_dump($value);
     echo '</pre>';
 }

$path = 'data/persons.json';
$jsonString = file_get_contents($path);
$jsonData = json_decode($jsonString, true);
debug($jsonData);


?>