<?php

require_once "vendor/autoload.php";

use Lanza\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipcode('13501613');

print_r($resultado);
