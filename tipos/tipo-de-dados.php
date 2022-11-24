<?php

# TIPOS DE DADOS
# =======================================

/**
 * As variáveis em php podem ter diferentes tipos de valores,
 * a mesma variável pode ter tipos diferentes de valores.
 */

 $variavel = 100;
 $variavel = "cem";


 # Apesar de ser variáveis do tipo implícito, é importante saver:

 $inteiro = 100;                    # Int
 $float = 10.5;                     # Float ( com casas decimais)
 $bool = true;                      # Verdadeiro ou Falso (true / false)
 $string = 'Olá mundo!';            # String (cadeia de caracteres)
 $array = [1, 2, 3, 'texto'];       # Array - Coleção de valores
 $pessoa = new Pessoa();            # Objeto com propriedades e métodos
 $nulo = null;                      # Variável com valor nulo