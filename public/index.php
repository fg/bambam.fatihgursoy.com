<?php

use SlimController\Slim;

define('APP_BASE_PATH', realpath(__DIR__ . '/..'));

require APP_BASE_PATH . '/vendor/autoload.php';

$config = require APP_BASE_PATH . '/config/config.php';

$app = new Slim(
    [
        'templates.path' => APP_BASE_PATH . '/themes/' . $config['theme']['path'],
        'view' => new Bambam\Base\View(isset($config['theme.path']) ? APP_BASE_PATH . '/themes/' . $config['theme']['path'] : null),
        'mode' => isset($config['mode']) ? $config['mode'] : 'development'
    ]
);

$bambam = new Bambam\Bambam($app, $config);
$bambam->run();


