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

 if ($resultado == 1){
    echo "Seu saldo da conta é $saldo_atual Reais";
 }
 
 else if ($resultado == 2){
     echo "Quanto você deseja sacar? ";
     $sacar = (float) fgets(STDIN);
     echo "Parabéns você sacou: $sacar\n";

     if($sacar > $saldo_atual){
        echo "Não é possivel fazer o saque";
     }
     else {
        echo "E seu saldo atual é: " . $saldo_atual - $sacar; 
    }
 }
 
 else if ($resultado == 3){
    echo "Digite o Valor que você deseja Depositar: ";
    $depositar = (float) fgets(STDIN);
    echo "Parabéns você depositou $depositar \n";
    echo "seu saldo agora é:" . $saldo_atual + $depositar;
 }
 else {
   echo "Você saiu do programa";
 }
