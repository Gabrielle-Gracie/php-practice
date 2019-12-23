<?php

$config = require 'config.php';


require 'core/Router.php'; 

require 'core/Request.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';

// $pdo = Connection::make();

// return new QueryBuilder($pdo);

return new QueryBuilder(

	Connection::make($config['database'])

); 