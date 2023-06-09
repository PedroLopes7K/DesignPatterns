<?php

namespace FactoryMethod;

use FactoryMethod\Product\CarroProduct;

/**
 * Class CarroFactory
 * @package FactoryMethod
 *
 */
interface CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct;
}