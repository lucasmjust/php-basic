<?php
/**
 * Tipo String
 */

 echo 'Eu sou uma string'; // String literal

 // Scape de strings
 echo "'sai com aspas simples'" . '"sai com aspas duplas"' . '\'sai com aspas simples\'';
 // Basta colocar o '\' para escapar o texto

 // Conversões de texto
 echo strtoupper('esse método transforma o texto minúsculo para maiúsculo');
 echo strtolower('esse método transforma o texto maiúsculo para minúsculo');
 echo ucfirst('esse método deixa somente a primeira maiúscula');
 echo ucwords('esse método deixa todas as palavras com a inicial maiúscula');


 // Podemos verificar o tamanho da string com a seguinte função.
 mb_strlen('Esse método diz quantas caracteres tem na string', 'utf-8'); // não há problemas com o utf-8, é opcional

 // Pegando partes da string
 substr('Só pega uma parte', 1, 8); // saída -> 'ó pega '.

 // Procurando palavras dentro de uma string
 str_replace('isso', 'aquilo', 'Substitui por isso'); // troca todas as palavras que existirem, não somente a primeira.

 // Concatenação -> usamos '.' ou vírgula no echo ','


 