<?php

    define('BASE',dirname(__DIR__));
    require_once BASE . '/vendor/autoload.php';

    $mustache = new Mustache_Engine(
        array(
            'loader' => new Mustache_Loader_FilesystemLoader(BASE . '/src/tpl/views'),
            'partials_loader' => new Mustache_Loader_FilesystemLoader(BASE . '/src/tpl/partials'),
            'escape' => function($value) {
                return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
            },
            'strict_callables' => true,
        )
    );