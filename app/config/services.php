<?php

use app\library\cookie\Cookie;
use flight\database\PdoWrapper;

$dsn = 'mysql:host=' . $config['database']['host'] . ';dbname=' . $config['database']['dbname'] . ';charset=utf8mb4';

$pdoClass = PdoWrapper::class;
$app->register('db', $pdoClass, [ $dsn, $config['database']['user'] ?? null, $config['database']['password'] ?? null ]);

$app->register('cookie',Cookie::class);