<?php 

class Conta {

  private $cpf;
  private $titular;
  private $saldo;

  public function __construct(string $cpf, string $titular)
  {
     $this->validaNomeTitular($titular);
     $this->cpf = $cpf;
     $this->titular = $titular;
     $this->saldo = 0;
  }

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

  public function getTitular():string
  {
    return $this->titular;
  }

  public function getSaldo(): float{
     return $this->saldo;
  }

  private function validaNomeTitular($nome)
  {
      if (strlen($nome) <= 3){
        echo "Nome precisa ter pelo menos 3 caracteres";
        die;
      }      
  }
}