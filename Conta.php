<?php 

class Conta {

  public $cpf;
  public $titular;
  public $saldo = 0;

  public function sacar(float $valorASacar): void
  {
    if ($valorASacar > $this->saldo) {
      echo "Saldo indisponível";
      return;
    }     
    $this->saldo -= $valorASacar;    
  }

  public function depositar(float $valorADepositar): void
  {
    if ($valorADepositar < 0) {
      echo "Valor precisa ser positivo";
      return;
    }    
    $this->saldo += $valorADepositar;    
  }

  public function transferir(float $valor, Conta $conta):void
  {
    if ($this->saldo < $valor){
      echo" Saldo indisponível";
      return;
    }    
    $conta->saldo = $valor;
    $this->sacar($valor);    
  }
}

$c1 = new Conta();
$c = new Conta();
$c->depositar(100);
$c->transferir(70,$c1);

echo "Saldo c:" . $c->saldo . PHP_EOL;
echo "Saldo c_1:" . $c1->saldo . PHP_EOL;




