<?php
// Entrar com nome, sexo e idade de uma
// pessoa. Se a pessoa for do sexo feminino e
// tiver menos que 25 anos, imprimir nome e a
// a mensagem: ACEITA. Caso contrário,
// imprimir nome e a mensagem: NÃO ACEITA.

$nome = "Jack nicols";
$idade = 34;
$sexo = "M";
if($idade < 25 && $sexo == "F"){
  echo "$nome ACEITA.";
}else{
  echo "$nome NÃO ACEITA.";
}