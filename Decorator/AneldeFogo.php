<?php

namespace Decorator;

/**
 * Class AnelDeFogo
 * @package Decorator
 *
 */
class AnelDeFogo extends PersonagemDecorator
{
    /**
     * AnelDeFogo constructor.
     * @param Personagem $personagem Classe base do personagem.
     */
    public function __construct(Personagem $personagem)
    {
        parent::__construct($personagem);
        $this->ataque = 3;
        $this->existeAnelDeFogo();

    }

    public function existeAnelDeFogo()
    {
     echo "Estou usando anel de fogo <br>";
    }
}