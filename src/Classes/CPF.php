<?php 

class CPF
{
    private $cpf;

    function __construct(string $cpf)
    {
       $this->validaCpf($cpf);
        $this->cpf = $cpf;    
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    private function validaCpf($cpf)
    {
        if (strlen($cpf) < 2){
            echo "Cpf precisa de dois ou mais digitos";
            die;
        }
    }
}