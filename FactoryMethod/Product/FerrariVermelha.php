<?php

namespace FactoryMethod\Product;

/**
 * Class FerrariVermelha
 * @package FactoryMethod
 *
 */
class FerrariVermelha implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Acelerando Ferrari Vermelha\n";
    }

    public function frear(): void
    {
        echo "Freando Ferrari Vermelha\n";
    }

    public function trocarMarcha(): void
    {
        echo "Trocando marcha do Ferrari Vermelha\n";
    }
}