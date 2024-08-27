<?php

/**
 * Faça um menu de opções de um programa com as seguintes regras: 
 * • O usuário deve selecionar as opções 0, 1, 2 ou 3. Outros valores são inválidos, e a opção deverá ser selecionada novamente. 
 * • Se a opção selecionada for 0, encerre o programa.
 * Se a opção selecionada for 1, execute a lógica do exercício 3. 
 * • Se a opção selecionada for 2, execute a lógica do exercício 4. 
 * • Se a opção selecionada for 3, execute a lógica do exercício 5.
 */
 
echo "-_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_\n\n";
 
 print("MENU DE OPÇÕES\n");
 print("0 - Encerrar\n1 - Fatorial\n2 - Fibonacci\n3 - Primo\n\n");

do {
  $option = (int) trim(readline("Opção: "));
} while ($option < 0 || $option > 3);

if ($option == 0) {
  echo "Até a próxima!\n";
  echo "\n\n-_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_";
  exit;
} elseif ($option == 1) {
  require("./fatorial.php");
  echo "\n\n-_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_";
  exit;
} elseif ($option == 2) {
  print("Fibonacci\n\n");
  require("./fibonacci.php");
  echo "\n\n-_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_";
  exit;
} elseif ($option == 3) {
  print("Primo\n\n");
  require("./primo.php");
  echo "\n\n-_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_";
  exit;
}
 
echo "\n\n-_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_--_-_";