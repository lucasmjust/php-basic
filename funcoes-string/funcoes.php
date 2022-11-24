<?php

# FUNÇÕES DE STRINGS.

$texto = "vamos percorrer essa string";

for($i = 0; $i < mb_strlen($texto); $i++){
    //echo "\n {$texto[$i]}";
}

/**
 * A função strlen() verifica a quantidade de caracteres de uma string, mas lida mal com o padrão UTF-8
 * Para então não termos problemas caso a frase tivesse alguma acentuação, usamo o préfixo 'mb'
 * deixando assim a chamada da função mb_strlen().
 */

 /**
  * Veja que há um caractere de scape, \n, o php tem forte ligação com a Linguagem C, então é possível
  * aproveitar os caracteres de scape, como \n, \t, \r entre outros.
  */

  # PEGANDO CARACTERES ESPECÍFICOS.
  /**
   * Podemos pegar um caracter através do índice, uma string nada mais é do que uma cadeia de 
   * caracteres, logo, terá um comportamento parecido com o de um array.
   */

   $frase = "Essa é minha frase";
   echo $frase[2];


   /**
    * Podemos usar a função substr() para pegar parte de uma string.
    */

    $frase = "Pegando essa parte aqui!";
    echo substr($frase2, 0, 7);

    /**
     * A função strtoupper() converte toda string para Maiúscula.
     */
     $todas_maiusculas = mb_strtoupper($frase);

     /**
     * A função strtolower() converte toda string para Minúscula.
     */
     $todas_minusculas = mb_strtolower($frase);


     /**
      * A fução str_replace() -> substitui uma letra ou palavra por outra, pega todas as aparições.
      */
      $nova_frase = str_replace("Pegando", "Selecionando", $frase);


      /**
       * A função strpos(), verifica qual é a posição de um caractere ou palavra dentro de uma string.
       */
      $posicao = strpos($frase, 'a');


      /**
       * A função str_contains() -> verifica se uma informação existe dentro de uma string.
       */
      $nome = "Lucas Mateus Alves Suirad";
      $verificao = str_contains($nome, 'Suirad');


      /**
       * A função str_starts_with() -> verifica com qual palavra ou caracter a string começa.
       */
      $result = str_starts_with($nome, "Lucas"); // TRUE -> verifica CamelCase

      /**
       * A função str_ends_with() -> verifica com qual palavra ou caracter a string termina.
       */
      $result = str_ends_with($nome, "Suirad"); // TRUE -> verifica CamelCase
