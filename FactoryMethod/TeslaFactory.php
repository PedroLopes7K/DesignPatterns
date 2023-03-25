<?php

namespace FactoryMethod;

use FactoryMethod\Product\{
    CarroProduct, TeslaY, TeslaX
};

/**
 * Class TeslaFactory
 * @package FactoryMethod
 *
 */
class TeslaFactory implements CarroFactory
{
    /**
     * @param string $modeloCarro
     * @return CarroProduct
     * @throws \Exception
     */
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if ($modeloCarro == 'modelo_x') {
            return new TeslaX();
        } elseif ($modeloCarro == 'modelo_y') {
            return new TeslaY();
        } else {
            throw new \Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema.");
        }
    }
}