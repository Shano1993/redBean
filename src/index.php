<?php

require '../vendor/autoload.php';

use RedBeanPHP\R;
use RedBeanPHP\RedException\SQL;

R::setup('mysql:host=localhost;dbname=redbean-test', 'root', '');

list($product, $client) = R::dispenseAll('product,client');

$product->name = "Guitare électrique";
$product->price = 500;
$product->inStock = 42;

$client->name = "Toto";
$client->username = "Toto93";
$client->age = 54;

try {
    R::storeAll([$product, $client]);
}

catch (SQL $e) {
    echo "Echec lors de l'ajout du produit en base de données";
}