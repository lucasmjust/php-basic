<?php

# OPERADORES DE COMPARAÇÃO
/**
 * Os operadores de comparação são de extrema importância para as operações lógicas.
 */

 $a = (10 != 5);            # true
 $a = (2 <> 3);             # true ( Alternativo )
 $a = (10 != 5);            # true
 $a = (50 != 50);           # false
 $a = (50 != '50');         # false 
 $a = (50 !== '50');        # true // Operador estrito, verifica a igualdade e tipo de dado.

 /**
  * Operadores comparação maior, menor, maior que e menor que
  */

  $a = (2 < 5);            # true
  $a = (2 <= 5);           # true
  $a = (2 > 5);            # false
  $a = (2 >= 5);           # false
  $a = (5 < 5);            # false
  $a = (5 > 5);            # false
  $a = (5 >= 5);           # true
  $a = (5 <= 5);           # true



  /**
   * Spaceship Operator
   */

   $x = 1 <=> 1;            # 0 (1 == 1) // 1 é ugual a 1, logo o resultado é 0
   $x = 3 <=> 2;            # 1 (3 > 2)  // 3 é maior que 2, logo o resultado é 1
   $x = 1 <=> 2;            # -1 (1 < 2) // 1 é menor que 2, logo o resultado é -1