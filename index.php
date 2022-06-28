<?php 

require('./src/Conta.php');

$conta = new Conta();
$conta->setCpf('225');
$conta->setTitular('Soares');
$conta->depositar(100);
$conta->sacar(50);

echo "Titular: {$conta->getTitular()}" . PHP_EOL;
echo "CPF: {$conta->getCpf()}" . PHP_EOL;
echo "Saldo: {$conta->getSaldo()}";