<?php

// Criar um algoritmos que imprima a tabuada
// de um número

$numero = 3;
$contador = 10;
echo "Tabuada do número: $numero \n";
for($i = 0; $i <= $contador; $i++){
  echo "$numero X $i = ". $numero * $i . "\n";
}