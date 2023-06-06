<?php



// require 'tools.php';
require 'Grocery.php';

$groceries = $app['database']->selectAll('groceries'); // Leest inhoud sql db

$products = array();
foreach ($groceries as $grocery){
    $product = 
        [
        "name" => $grocery['name'], 
        "productPrice" => $grocery['price'],
        "productQuantity" => $grocery['number'],
        "productTotalCost" => ($grocery['price'] * $grocery ['number'])
        ];

        array_push($products, $product);
    
    };


$totalCost=0;



require 'views/index.view.php';