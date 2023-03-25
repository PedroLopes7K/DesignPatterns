<?php

namespace FactoryMethod\Product;

/**
 * Interface CarroProduct
 * @package FactoryMethod
 *
 */
interface CarroProduct
{
    public function acelerar(): void;

    public function frear(): void;

    public function trocarMarcha(): void;
}