<?php



$router->get('groceries','controllers/index.php');
$router->get('groceries/create','controllers/create.php');
$router->get('','links.php');
$router->post('name', 'controllers/add-name.php');
    



 