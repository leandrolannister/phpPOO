<?php 

require('./src/Classes/Conta.php');
require('./src/Classes/Titular.php');
require('./src/Classes/CPF.php');
require('./src/Classes/Endereco.php');


$endreco = new Endereco('SP','Penha','Munici','220');

$titular = new Titular('225','Soares',$endreco);
$conta = new Conta($titular);
$conta->depositar(100);
$conta->sacar(20);

echo "Titular: {$conta->getTitular()->getNome()}" . PHP_EOL;
echo "CPF: {$conta->getTitular()->getCpf()}" . PHP_EOL;
echo "Saldo: {$conta->getSaldo()}" . PHP_EOL;
echo "Num_Contas: " . $conta::countContas() . PHP_EOL;
echo "Cidade: " . $titular->getEndereco()->getCidade();

