<?php

namespace Decorator;

/**
 * Classe base de nosso decorator.
 *
 * Class Personagem
 * @package Decorator
 */
abstract class Personagem
{
    /** @var float $ataque For�a de ataque. */
    protected float $ataque;

    /** @var string $nome Nome da classe do personagem. */
    protected string $nome;

    /**
     * Retorna o nome da classe do personagem.
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Retorna a for�a de ataque do personagem.
     *
     * @return float
     */
    public function getAtaque(): float
    {
        return $this->ataque;
    }
}