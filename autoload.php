<?php

spl_autoload_register(
    function ($classname) {
        $classname = end(explode('\\', $classname));
        $filepath = __DIR__ . '/classes/' . $classname . '.php';
        if (is_readable($filepath)) {
            require $filepath;
        }
    }
);
