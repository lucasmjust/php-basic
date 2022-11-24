<?php

// A biblioteca de uma universidade deseja fazer
// um algoritmo que leia o nome do livro que
// será emprestado, o tipo de usuário (professor
// ou aluno) e possa imprimir um recibo
// conforme mostrado a seguir. Considerar que
// o professor tem 10 dias para devolver o livro
// o aluno somente 3 dias

$livro = "matemática";
$usuario = "professor";
$dias = [3, 10];

if($usuario == 'aluno'){
  echo "\n Livro: $livro \n Locado por: $usuario \n Devolver em: $dias[0] Dias";
}elseif($usuario == 'professor'){
  echo "\n Livro: $livro \n Locado por: $usuario \n Devolver em: $dias[1] Dias";
}