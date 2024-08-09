<?php

/**
 * Escrever um programa que solicite a idade do usuário e exiba suacondição eleitoral: 
 * • Entre 16 e 17 anos: voto opcional. 
 * • Entre 18 e 70 anos: voto obrigatório. 
 * • Acima de 70 anos: voto opcional.
 */

$idade = intval(trim(readline("Sua idade: ")));

if ($idade < 16) {
  print("Não pode votar!")."\n\n";
} else if ($idade <= 17) {
  print("Entre 16 e 17 anos: voto opcional.")."\n\n";
} else if ($idade <= 70) {
  print("Entre 18 e 70 anos: voto obrigatório.")."\n\n";
} else {
  print("Maior que 70 anos: voto opcional.")."\n\n";
}