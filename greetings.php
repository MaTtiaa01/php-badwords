<?php

$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];
//var_dump($paragrafo);

$parLength = strlen($paragrafo);
$newString = str_ireplace($parola, '***', $paragrafo);
$newParLen = strlen($newString);

echo "Il paragrafo: $paragrafo è lungo $parLength caratteri"."<br>";
echo "Il nuovo paragrafo: $newString è lungo $newParLen caratteri";
