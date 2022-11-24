<?php 
/**
 * Tipos de dados em php.
 * Os tipos de primitivos são encontrados em todas as linguagens de programação.
 * No php não é diferente, embora o php lide com os tipos de maneira dinâmica.
 * No php não é necessário tipificar os dados, pois ele faz a inferência de maniera dinâmica,
 * diferente de linguagenscomo o Java, C entre outras.
 * 
 * Para mostrarmos o tipo da variável, usamos a função var_dump();
 */

/**
 * Tipo Inteiro - Interger.
 * 
 * Podemos armazenzar qualquer valor inteiro em uma variável desde que não ultrapasse o valor base do seu sistema.
 * Vamos ver funções que mostram qual o maior e menor inteiro suportado pela máquina de acordo com a arquitetura so sistema.
 */

  $numero = 20;
  $numero_somado = 10 + $numero;

  // Máximo valor positivo de um inteiro - interger
  echo PHP_INT_MAX;

  // Mínimo valor negativo de um inteiro - interger
  echo PHP_INT_MIN;

  // Usando bases numéricas
  // Para usarmos a base octal acrescentamos um 0 no início.
  echo 017; // base octal
  
  // Para usarmos a base binária basta colocar 0b no início.
  echo 0b100111101; // base binária

  // Para usarmos a base hexadecimal, usamos o 0x.
  echo 0x142cda21; // base hexadecimal.


