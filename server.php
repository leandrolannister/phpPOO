<?php

(function($nome = null){
  
    $nome = $nome ?? "forasteiro";

  $pessoa = new class($nome){
    protected $nome;

    public function __construct($nome){
       $this->nome = $nome;  
    }

    public function boasvindas()
    {
       echo "Olá ".$this->nome."<br>";
    }
  };
  $pessoa->boasvindas();
})('leandro');

