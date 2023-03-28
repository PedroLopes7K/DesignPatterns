<?php

namespace Decorator;

/**
 * Class Arqueiro
 * @package Decorator
 *
 */
class Arqueiro extends Personagem
{
    /**
     * Arqueiro constructor.
     */
    public function __construct()
    {
        $this->nome = 'Arqueiro';
        $this->ataque = 9;
    }
}