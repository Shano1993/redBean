<?php

require '../vendor/autoload.php';

use RedBeanPHP\R;
use RedBeanPHP\RedException\SQL;

R::setup('mysql:host=localhost;dbname=redbean-test', 'root', '');

$product = R::dispense('product');
$product->name = "Guitare électrique";
$product->price = 500;
$product->inStock = 42;

try {
    $insertId = R::store($product);
}

catch (SQL $e) {

}