<?php
	
require 'core/bootstrap.php';

require 'routes.php';
$router = new Router();
$router->define($routes);

require $router->direct(Request::uri());
