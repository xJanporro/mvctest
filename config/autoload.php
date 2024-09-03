<?php

// config/autoload.php

spl_autoload_register(function ($class) {
    $class = strtolower($class);
    $path = __DIR__ . '/../app/' . $class . '.php';
    if (file_exists($path)) {
        require_once $path;
    }

    echo $path;
});
