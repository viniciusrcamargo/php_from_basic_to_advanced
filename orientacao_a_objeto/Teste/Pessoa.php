<?php

require_once 'Cpf.php';

class Pessoa
{
    private string $nome;
    private Cpf $cpf;
    private string $rua;

    public function __construct(string $nome, Cpf $cpf, string $rua)
    {
        $this->validaNomePessoa($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rua = $rua;
    }

    /**
     * @return string
     */
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function recuperaCpfPessoa(): string
    {
        return $this->cpf->recuperaNumero();
    }

    /**
     * @return string
     */
    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function validaNomePessoa(string $nome)
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter mais de 5 caracteres";
            exit();
        }
    }
}