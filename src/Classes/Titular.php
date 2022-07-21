<?php
class Titular
{
    private $cpf;
    private $nome;
    private $endereco;

    public function __construct(string $cpf, string $nome, Endereco $endereco)
    {
        $this->validaNomeTitular($nome);
        $this->cpf = new CPF($cpf);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    private function validaNomeTitular($nome)
    {
      if (strlen($nome) <= 3){
        echo "Nome precisa ter pelo menos 3 caracteres";        
        die;     
      }        
    }

}