<?php

namespace Decorator;

/**
 * Class Mago
 * @package Decorator
 *
 */
class Mago extends Personagem
{
    /**
     * Mago constructor.
     */
    public function __construct()
    {
        $this->nome = 'Mago';
        $this->ataque = 10;
    }
}