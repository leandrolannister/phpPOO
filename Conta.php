<?php 

class Conta{
    public $cpf;
    public $titular;
    public $saldo;

  public function sacar(float $valorASacar)
  {
    if ($valorASacar > $this->saldo) {
      echo "Saldo indisponível";
    } else {
        $this->saldo -= $valorASacar;
    }
  }
}

$c = new Conta();
$c->saldo = 200;
$c->sacar(300);
echo $c->saldo;

