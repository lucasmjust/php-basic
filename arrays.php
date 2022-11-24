<?php

# ARRAYS
# Arrays são coleções de chaves/índices e valores.

/**
 * Um array pode conter dados de vários tipos, inclusive outro array.
 */

 # EXEMPLOS PRÉ-PHP v5.4+
 $valores = array(1,2,3,4,5,6,7,8,9,10);
 $lista_de_nomes = array('Jack','Marcos','Samuel','Ryan');

 # EXEMPLOS PÓS-PHP v5.4+
 /**
  * A partir do PHP 5.4, instânciar um array passou a ser mais simples, da seguinte forma:
  */
 $valores = [1,2,3,5,8,13,21,34,55];
 $lista_de_nomes = ['Myke', 'Bob', 'Jason', 'Castle'];

 // ARRAYS NUMÉRICOS CONSISTEM EM APENAS O VALOR SEM A CHAVE/ÍNDICE.
 # EXEMPLOS:
 $numerico = [1,43,32,534];
 for($i = 0; $i < count($numerico); $i++){
    echo $numerico[$i] . ' ';
 }
// SAÍDA --> 1 43 32 534

 # Ex:
 $outroNumerico = ['Mike', 'Jack', 'Jason', 'Benner'];
 for($i = 0; $i < count($outroNumerico); $i++){
    echo $outroNumerico[$i] . ' ';
 }
 // SAÍDA --> Mike Jack Jason Benner

 # É muito importante lembrar que arrays tem índice de base 0;
$array = [1, 2, 3, 4, 5];
# índice [0, 1, 2, 3, 4] // LOGO ELE ATRIBUI AUTOMATICAMENTE OS ÍNDICES NÚMERICOS A PARTIR DE 0.

/**
 * Quando queremos colocar chaves específicas em um item de um array, usamos as chaves/índices
 */
# EXEMPLO:
$array_com_chave = [
    1 => "primeiro item",
    2 => "segundo item",
    3 => "terceiro item",
    4 => "quarto item",
    5 => "quinto item",
];
// Para mostrar os itens, usamos o foreach da seguinte forma.
# Dessa maneira podemos ter como saída, as chaves e valores ou somente chave ou valor.
foreach($array_com_chave as $chave => $valor){
    echo $chave . ' -> ' . $valor . "\n";
}
 // SAÍDA
 /**
  * chave01 -> primeiro item
  * chave02 -> segundo item
  * chave03 -> terceiro item
  * chave04 -> quarto item
  * chave05 -> quinto item
  */


// O FOREACH É A FUNÇÃO DEFINITIVA PARA PERCORRER ARRAYS, MAS PODEMOS TAMBÉM, USAR O LOOP 'FOR'.

/**
 * Agora vamos ver a maneira mais simples de mostrar um dado de um array.
 */

 # SEMPRE QUE QUISERMOS APRESENTAR O VALOR DE UM ARRAY, USAMOS O SEU ÍNDICE.
 # E SEMPRE QUE QUISERMOS ALTERAR O VALOR DE UM ARRAY, TAMBÉM USAMOS O SEU ÍNDICE.

 $valores = [10,20,30];

 $valores[1] = 200; // O array valores ficará dessa forma $valores = [10, 200, 30];

 # Podemos também ignorar o índice para adicionar um novo elemento no array.
 $valores[] = 300; // Logo esse valor vai ficar no final do array.

 # Também podemos usar uma função para adicionar um novo elemento dentro de um array.
 array_push($valores, 400); // Esse valor também vai ficar no final do array.




 # ARRAYS ASSOCIATIVOS

 /**
  * Arrays associativos ao contrário de arreis numéricos, as chaves são do tipo string.
  */
  # EXEMPLO:
  $dados = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
  ];

  # OU

  $dados = [
    'nome' => 'Jack',
    'email' => 'jack@gmail.com',
    'idade' => 43,
    'nacionalidade' => 'Brasil',
    'telefone' => '99999999999'
  ];

  // Da mesma forma que os arrays numéricos, não podem haver chaves iguais nos arrays associativos.

 # SEMPRE QUE QUISERMOS APRESENTAR O VALOR DE UM ARRAY ASSOCIATIVO, USAMOS A SUA CHAVE.
 # E SEMPRE QUE QUISERMOS ALTERAR O VALOR DE UM ARRAY ASSOCIATIVO, TAMBÉM USAMOS A SUA CHAVE.
 
 echo $dados['nome']; // Logo o nome seria exibido.
 $dados['idade'] = 34; // Logo a idade seria alterada para 34.

 # ARRAYS MISTOS ( MIXED ARRAYS )
 // É possível criar um array que combina índices númericos e strings.

 $dados2 = [
    0 => 20,
    'nome' => 'Mike',
    'Apelido' => 'Mikao',
    3 => 2000,
    4 => 'Noruega'
 ];

 // Seguir esse padrão de array torna sua manipulação mais complexa, por isso não é muito usado.



 # ARRAYS MULTIDIMENSIONAIS
 /**
  * Mais comumente usados, os arrays multidimensionais são arrays numéricos ou associativos, 
  * cujo os valores são outros arrays.
  */
  # EXEMPLOS:
  $dados = [
    [10, 20, 30, 40],
    [100, 200, 300, 400],
    [1000, 2000, 3000, 4000]
  ];

  // Para apresentar os valores desse array, usamos o seguinte método.
  echo $dados[0][0]; // Saída --> 10
  echo $dados[1][2]; // Saída --> 300

  // Podemos também ter arrays multidimensionais associativos
  $cidades = [
    'Portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'Brasil' => ['Brasília', 'São Paulo', 'Teresina'],
    'USA' => ['Nova York', 'Los Angeles', 'San Francisco'],
  ];

  echo $cidades['Portugal'][1]; // Saída --> Porto
  echo $cidades['Brasil'][2]; // Saída --> Teresina
  echo $cidades['USA'][0]; // Saída --> Nova York


  # ARRAYS PODEM TER MAIS DO QUE DUAS DIMENSÕES


