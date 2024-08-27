<?php
/**
 * Faça um programa que solicite um valor ao usuário e verifique se esse valor é um número primo. Utilize uma estrutura de repetição na solução deste exercício.
 */
 
$number = (int) trim(readline("Número: "));

if ($number < 1 ) {
  print("Número menor que 1!\n");
  echo "\n\n-_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_";
  die();
} 

if ($number == 2 || $number == 3) {
  print "Número primo!\n";
} elseif ($number > 3) {
  $limite = round(sqrt($number));
  for ($i = 2; $i <= $limite; $i++) {
    if ($number % $i == 0) {
      print("Número não é primo!\n");
      echo "\n\n-_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_";
      exit;
    }
  }
  print("Número é primo!\n");
  echo "\n\n-_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_";
}