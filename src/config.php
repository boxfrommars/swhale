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
        'orm' => array(
            "orm.proxies_dir" => "/path/to/proxies",
            "orm.em.options" => array(
                "mappings" => array(
                    array(
                        "type" => "annotation",
                        "namespace" => 'Whale\Entity',
                        "path" => realpath(__DIR__ . '/..') . '/src/Whale/Entity',
                    ),
                ),
            ),
        ),
    ),
);