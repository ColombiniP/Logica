/**
 * Faça um programa que solicite um valor ao usuário e calcule o fatorial desse número.
 */
 
// do{
//   $contador = 0;
//   echo "FATORIAL\n";
//   $numero = (int) trim(readline("Número: !"));
//   
//   if ($numero < 0) {
//     echo "Número precisa ser maior ou igual que 0!";
//   } elseif ($numero == 0) {
//     echo "0! = 0\n";
//   } elseif ($numero == 1) {
//     echo "1! = 1\n";
//   } else {
//     for ($i = 1;$numero >= $i; $i++) {
//       $i *= $numero;
//       echo $numero."\n";
//     }
//   }
// } while ($numero < 0);
// u

<?php
// CORRIGIDO CHAT

do {
    echo "\nFATORIAL\n";
    $numero = (int) trim(readline("Número: !"));

    if ($numero < 0) {
        echo "Número precisa ser maior ou igual que 0!\n";
    } elseif ($numero == 0) {
        echo "0! = 1\n"; // Por definição, 0! = 1
    } elseif ($numero == 1) {
        echo "1! = 1\n";
    } else {
        $fatorial = 1; // Inicializa o fatorial como 1
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i; // Multiplica o fatorial pelo valor de $i
        }
        echo "$numero! = $fatorial\n"; // Imprime o resultado final
    }
} while ($numero < 0);