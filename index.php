<?php

// index.php

require_once 'config/autoload.php';
require_once 'config/database.php';

$controller = new UserController();
$controller->index();
