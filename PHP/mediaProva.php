<?php

function media(int $n1, int $n2, int $n3) : int
{
  $media =(integer) ($n1 + $n2 + $n3) / 3;
  return $media;
}

function aprovado(int $media) : bool
{
  $aprovado = true;
  $reprovado = false;
  return $media >= 5 ? $aprovado : $reprovado;
}

$nota1 = intval(readline("Nota prova 1: "));
$nota2 = intval(readline("Nota prova 2: "));
$nota3 = intval(readline("Nota prova 3: "));

echo $media = media($nota1,$nota2,$nota3).PHP_EOL;

if (aprovado($media)) {
  echo "Aprovado\n";
} else {
  echo "Reprovado\n";
}