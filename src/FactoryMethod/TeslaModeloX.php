<?php

namespace DSisconeto\DesignPatterns\FactoryMethod;


class TeslaModeloX implements CarroInterface
{
    public function acelerar(): void
    {
        try {
            $reflection = new \ReflectionClass($this);
            echo "Acelerar " . $reflection->getShortName();
        } catch (\ReflectionException $e) {
        }
    }

    public function frear(): void
    {
        try {
            $reflection = new \ReflectionClass($this);
            echo "Frear " . $reflection->getShortName();
        } catch (\ReflectionException $e) {
        }
    }

    public function trocarMacha(): void
    {
        try {
            $reflection = new \ReflectionClass($this);
            echo "trocarMacha " . $reflection->getShortName();
        } catch (\ReflectionException $e) {
        }
    }
}