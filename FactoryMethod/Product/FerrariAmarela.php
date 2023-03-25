<?php

namespace FactoryMethod\Product;

/**
 * Class FerrariAmarela
 * @package FactoryMethod
 *
 */
class FerrariAmarela implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Acelerando Ferrari Amarela\n";
    }

    public function frear(): void
    {
        echo "Freando Ferrari Amarela\n";
    }

    public function trocarMarcha(): void
    {
        echo "Trocando marcha do Ferrari Amarela\n";
    }
}