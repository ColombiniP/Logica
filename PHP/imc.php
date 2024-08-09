<?php

echo ("-----------------------------IMC---------------------------\n\n");

function sexo() : string
{
  do {
  $sexo = strtoupper(trim(readline("sexo M ou F: ")));
  } while ($sexo != "F" and $sexo != "M");
  return $sexo;
}

function altura() : float
{
  $tamanho = trim(floatval(readline("Sua altura metros: ")));
  return $tamanho;
}

function imc(string $s, float $h) : float
{
  if ($s == "M") {
    return (72.7 * $h) - 58;
  }
  
  if ($s == "F") {
    return (62.1 * $h) - 47.7;
  }
}

$altura = altura();
$sexo = sexo();
$imc = imc($sexo,$altura);

printf("Peso ideal: %.2fKg\n\n",$imc);

echo ("-----------------------------------------------------------\n");