<?php

namespace Iterator;

class Livro {
    private $autor;
    private $titulo;
    function __construct($titulo, $autor) {
      $this->autor = $autor;
      $this->titulo  = $titulo;
    }
    function getAutor() {return $this->autor;}
    function getTitulo() {return $this->titulo;}
    function getAutorETitulo() {
      return $this->getTitulo() . ' by ' . $this->getAutor();
    }
}