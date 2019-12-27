<?php


App::bind('config', require 'config.php');


App::bind('database', new QueryBuilder(

	Connection::make(App::get('config')['database'])

));


// $app = [];

// $app['config'] = require 'config.php';


//  

// $pdo = Connection::make();

// return new QueryBuilder($pdo);

// $app['database'] = new QueryBuilder(

// 	Connection::make($app['config']['database'])

// ); 