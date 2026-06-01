<?php

namespace MODEL;

class AreaPlantio
{
    private ?int $id;
    private ?string $produtor;
    private ?int $insumo;
    private ?float $quantidade;
    private ?float $valor;

    public function __construct() {}

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getProdutor()
    {
        return $this->produtor;
    }

    public function setProdutor(int $produtor)
    {
        $this->produtor = $produtor;
    }

    public function getInsumo()
    {
        return $this->insumo;
    }

    public function setInsumo(int $insumo)
    {
        $this->insumo = $insumo;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade(float $quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }
}
