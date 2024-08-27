<?php

/**
 * Faça um programa que, dada a sequência de Fibonacci (1 1 2 3 5 8 13... n), solicite um número inteiro ao usuário e mostre todos os valores da sequência da posição 1 até a posição informada pelo usuário. Por exemplo, se o usuário digitou o número 10, deverão ser gerados 10 números. Lembre-se de que existem limitações para armazenar valores em uma linguagem de programação.
 */
 // n é == número inteiro 

do {
  $cont = (int) readline("Número: ");
} while ($cont < 2);

$anterior = 0;
$fibo = 1;
  
for ($i = 0; $i < $cont; $i++) {
  
    $prox = ($fibo + $anterior);
    $anterior = $fibo;
    $fibo = $prox;
    print("fibonacci $fibo\n");
  
}