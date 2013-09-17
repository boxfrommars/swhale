<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */


$startTime = microtime(true);
$loader = require_once __DIR__ . '/../vendor/autoload.php';
/** @var \Romanov\RomanovApplication|\Doctrine\Common\Cache\Cache[]|\Whale\Page\PageService[]|\Symfony\Component\Form\FormFactory[]|Twig_Environment[] $app */
$app = new \Romanov\RomanovApplication(array(
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
));
$app->register(new \Whale\Page\PageServiceProvider(), array());
$app->register(new \Whale\Dict\DictServiceProvider(), array());


$app->mount('/admin', new \Romanov\Admin\AdminControllerProvider());
$pages = $app['page.service']->fetchAll();
foreach ($pages as $page) {
    $app->get($page->getUrl(), function() use ($pages, $page, $app) {
        return $app['twig']->render('layout.twig', array(
            'content' => $page->getTitle(),
        ));
    });
}



$app['logtime']('before run');
$app->run();
$app['logtime']("last codeline\n");