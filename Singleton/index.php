<?php

require_once('../autoloader.php');

use Singleton\LogsSingleton;

$logsSingleton = LogsSingleton::obterInstancia();

$logsSingleton->gravarLog(['test33']);

$logsSingletonTeste = LogsSingleton::obterInstancia();

if ($logsSingletonTeste === $logsSingleton) {
    var_dump($logsSingleton);
    echo '<br>';
    echo '<br>';
    var_dump($logsSingletonTeste);
    echo '<br>';

    echo 'As instâncias são exatamente as mesmas!';
}

echo '<br>';
echo 'Rodou tudo';
