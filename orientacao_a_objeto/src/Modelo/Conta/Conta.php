<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;

abstract class Conta
{
    //definir dados da conta
    private Titular $titular;
    private $saldo;
    private static $numeroDeContas = 0;
    private $tipo;



   public function __construct(Titular $titular)
   {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
       self::$numeroDeContas--;
    }

    public function saca(float $valorSacar): void{
        $tarifaSaque = $valorSacar * $this->percentualTarifa();
        $valorSaque = $valorSacar + $tarifaSaque;
        if($valorSaque > $this->saldo){
            echo "saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }


    public static function recuperaNumeroDeContas(){
       return self::$numeroDeContas;//chamar a classe, mesma coisa Conta::$numeroDeContas
    }

    abstract protected function percentualTarifa(): float;
}


