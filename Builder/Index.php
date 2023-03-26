<?php

require_once('../autoloader.php');

use Builder\FabricaFoguetesDirector;
use Builder\FogueteModeloYBuilder;
use Builder\FogueteModeloXBuilder;

$montadoraDeFoguetesTestX = new FabricaFoguetesDirector(new FogueteModeloXBuilder());
$montadoraDeFoguetesTestY = new FabricaFoguetesDirector(new FogueteModeloYBuilder());

$montadoraDeFoguetesTestX->construirFoguete();
echo $montadoraDeFoguetesTestX->getFoguete();
echo '<br>';
echo '<br>';
$montadoraDeFoguetesTestY->construirFoguete();
echo $montadoraDeFoguetesTestY->getFoguete();