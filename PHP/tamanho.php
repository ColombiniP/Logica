<?php
/**
 * Em que ano, contando a partir do ano atual, um pé de abacate fica mais alto do que um pé de manga? O pé de manga tem 1,50 m e cresce 2 centímetros por ano, e o pé de abacate tem 1,10 m e cresce 3 centímetros por ano. Faça um programa para responder essa pergunta, utilizando uma das estruturas de repetição.
 */
 
 $peManga = 1.50;
 $peAbacate = 1.10;
 $ano = 2024;
 echo "$ano\n";
 echo "Tamanho do pé de manga: $peManga\n";
 echo "Tamanho do pé de abacate: $peAbacate\n\n";
 while($peAbacate < $peManga) {
   $ano++;
   $peManga += 0.02;
   $peAbacate += 0.03;
   if ($peAbacate > $peManga){
     echo "$ano\nTamanho pé manga: $peManga;\nTamanho pé de abacate: $peManga;\n";
   }
 }