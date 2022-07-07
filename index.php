<?php 

require('./src/Classes/Conta.php');

$conta_1 = new Conta(225,'Leandro');
$conta = new Conta(225,'Leandro');
$conta->depositar(100);
$conta->sacar(50);

echo "Titular: {$conta->getTitular()}" . PHP_EOL;
echo "CPF: {$conta->getCpf()}" . PHP_EOL;
echo "Saldo: {$conta->getSaldo()}" . PHP_EOL;
echo "Num_Contas: " . $conta::countContas();