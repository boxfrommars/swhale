<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */


$startTime = microtime(true);
$loader = require_once __DIR__ . '/../vendor/autoload.php';
$config = require_once __DIR__ . '/../src/config.php';

/** @var \Whale\WhaleApplication|\Doctrine\DBAL\Connection[]|\Doctrine\Common\Cache\Cache[]|\Whale\Page\PageService[]|\Symfony\Component\Form\FormFactory[]|Twig_Environment[] $app */
$app = new \Whale\WhaleApplication($config);

$app->register(new \Whale\Db\Entity\DbContentEntryServiceProvider(), array());
$app->register(new \Whale\Page\PageServiceProvider(), array());
$app->register(new \Whale\Dictionary\DictionaryServiceProvider(), array());

$app->mount('/admin/page', new \Whale\Page\PageControllerProvider($app['page.service']));
$app->mount('/admin/dict', new \Whale\Dictionary\DictionaryControllerProvider($app['dict.entry_service']));

$app['logtime']('before user routes');

if ($app['is_cache'] && $app['cache']->contains('pages')) {
    $pages = $app['cache']->fetch('pages');
    $app['logtime']('pages from cache');
} else {
    $pages = $app['page.service']->fetchAll();
    if ($app['is_cache']) $app['cache']->save('pages', $pages);
}

foreach ($pages as $page) {
    /** @var \Whale\Page\PageEntity $page */
    $app->get($page->getUrl(), function() use ($pages, $page, $app) {
        return $app['twig']->render('layout.twig', array(
            'content' => $page->getTitle(),
        ));
    });
}

$app['logtime']('before run');
$app->run();
$app['logtime']("last codeline\n");