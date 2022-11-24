<?php
// Entrar com 20 números e imprimir a soma
// dos positivos e o total de números negativos


$numeros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
for($i = 1; $i <= sizeof($numeros); $i++){
  if($numeros[$i] % 2 != 0){
    // echo $i . "\n"; // Imprime os positívos.
    $soma += $i;
  }
}
echo "Soma dos Positivos: $soma \n";
echo "Números negativos: \n";

foreach($numeros as $valor){
  if($valor % 2 != 0){
    echo $valor . "\n";
  }
}