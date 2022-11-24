<?php
/**
 * BREACK, CONTINUE, GOTO
 * Existe duas funções especiais dentro dos loops, Break e continue.
 */

 # Break
 # Serve para interromper a execução de um loop.
 for($i = 0; $i <= 20; $i++){
    if($i == 10){
        echo "Parei aqui";
        break;
    }
 }


 $nomes = ["Mike", "Jason", "Ryan"];
 foreach($nomes as $nome){
    echo $nome;
    if($nome == 'Jason'){
        break;
    }
 }



 # CONTINUE
 // Permite avançar uma volta no loop, ou seja, quando acontece o ciclo, o continue passa a fazer outra volta no ciclo.
 $names = ["Mike", "Jason", "Ryan"];
 foreach($names as $name){
    if($name == 'Jason'){
        continue;
    }
    echo $name;
 }

 # GOTO
 // É muito menos usado pois torna a leitura do código mais complexa.
 // Foi introduzido no php v5.3.
 // Permite sair do loop e saltar para uma linha do código definida por uma label(Nome seguido de :)
 for($i = 0; $i <= 10; $i++){
    if($i == 5){
        goto teste; // Salta dessa linha para a linha 48.
    }
    echo $i;
 }
 echo 'fim do loop';
 teste:
 echo 'AQUI!';