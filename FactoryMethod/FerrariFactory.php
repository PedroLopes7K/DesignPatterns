<?php

namespace FactoryMethod;

use FactoryMethod\Product\{
    CarroProduct, FerrariAmarela, FerrariVermelha
};

/**
 * Class FerrariFactory
 * @package FactoryMethod
 *
 */
class FerrariFactory implements CarroFactory
{
    /**
     * @param string $modeloCarro
     * @return CarroProduct
     * @throws \Exception
     */
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if ($modeloCarro == 'amarela') {
            return new FerrariAmarela();
        } elseif ($modeloCarro == 'vermelha') {
            return new FerrariVermelha();
        } else {
            throw new \Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema.");
        }
    }
}