<?php

namespace DSisconeto\DesignPatterns\FactoryMethod;


interface CarroFactoryInterface
{
    const MODELO_DODGE_DART = 1;
    const MODELO_DODGE_CHARGER = 2;
    const MODELO_TESLAN_MODELO_X = 3;
    const MODELO_TESLAN_MODELO_S = 4;

    public function criarCarro(int $modelo): CarroInterface;
}