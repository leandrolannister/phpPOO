<?php
class Titular extends Pessoa
{
    private $endereco;

    public function __construct(string $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = new CPF($cpf);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }
    
    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

}