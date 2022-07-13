<?php
class Titular
{
    private $cpf;
    private $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->validaNomeTitular($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular($nome)
    {
      if (strlen($nome) <= 3){
        echo "Nome precisa ter pelo menos 3 caracteres";        
        die;     
      }        
    }

}