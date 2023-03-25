<?php

namespace FactoryMethod\Product;

/**
 * Class TeslaY
 * @package FactoryMethod
 *
 */
class TeslaY implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Acelerando Tesla Y\n";
    }

    public function frear(): void
    {
        echo "Freando Tesla Y\n";
    }

    public function trocarMarcha(): void
    {
        echo "Trocando marcha do Tesla Y\n";
    }
}