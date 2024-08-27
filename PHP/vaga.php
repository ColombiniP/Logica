<?php

/**
 * Para preencher uma vaga em uma empresa, o candidato do sexo masculino deverá ser brasileiro, ter 18 anos ou mais e estar em dia com o serviço militar. Faça um programa que solicite os dados desse candidato, faça a expressão lógica que verifique as três condições e determine se ele está apto ou não para assumir a vaga.
 */
 
$sexo = strtolower(trim(readline("Sexo Masculino - Feminino: ")));
$nacionalidade = strtolower(trim(readline("nacionalidade: ")));
$idade =(int) trim(readline("Idade: "));
$certificadoMilitar = strtolower(trim(readline("Certificado militar Sim - Nao: ")));

$certificadoMilitar === "sim" ? true : false;

function vaga(string $sexo, string $nacionalidade, int $idade, bool $certificadoMilitar) : string 
{
  if ($sexo === "masculino" and $nacionalidade === "brasileiro" and $idade >= 18 and $certificadoMilitar == true) {
    return "Apto!\n";
  } else {
    return "Não apto!\n";
  }
}

echo vaga($sexo,$nacionalidade,$idade,$certificadoMilitar);