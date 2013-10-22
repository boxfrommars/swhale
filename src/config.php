<?php
return array(
    'starttime' => $startTime,
    'debug' => true,
    'tmp_path' => '../tmp',
    'is_cache' => false,
    'application_path' => realpath(__DIR__ . '/..'),
    'config' => array(
        'db' => array(
            'db.options' => array(
                'driver' => 'pdo_pgsql',
                'host' => 'localhost',
                'dbname' => 'romanov',
                'user' => 'romanov',
                'password' => 'romanov',
            ),
        ),
    ),
);