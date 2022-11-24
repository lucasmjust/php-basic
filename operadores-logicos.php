<?php

# OPERADORES LÓGICOS 

/**
 * Os operadores lógicos são frequentemente usados com os operadores de comparação,
 * eles permitem 'ligar' várias comparações avaliando se são verdadeiras ou falsas
 * 
 * No php a construção correta de instruções condicionais depende destes operadores
 * ( Instruções condicionais verificam se uma instrução é verdadeira (true) ou falsa (false))
 */

 $a = 100;
 $b = 200;

 $x = ($a < $b) && ($a < 1000);             # AND -> true
 $x = ($a > $b) || ($a > 1000);             # OR -> false
 $x = ($a < 150) && ($b > 500);             # false
 $x = ($a > 10) || ($b > 500);              # true
 $x = ($a == 100) && ($b < $a);             # false


 # Exemplos

 $x = (10 > 5) && (20 > 30);
 $x = (true && false);          # false

 $x = (2 > 1) && (3 > 2);
 $x = (true && true);           # true

 $x = (2 < 4) || (4 > 10);
 $x = (true || false);          # true

 $x = (2 == 3) || (3 > 1);
 $x = (false || true);          # true




 # NEGAÇÃO - NOT

 /**
  * Verificação contrária ao valor de uma variável booleana
  */

  $a = false;
  $x = !$a;             # NOT -> true


  // TODOS OS OPERADORES LÓGICOS

  # AND     --> &&
  # OR      --> ||
  # NOT     --> !
  # XOR     --> <=> ( si e somente si)