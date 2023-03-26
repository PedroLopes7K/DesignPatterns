<?php

namespace Iterator;

class LivrosIterator
{
    protected $listaLivros;
    protected $livroAtual = 0;

    public function __construct(ListaLivros $listaLivros)
    {
        $this->listaLivros = $listaLivros;
    }
    public function pegarLivroAtual()
    {
        if (($this->livroAtual > 0) &&
            ($this->listaLivros->getQuantidadeLivros() >= $this->livroAtual)
        ) {
            return $this->listaLivros->pegarLivro($this->livroAtual);
        }
    }
    public function proximoLivro()
    {
        if ($this->existeProximoLivro()) {
            return $this->listaLivros->pegarLivro(++$this->livroAtual);
        } else {
            return NULL;
        }
    }
    public function existeProximoLivro()
    {
        if ($this->listaLivros->getQuantidadeLivros() > $this->livroAtual) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
