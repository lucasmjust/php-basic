<?php

// Ler um número inteiro entre 1 e 12 e escrever
// o mês correspondente. Caso o número seja
// fora desse intervalo, informar que não existe
// mês com este número

$mes = 1;

switch ($mes) {
  case 1:
    echo " Estamos no mês de Janeiro";
    break;
  case 2:
    echo " Estamos no mês de Fevereiro";
    break;
  case 3:
    echo " Estamos no mês de Março";
    break;
  case 4:
    echo " Estamos no mês de Abril";
    break;
  case 5:
    echo " Estamos no mês de Maio";
    break;
  case 6:
    echo " Estamos no mês de Junho";
    break;
  case 7:
    echo " Estamos no mês de Julho";
    break;
  case 8:
    echo " Estamos no mês de Agosto";
    break;
  case 9:
    echo " Estamos no mês de Setembro";
    break;
  case 10:
    echo " Estamos no mês de Outubro";
    break;
  case 11:
    echo " Estamos no mês de Novembro";
    break;
  case 12:
    echo " Estamos no mês de Desembro";
    break;
  default:
    echo "Não existe um mês com esse número";
    break;
}
