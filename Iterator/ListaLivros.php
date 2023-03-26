<?php

namespace Iterator;

class ListaLivros
{
    private $livros = array();
    private $quantidadeLivros = 0;
    public function __construct()
    {
    }
    public function retornaLivros(){
        return $this->livros;
    }
    public function getQuantidadeLivros()
    {
        return $this->quantidadeLivros;
    }
    private function setQuantidadeLivros($quantidade)
    {
        $this->quantidadeLivros = $quantidade;
    }
    public function pegarLivro($numeroLivro)
    {
        if ((is_numeric($numeroLivro)) &&
            ($numeroLivro <= $this->getQuantidadeLivros())
        ) {
            return $this->livros[$numeroLivro];
        } else {
            return NULL;
        }
    }
    public function adicionarLivro(Livro $livro)
    {
        $this->setQuantidadeLivros($this->getQuantidadeLivros() + 1);
        
        $this->livros[$this->getQuantidadeLivros()] = $livro;
        return $this->getQuantidadeLivros();
    }
    public function removerLivro(Livro $livro)
    {
        $contador = 0;
        while (++$contador <= $this->getQuantidadeLivros()) {
            if (
                $livro->getAutorETitulo() ==
                $this->livros[$contador]->getAutorETitulo()
            ) {
                for ($x = $contador; $x < $this->getQuantidadeLivros(); $x++) {
                    $this->livros[$x] = $this->livros[$x + 1];
                }
                $this->setQuantidadeLivros($this->getQuantidadeLivros() - 1);
            }
        }
        return $this->getQuantidadeLivros();
    }
}
