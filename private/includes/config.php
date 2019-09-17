<?php

$config = [
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'myBand',
    'DB_USER' => 'root',
    'DB_PASSWORD' => '',
    'BASE_URL' => '/MyBand-Starter/public',
    'ROOT' => dirname(dirname(__DIR__)),
    'PRIVATE' => dirname(dirname(__DIR__)) . '/private',
    'WEBROOT' => dirname(__DIR__) . '/public',
];

return $config;
