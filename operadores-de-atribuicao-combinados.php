<?php

# OPERADORES DE ATRIBUIÇÃO COMBINADOS
/**
 * Permite alterar o valor de uma variável, a partir de seu valor inicial
 */

 $a = 10;

 $a = $a + 20;      # 10    // INCREMENTO
 $a = $a - 3;       # 7     // DECREMENTO
 $a = $a * 2;       # 20    // INCREMENTO
 $a = $a / 2;       # 5     // DECREMENTO

 // SIMPLIFICANDO ...

 $a += 20;      # 10    // INCREMENTO
 $a -= 3;       # 7     // DECREMENTO
 $a *= 2;       # 20    // INCREMENTO
 $a /= 2;       # 5     // DECREMENTO

 // PRÉ e PÓS INCREMENTO ...

 $a = 10;

 $a++;      # É incrementado um valor 1 unidade, após verificar a variável         
 ++$a;      # É incrementado um valor 1 unidade, antes da verificação da variável

  // PRÉ e PÓS DECREMENTO ...

  $a = 10;

  $a--;     # É decrementado um valor de 1 unidade, após verificar a variável       
  --$a;     # É decrementado um valor de 1 unidade, antes da verificação da variável

