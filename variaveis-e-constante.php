<?php 

/**
 * Variáveis em php
 * Para criarmos variáveis em php usamos o $nome_da_variável
 * Ex:
 */
$minhavariavel = "Conteudo da minha variável";

/**
 * Podemo armazenar qualquer informação dentro de uma variável.
 * Valores específicos
 * Operações matemáticas
 * Retorno de funções
 * Arrays
 * entre outros resultados
 * Ex:
 */

 $armazena_uma_string = "Eu sou uma string";
 $armazena_uma_operacao_matematica = (20 * 10) / 20;
 $armazena_o_retorno_de_uma_funcao = mostrarNome();

function mostrarNome(){
    echo "Meu nome foi mostrado";
}

/**
 * Constantes
 * Constantes são definidas para que a informação armazenada nela, não se altere,
 * Podemos instânciar uma constante da seguinte forma.
 * Diferente da variável que precisamos sempre colocar o $ para poder chamar, na constante não é necessário.
 * Ex:
 */

 define('NOME_DA_CONSTANTE', 'EU SOU O VALOR DA CONSTANTE');
 define('DOMINIO', 'https://www.meudominio.com');
