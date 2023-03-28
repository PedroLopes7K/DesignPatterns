<?php

namespace Decorator;

/**
 * Class Cavaleiro
 * @package Decorator
 *
 */
class Cavaleiro extends Personagem
{
    /**
     * Cavaleiro constructor.
     */
    public function __construct()
    {
        $this->nome = 'Cavaleiro';
        $this->ataque = 13;
    }
}