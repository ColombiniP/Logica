<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio Programação - GPT generative</title>
        <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    </head>
    <body>
        <section class="cabecalho">
            <div class="menu-nav">
                
            </div>
            <div class="titulo">
                <h1>
            <?= "Desafio Programação - GPT generative" ?>
        </h1>
            </div>
        </section>
        <section class="primaria">
            <p>
              Aqui estão 10 desafios de lógica de programação para você treinar:
            </p>
            <ol>
                <li>
                  <strong>FizzBuzz</strong>: Escreva um programa que imprime os números de 1 a 100. Mas para múltiplos de 3, imprima "Fizz" em vez do número e, para múltiplos de 5, imprima "Buzz". Para números que são múltiplos de ambos 3 e 5, imprima "FizzBuzz".
                </li>
                <p>
                  <?php
                    include_once('contaNumero.php')
                  ?>
                </p>
                <li>
                    <strong>Números Primos</strong>: Crie uma função que verifica se um número é primo. Utilize essa função para imprimir todos os números primos entre 1 e 100.
                </li>
                <p>
                  <?php 
                    include_once 'primo.php' 
                  ?>
                </p>
                <li>
                <strong>Palíndromo</strong>: Escreva um programa que verifica se uma string é um palíndromo (a mesma leitura de frente para trás e de trás para frente).
                </li>
                <p>
                  
                </p>
                <li>
                    <strong>Fatorial</strong>: Implemente uma função que calcule o fatorial de um número dado. Por exemplo, o fatorial de 5 (5!) é 120.
                </li>
                <li>
                    <strong>Sequência de Fibonacci</strong>: Crie uma função que gera os primeiros n números da sequência de Fibonacci. Por exemplo, os primeiros 10 números da sequência de Fibonacci são 0, 1, 1, 2, 3, 5, 8, 13, 21, 34.
                </li>
                <li>
                <strong>Ordenação</strong>: Implemente o algoritmo de ordenação "bubble sort". Dada uma lista de números, ordene-os em ordem crescente.
                </li>
                <li>
                  <strong>Anagramas</strong>: Escreva uma função que verifica se duas strings são anagramas (têm os mesmos caracteres na mesma quantidade, mas em ordem diferente).
                </li>
                <li>
                  <strong>Contagem de Caracteres</strong>: Crie um programa que conta a frequência de cada caractere em uma string. Por exemplo, na string "banana", a saída deve ser: b: 1, a: 3, n: 2.
                </li>
                <li>
                  <strong>Busca Binária</strong>: Implemente o algoritmo de busca binária para encontrar um elemento em uma lista ordenada. A função deve retornar a posição do elemento ou -1 se não for encontrado.
                </li>
                <li>
                  <strong>Troca de Variáveis</strong>: Escreva um programa que troca os valores de duas variáveis sem usar uma variável temporária. Por exemplo, se x = 3 e y = 5, após a troca, x deve ser 5 e y deve ser 3.
                </li>
            </ol>
            <p>
              Cada um desses desafios vai ajudar você a praticar diferentes aspectos da lógica de programação, desde loops e condições até algoritmos de busca e ordenação. Boa sorte!
            </p>
        </section>
    </body>
    <script type="text/javascript" charset="utf-8">
        document.write();
    </script>
</html>