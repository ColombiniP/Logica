<?php

function tratarNumDLivros() : int
{
  do {
    $qtdd = intval(trim(readline("Quantos livros? ")));
  } while (!is_int($qtdd) || $qtdd < 1);
  if (is_int($qtdd)) {
    return $qtdd;
  }
}

function desconto(int $qtdd) : void 
{
  $critA = $qtdd * 0.25 + 7.5;
  $critB = $qtdd * 0.50 + 2.5;
  // printf("Critério A: R$%.2f\n",$critA);
  // printf("Critério B: R$%.2f\n",$critB);
  if ($critA < $critB) {
    printf("Sugestão de menor valor: R$%.2f\n",$critA);
  } else {
    printf("Sugestão de menor valor: R$%.2f\n",$critB);
  }
}

$qtdd = tratarNumDLivros();
desconto($qtdd);

