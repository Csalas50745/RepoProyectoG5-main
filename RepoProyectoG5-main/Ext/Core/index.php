<?php
require __DIR__ . '/Core/Autoload.php';

use Ext\Core\Kernel;

$routes = require __DIR__ . '/routes.php';
Kernel::run($routes);
