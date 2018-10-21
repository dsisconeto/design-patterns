<?php

namespace DSisconeto\DesignPatterns\FactoryMethod;


interface CarroInterface
{

    public function acelerar(): void;

    public function frear(): void;

    public function trocarMacha(): void;

}