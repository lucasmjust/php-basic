<?php
// Entrar com um número e informar se ele é
// divisível por 10, por 5, por 2 ou se não é
// divisível por nenhum destes

$numero = 10;
if($numero % 10 == 0 || $numero % 10 == 1 && $numero >= 10){
  echo "Número é divisivel por 10, 5 e 2";
}elseif($numero % 5 == 0 || $numero % 5 == 1 && $numero >= 5){
  echo "Número é divisivel por 5 e 2";
}elseif($numero % 2 == 0 || $numero % 2 == 1){
  echo "Número é divisivel por 2";
}else{
  echo "Não é divisivel por nenhum desses números";
}