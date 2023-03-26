<?php

require_once('../autoloader.php');

use Iterator\Livro;
use Iterator\ListaLivros;
use Iterator\LivrosIterator;


$primeiroLivro = new Livro('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
$segundoLivro = new Livro('PHP Bible', 'Converse and Park');
$terceiroLivro = new Livro('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

$livros = new ListaLivros();
$livros->adicionarLivro($primeiroLivro);
$livros->adicionarLivro($segundoLivro);
$livros->adicionarLivro($terceiroLivro);


$livrosIterator = new LivrosIterator($livros);

while ($livrosIterator->existeProximoLivro()) {
    $livro = $livrosIterator->proximoLivro();
    echo 'Pegando o proximo livro : ';
    echo $livro->getAutorETitulo();
    echo '<br>';
    echo '<br>';
}

$livro = $livrosIterator->pegarLivroAtual();
echo '<br>';
echo 'Pegando o livro atual ';
echo '<br>';

echo $livro->getAutorETitulo();

echo '<br>';
echo '<br>';

print_r($livros->retornaLivros());
