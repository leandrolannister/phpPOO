<?php 

require('./src/Classes/Conta.php');
require('./src/Classes/Titular.php');

$titular = new Titular('225', 'Soares');
$conta = new Conta($titular);
$conta->depositar(100);
$conta->sacar(20);

echo "Titular: {$conta->getTitular()->getNome()}" . PHP_EOL;
echo "CPF: {$conta->getTitular()->getCpf()}" . PHP_EOL;
echo "Saldo: {$conta->getSaldo()}" . PHP_EOL;
echo "Num_Contas: " . $conta::countContas();

