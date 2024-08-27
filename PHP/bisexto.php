<?php

function anoBi(int $ano) : bool 
{
  if ($ano % 4 === 0 && $ano % 100 !== 0 || $ano % 400 === 0) {
    return true;
  } else {
    return false;
  }
}

$ano =(int) anoBi(readline("Ano: "));
echo $ano == true ? "Ano bisexto\n" : "Ano normal\n";