<?php

require_once('../autoloader.php');

$teslaFactory = new \FactoryMethod\TeslaFactory();

$ferrariFactory = new \FactoryMethod\FerrariFactory();

try {
    $teslaModeloY = $teslaFactory->criarCarro('modelo_y');
    $teslaModeloX = $teslaFactory->criarCarro('modelo_x');

    $ferrariVermelha = $ferrariFactory->criarCarro('vermelha');
    $ferrariAmarela = $ferrariFactory->criarCarro('amarela');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $teslaModeloY->acelerar();
echo "<br>";

echo $teslaModeloY->frear();
echo "<br>";

echo $teslaModeloY->trocarMarcha();
echo "<br>";
echo "<br>";
echo "<br>";

echo $ferrariVermelha->acelerar();
echo "<br>";

echo $ferrariVermelha->frear();
echo "<br>";

echo $ferrariVermelha->trocarMarcha();
echo "<br>";
echo "<br>";
echo "<br>";

echo $teslaModeloX->acelerar();
echo "<br>";

echo $teslaModeloX->frear();
echo "<br>";

echo $teslaModeloX->trocarMarcha();
echo "<br>";
echo "<br>";
echo "<br>";

echo $ferrariAmarela->acelerar();
echo "<br>";

echo $ferrariAmarela->frear();
echo "<br>";

echo $ferrariAmarela->trocarMarcha();