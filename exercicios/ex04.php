<?php
// Entrar com 3 números e imprimi-los em
// ordem decrescente (suponha números
// diferentes)

  $numeros = [2,5,12]; // A entrada de dados poderia ser feita inserindo os dados em um array para depois ordenar
  arsort($numeros);
  foreach($numeros as $valor){
    echo $valor . "\n";
  }