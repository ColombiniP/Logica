<?php

function palindromo($str) : bool
{
  $palind = str_split($str);
  $length = (count($palind));
  
  // iterar o array até sua metade do seu tamanho
  for ($i = 0; $i < $length / 2; $i++) {
        // comparo se a primeira metade é igual a segundaetade
        if ($palind[$i] != $palind[$length - 1 - $i]) {
        return false;
        }
  }
  return true;
}

echo palindromo("Paschoal") ? "É palindromo" : "Não é palindromo";