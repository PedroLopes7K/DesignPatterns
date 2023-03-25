<?php

require_once('../autoloader.php');

$compradores = [
    'Gabriel Anhaia',
    'Pedro Lopes',
    'Braian Peres Ottoni'
];

$livroJava = new \Prototype\LivroJavaPrototype();
$livroJava->setTitulo('Aprendendo Java 11');

$livros = [];

foreach ($compradores as $nomeComprador) {
    $livroComprador = clone $livroJava;
    $livroComprador->setNomeTitular($nomeComprador);
    
    var_dump($livroComprador);
    echo '<br>';
    echo '<br>';
    $livros[] = $livroComprador;
}

echo '<pre>';
print_r($livros);
