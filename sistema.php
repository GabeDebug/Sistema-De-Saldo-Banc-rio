<?php

$saldo_atual = 1000;


print_r("******************\n");
print_r("Titular: Gabriel Almeida\n");
print_r("Saldo atual: R$: $saldo_atual\n");
print_r("******************\n");

print_r("1. Consultar o valor\n");
print_r("2. Sacar Valor\n");
print_r("3. Depositar valor\n");
print_r("4.  Sair\n");

$resultado = (float) fgets(STDIN);



 if($resultado = 1){
     global $saldo_atual;
     print_r("Seu saldo da conta é $saldo_atual Reais");
 } if($resultado = 2){
     print_r ("Quanto você deseja sacar? ");
     $sacar = (float) fgets(STDIN);
     print_r("Parabéns você sacou: $sacar\n");
     print_r("E seu saldo atual é: " . $saldo_atual - $sacar);
 };
