<?php

namespace Decorator;

/**
 * Class EspadaMagica
 * @package Decorator
 *
 */
class EspadaMagica extends PersonagemDecorator
{
    /**
     * EspadaMagica constructor.
     * @param Personagem $personagem Classe base do personagem.
     */
    public function __construct(Personagem $personagem)
    {
        parent::__construct($personagem);
        $this->ataque = 5;
    }
}