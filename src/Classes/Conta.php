<?php 

class Conta {

  private $titular;
  private $saldo;
  private static $numContas = 0;

  public function __construct(Titular $titular)
  {
     $this->titular = $titular;
     $this->saldo = 0;
     self::$numContas++;
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
  
  public function getTitular():Titular
  {
    return $this->titular;
  }

  public function getSaldo(): float{
     return $this->saldo;
  }  

  public static function countContas()
  {
    return self::$numContas;
  }

}