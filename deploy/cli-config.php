<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */
use Doctrine\ORM\Tools\Console\ConsoleRunner;
$startTime = microtime(true);
$loader = require_once __DIR__ . '/../vendor/autoload.php';

$config = require_once __DIR__ . '/../src/config.php';
$app = new \Romanov\RomanovApplication($config);


// replace with mechanism to retrieve EntityManager in your app
$entityManager = $app['orm.em'];

return ConsoleRunner::createHelperSet($entityManager);