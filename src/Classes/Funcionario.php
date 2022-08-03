<?php

class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function validaNomeTitular($nome)
    {
      if (strlen($nome) <= 3){
        echo "Nome precisa ter pelo menos 3 caracteres";        
        die;     
      }        
    }
}