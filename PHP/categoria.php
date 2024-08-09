<?php

/**
 * Escrever um programa que informe a categoria de um jogador de futebol, considerando sua idade: 
 * • Infantil: até 13 anos. 
 * • Juvenil: até 17 anos. 
 * • Sênior: acima de 17 anos
 */
 
 function init() : int
 {
   $idade = trim(intval(readline("Idade jogador: ")));
   return $idade;
 }
 
 function categ(int $idade) : string
 {
   if ($idade < 13) {
     return "Idade mínima 13 anos!\n";
   }
   
   if ($idade == 13) {
     return "Categoria infantil!\n";
   } 
   
   if ($idade > 13 && $idade <= 17) {
     return "Categoria juvenil!\n";
   }
   
   if ($idade > 17) {
     return "Categoria sênior!\n";
   }
  
 }
 
 $idade = init();
 $categoria = categ($idade);
 
 printf("%s\n",$categoria);