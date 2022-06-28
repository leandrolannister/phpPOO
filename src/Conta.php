<?php 

class Conta {

  private $cpf;
  private $titular;
  private $saldo = 0;

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

  public function getCpf():string
  {
    return $this->cpf;
  }

  public function setCpf($cpf):void
  {
    $this->cpf = $cpf;
  }

  public function getTitular():string
  {
    return $this->titular;
  }

  public function setTitular($titular):void
  {
    $this->titular = $titular;
  }

  public function getSaldo(): float{
     return $this->saldo;
  }
}