<?php

namespace Prototype;

/**
 * Class LivroJavaPrototype
 *
 * @package Prototype
 */
class LivroJavaPrototype extends LivroPrototype
{
    /**
     * LivroPhpPrototype constructor.
     */
    public function __construct()
    {
        $this->setAssunto('Java');
    }

    /**
     * @return self
     */
    public function __clone()
    {
        echo "Livro Java Clonado\n";
    }
}