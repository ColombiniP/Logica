<?php

$numMes;
do {
   $numMes = intval(readline("Número do mês: "));
} while ($numMes < 1 || $numMes > 12);

switch($numMes) {
  case 1:   
    echo "Janeiro\n";   
    break;
  case 2:   
    echo "Fevereiro\n";   
    break;
  case 3:   
    echo "Março\n";   
    break;
  case 4:   
    echo "Abril\n";   
    break;
  case 5:   
    echo "Maio\n";   
    break;
  case 6:   
    echo "Junho\n";   
    break;
  case 7:   
    echo "Julho\n";   
    break;
  case 8:   
    echo "Agosto\n";   
    break;
  case 9:   
    echo "Setembro\n";   
    break;
  case 10:   
    echo "Outubro\n";   
    break;
  case 11:   
    echo "Novembro\n";   
    break;
  case 12:   
    echo "Dezembro\n";   
    break;
  default:
    return false;
}