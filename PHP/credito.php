<?php
/**
 * Um banco concederá um crédito especial aos seus clientes de acordo com o saldo médio do último ano. Faça um programa que solicite o saldo médio do cliente, calcule o valor do crédito e exiba uma mensagem com o saldo médio e o valor do crédito. Utilize a tabela a seguir como referência.
 * |Saldo médio | Percentual do saldo médio |
 * |-|-|
 * |De 0 a 100| 0%| 
 * |De 101 a 200| 10%| 
 * |De 201 a 300| 20%| 
 * |Acima de 301| 30%|
*/
 
function getSaldo() : int 
{
  $saldoMedio = (int) trim(readline("Saldo da conta: "));
  return $saldoMedio;
}

function getCredito(int $saldoMedio) : int 
{
  if ($saldoMedio <= 100) {
    echo "Crédito não concedido!\n";
  } elseif ($saldoMedio <= 200) {
    $credito = $saldoMedio * (10 / 100);
    printf("Crédito concedido R$%.2f\n", $credito);
  } elseif ($saldoMedio <= 300) {
    $credito = $saldoMedio * (20 / 100);
    printf("Crédito concedido R$%.2f\n", $credito);
  } else {
    $credito = $saldoMedio * (30 / 100);
    printf("Crédito concedido R$%.2f\n", $credito);
  }
  return $saldoMedio;
}

$saldo = getSaldo();
$credito = getCredito($saldo);