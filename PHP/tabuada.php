<?php
/**
 * Faça um programa para fazer uma tabuada solicitando: 
 * • Tabuada de qual número? 
 * • Começar a tabuada com qual valor? 
 * • Fazer a tabuada até qual valor?
 */
 
 echo "------------TABUADA----------\n\n";
 $operador = (int) trim(readline("Valor do operador: "));
 $valorFim = (int) trim(readline("Valor fim da multiplicação: "));
 $contador = 0;
 while($contador <= $valorFim) {
   $resultado = $operador * $contador;
   echo "$operador x $contador = $resultado\n";
   $contador++;
 }
 
 echo "\n----------------------------\n";