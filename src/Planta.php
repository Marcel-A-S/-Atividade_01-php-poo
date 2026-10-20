<?php

class planta
{

    //  as propriedades.
    private string $nome;
    private string $especie;
    private int $aguaPorDia;

    // os parâmetros.
    public function __construct(string $nome, string $especie, int $aguaPorDia)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->aguaPorDia = $aguaPorDia;
    }

    public function getNome()
    {
        return $this->nome;
    }


    public function getEspecie(): string
    {
        return $this->especie;
    }

    public function getAguaPorDia(): string

    {
        return $this->aguaPorDia;
    }

     public function getcalcularguaSemanal(): string

    {
        return $this->aguaPorDia * 7;
    }
}



