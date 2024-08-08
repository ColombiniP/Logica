<?php 

$valor = trim(floatval(readline("Qual o valor do produto: ")));

function iniciando() : int
{
    do {
      echo "\nEscolha o método de pagamento: \n\n";

      $metodo = trim(intval(readline("1 = A vista\n2 = Cheque 30 dias\n3 = Catão parcelado 3x\n4 = Catão parcelado 6x\n5 = Catão parcelado 12x\n: ")));
    } while ($metodo < 1 || $metodo > 5);
    return $metodo;
}

function desconto(int $v, int $metodo) : void
{
  switch ($metodo) {
    case 1:
      // A vista 15% desconto
      printf("\nPreço: R$%.2f\n",$v);
      $descontoMetodo = $v * (15 / 100);
      printf("Desconto: R$%.2f\n",$descontoMetodo);
      $valorTotal = $v * 0.85;
      printf("Total com desconto: R$%.2f\n", $valorTotal);
      break;
    case 2:
      // Cheque 10%
      printf("\nPreço: R$%.2f\n",$v);
      $descontoMetodo = $v * (10 / 100);
      printf("Desconto: R$%.2f\n",$descontoMetodo);
      $valorTotal = $v * 0.90;
      printf("Total com desconto: R$%.2f\n", $valorTotal);
      break;
    case 3:
      // parcelado 3x 5%
      printf("\nPreço: R$%.2f\n",$v);
      $descontoMetodo = $v * (5 / 100);
      printf("Desconto: R$%.2f\n",$descontoMetodo);
      $valorTotal = $v * 0.95;
      printf("Total com desconto: R$%.2f\n", $valorTotal);
      $parcelas = $valorTotal / 3;
      printf("O valor das parcelas: 3x R$%.2f\n",$parcelas);
      break;
    case 4:
      // parcelado 6x 0%
      printf("\nPreço: R$%.2f\n",$v);
      $descontoMetodo = $v;
      printf("Desconto: R$%.2f\n",$descontoMetodo);
      $valorTotal = $v;
      printf("Total com desconto: R$%.2f\n", $valorTotal);
      $parcelas = $valorTotal / 6;
      printf("O valor das parcelas: 6x R$%.2f\n",$parcelas);
      break;
    case 5:
      // parcelado 12x acréscimo de 8%
      printf("\nPreço: R$%.2f\n",$v);
      $acrescimo = $v * (8 / 100);
      printf("Acréscimo: R$%.2f\n",$acrescimo);
      $valorTotal = $v * 1.08;
      printf("Total com acréscimo: R$%.2f\n", $valorTotal);
      $parcelas = $valorTotal / 12;
      printf("O valor das parcelas: 12x R$%.2f\n",$parcelas);
      break;
  }
}

$metodo = iniciando();
$desconto = desconto($valor,$metodo);