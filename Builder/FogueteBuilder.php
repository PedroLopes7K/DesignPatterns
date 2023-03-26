<?php

namespace Builder;

use Builder\FogueteProduct;

abstract class FogueteBuilder
{
    /** @var FogueteProduct $foguete */
    protected FogueteProduct $foguete;

    /**
     * FogueteBuilder constructor.
     */
    public function __construct()
    {
        $this->foguete = new FogueteProduct();
    }

    /**
     * @return FogueteProduct
     */
    public function getFoguete(): FogueteProduct
    {
        return $this->foguete;
    }

    /**
     * @return void
     */
    abstract public function buildTanqueCombustivel(): void;

    /**
     * @return void
     */
    abstract public function buildModelo(): void;

    /**
     * @return void
     */
    abstract public function buildMotores(): void;

    /**
     * @return void
     */
    abstract public function buildNumeroLugares(): void;
}
