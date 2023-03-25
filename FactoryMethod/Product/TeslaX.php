<?php

namespace FactoryMethod\Product;

/**
 * Class TeslaX
 * @package FactoryMethod
 *
 */
class TeslaX implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Acelerando Tesla X\n";
    }

    public function frear(): void
    {
        echo "Freando Tesla X\n";
    }

    public function trocarMarcha(): void
    {
        echo "Trocando marcha do Tesla X\n";
    }
}