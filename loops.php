<?php
/**
 * CICLOS/LOOPS
 * Existem 4 estruturas de repetição no php.
 * Elas existem para permitir a execução de um determinado bloco de código várias vezes.
 */

 # WHILE
/**
 * Definimos a condição durante a qual o ciclo deve continuar a ser executado.
 * Quando essa condição for falsa, o ciclo termina e o código avança.
 */

 $x = 1;
 while($x <= 10){
   // echo "O ciclo está em execução $x \n";
    $x++;
 }

# DO WHILE
/**
 * O do while é muito semelhante ao laço while, contudo,
 * neste caso a condição é avaliada após o ciclo ter se execeutado uma vez. 
 */
$x = 0;
do{
    echo " Executou " . $x++ . "\n";
}while( $x <= 10);

// Quando só temos uma expressão no do while para ser executada
// Não precisamos usar um bloco de {}.


# CICLO FOR
/**
 * Permite executar um bloco de código um determinado número de vezes
 * É constituido por três parâmetros.
 * 1 -> O iniciador --> Indica o valor inicial do contador.
 * 2 -> A condição --> Indica qual a condição para que o ciclo termine.
 * 3 -> O incremento --> Altera o valor do contador em cada ciclo.
 */
 for($x = 0; $x <= 10; $x++){
  echo $x;
 }

 # O ciclo for também pode ser usado com uma sintaxe diferente.
 $i = 0;
 for(; $i <= 10;){
  echo $i++;
 }


 # O primeiro e último parâmetro, também podem ser dividos.
 for($contador = 1, $x = 10; $contador <= 10; $contador++, $x--){
  echo $x;
 }

 # Também usamos o ciclo for para percorrer arrays.
 $meu_array = [1,2,3,4,5];
 for($i = 0; $i <= sizeof($meu_array); $i++){
  echo $meu_array[$i];
 }

 # FOREACH
 // è um ciclo especial usado especificamente para percorrer arrays.

 $names = ["mike", "Bolt", "Ryan"];
 foreach($names as $name){
  echo $name;
 }

 // Podemos ainda pegar a chave do elemento.
 foreach($names as $key => $name){
  echo $key . " -> " . $name;
 }