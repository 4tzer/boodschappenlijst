<?php 
// require 'tools.php';

$app = [];


$app['config'] = require'config.php';
//xdump($config);

require 'core/Router.php';

require 'database/Connection.php';

require 'database/Querybuilder.php';

$app['database'] =  new Querybuilder(Connection::Make($app['config']['database']));

