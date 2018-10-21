<?php

namespace DSisconeto\DesignPatterns\FactoryMethod;


class CarroFactory implements CarroFactoryInterface
{

    public function criarCarro(int $modelo): CarroInterface
    {
        switch ($modelo) {
            case self::MODELO_DODGE_DART:
                return new DodgeDart();
            case self::MODELO_DODGE_CHARGER:
                return new DodgeChanger();
            case self::MODELO_TESLAN_MODELO_S:
                return new TeslaModeloS();
            case self::MODELO_TESLAN_MODELO_X:
                return new TeslaModeloX();

            default:
                throw new \InvalidArgumentException('Modelo desconhecido');
        }

    }
}