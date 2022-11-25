<?php

$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];
//var_dump($paragrafo);

$lenght = strlen($paragrafo);

echo "Il paragrafo: $paragrafo è lungo $lenght caratteri";