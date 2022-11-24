<?php
/**
 * Declarações condicionais são utilizadas para controlar o fluxo da aplicação de acordo
 * com determinadas condições.
 * 
 * Para a verificação dessas condições, recorremos aos operadores de comparação combinados
 * com os operadores lógicos.
 * 
 * O php contém várias estruturas condicionais, e no php v8+ foi introduzido mais uma nova
 * estrutura condicional, chamado MATCH.
 */

 # DECLARAÇÃO if
 $nome = "Jack";
 if($nome == "Jack"):
    echo "Nome reconhecido com sucesso!";
 endif;

 // Podemos também usar blocos com as {}

 $nome = "Jack";
 if($nome == "Jack"){
    echo "Nome reconhecido com sucesso!";
 }

 # O RESULTADO É O MESMO.

 # DECLARAÇÃO if ... else.

 $idade = 18;
 if($idade <= 18){
    echo 'Adolescente';
 }else{
    echo 'Adulto';
 }


 # DECLARAÇÃO if ... elseif ... else.

 $nota = 5;
 if($nota <= 2){
    echo 'Nota muito baixa';
 }elseif($nota <= 6){
    echo 'Nota baixa';
 }elseif($nota <= 7){
    echo 'Nota boa';
 }elseif($nota <= 9){
    echo 'Nota muito Boa';
 }else{
    echo 'Nota perfeita';
 }



 # PODEMOS AINDA DEIXAR DE USAR O BLOCO DE {}, CASO HAJA SOMENTE UMA INSTRUÇÃO NO BLOCO.
 if($nota < 2)
    echo 'Nota ruim';
  elseif($nota <= 4)
    echo 'Nota baixa';
  elseif($nota <= 6)
    echo 'Nota positiva';
  elseif($nota <= 8)
    echo 'Nota Boa';
  else
    echo 'Nota perfeita';

/**
 * Podemos ainda ter uma combinação das duas circunstâncias
 * Se tivermos uma condição cujo o bloco sendo true, vai escultar mais de uma operação
 * então podemos combinar o uso de {}.
 */

 if($nota <= 2){
    echo 'Nota fraca';
    echo 'Falar com o professor';
 }
  elseif($nota <= 4)
    echo 'Nota baixa';
  elseif($nota <= 6)
    echo 'Nota positiva';
  elseif($nota <= 8)
    echo 'Nota Boa';
  else
    echo 'Nota perfeita';



/**
 * Usando operadores Lógicos
 */

 $numero = 30;
 if($numero > 10 && $numero != 30){
    // Executa esse bloco
 }else{
    // Executa esse outro bloco
 }

 # CONDIÇÕES ANINHADAS

 $numero = 40;
 if($numero >= 0){
    if($numero >= 100){
        echo 'O número é maior que 100';
    }else{
        echo 'O número é positivo, mas, é menor que 100';
    }
 }else{
    echo 'O número é negativo';
 }


 # OPERADOR TERNÁRIO
/**
 * É um operador condicional que pode substituir a estrutura simpres de if ... else
 * O operador necessita de 3 expressões ou áreas.
 * 1 -> A expressão que será avaliada como verdadeira.
 * 2 -> A expressão que será executada com o true.
 * 3 -> A expressão que será executada com o false.
 */

 $opcao = 0;

 $nome = $opcao == 1 ? 'Jack' : 'Mike';

 # Podemos também usar da seguinte forma.
 $opcao == 1 ? $nome = 'Jack' : $nome = 'Mike';

 // Podemos utilizar o operador ternário em diversos casos distintos.
  echo $opcao == 1 ? 'SIM' : 'NÃO';






 # SWITCH CASE -> UMA ALTERNATIVA AO if

 $nome = 'jack';
 switch($nome){
    case 'jack':
        # Executa esse bloco
        break;
    case 'Mike':
        # Executa esse bloco aqui
        break;
    default:
        # Execulta esse bloco
 }

/**
 * O switch é usado para comparar a igualdade de valores com uma expressão
 * ( em geral uma variável é usada ). Ele também pode fazer outros tipos
 * de comparação ou relação entre dois dados. É bem simples, podemos
 * estabelecer uma expressão no switch que é um lado da comparação e em cada
 * 'case' será colocado um valor FIXO, no caso tem que ser um valor literal,
 * pois será o outro lado da comparação. O switch tentará avaliar todos
 * os valores que estabeleça esta igualdade. Para evitar todas as avaliações
 * seguintes é necessário dizer isto explicitamente no código, pra isso
 * usamos o break.
 */



/**
 * EXPRESSÃO MATCH
 * 
 * É uma expressão muito semelhante ao switch, mas com uma sintaxe mais concisa
 */

 # Exemplo em switch
$x = 10;
switch($x){
    case 5:
        echo 'Parou no 5';
        break;
    case 10:
        echo 'Parou no 10';
        break;
    case 15:
        echo 'Parou no 15';
        break;
    default:
        echo ' É diferente de 5, 10 ou 15';
        break;
}


# USANDO O match -> Recurso disponível apenas para php v8+
$x = 6;
echo match($x){
    4 => 'Parou no 5',
    10 => 'Parou no 10',
    15 => 'Parou no 15',
    default => 'É um número diferente de 5, 10 ou 15',
};

# Exemplos avançados
$x = 7;
echo match($x){
   2 => 'É o número 2',
   4,5,6 => 'É 4, 5 ou 6',
   default => 'è algum outro maior que 6'
};

# Mesmo exemplo com switch

$x = 7;
switch($x){
   case 2:
      echo 'É o número 2';
      break;
   case 4:
   case 5:
   case 6:
      echo 'É 4, 5 ou 6';
      break;
   default:
      echo 'è algum outro maior que 6';
      break;
}

// No switch a comparação é feita com ==.
// Já no match, sempre é feita com o ===, estrito. 