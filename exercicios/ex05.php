<?php

// Ler 3 números, os possíveis lados de um
// triângulo, e imprimir a classificação de
// acordo com tamanho dos lados

$ladoA = 4;
$ladoB = 5;
$ladoC = 10;

if($ladoA == $ladoB && $ladoB == $ladoC && $ladoC == $ladoA){
  echo "Triângulo equilátero";
}elseif($ladoA != $ladoB && $ladoB != $ladoC && $ladoC != $ladoA){
  echo "Triângulo escaleno";
}elseif($ladoA != $ladoC || $ladoA != $ladoB || $ladoB != $ladoC){
  echo "Triângulo isósceles";
}else{
  echo "Nenhum desses valores formam um triângulo";
}