<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

namespace Romanov\Admin;

use Doctrine\DBAL\Query\QueryBuilder;
use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Silex\Route;
use Symfony\Component\HttpFoundation\Request;
use Whale\Page\PageEntity;
use Whale\Page\PageForm;

class AdminControllerProvider implements ControllerProviderInterface {
    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {
        /** @var \Whale\WhaleApplication|\Doctrine\Common\Cache\Cache[]|\Whale\Page\PageService[]|\Symfony\Component\Form\FormFactory[]|\Twig_Environment[]|\Symfony\Component\HttpFoundation\Session\Session[]|\Symfony\Component\HttpFoundation\Session\Flash\FlashBag[] $app */

        /** @var ControllerCollection|Route $controllers */
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function () use ($app) {
            return $app['twig']->render('admin/layout.twig', array(
                'content' => 'Hello!',
            ));
        });

        $processPage = function(Request $request, $id = null, $params = array()) use ($app) {
            $page = ($id === null) ? new PageEntity($params) : $app['page.service']->fetch($id);

            if ($page === false) $app->abort('404', "the entity (id={$id}) you are looking for could not be found");

            /** @var \Symfony\Component\Form\FormBuilder $formBuilder */
            $formBuilder = $app['form.factory']->createBuilder(new PageForm($app['page.service']), $page);
            $form = $formBuilder->getForm();
            $form->handleRequest($request);

            if ($form->isValid()) {
                $app['page.service']->save($page);
                $app['flashbag']->add('success', 'запись сохранена');
                return $app->redirect($app->url('admin_page_edit', array('id' => $page->getId())));
            }

            return $app['twig']->render('admin/layout.twig', array(
                'content' => $app['twig']->render('admin/page.twig', array(
                    'page' => $page,
                    'form' => $form->createView(),
                )),
            ));
        };

        $controllers->match('/page/edit/{id}', $processPage)->bind('admin_page_edit');
        $controllers->match('/page/create', $processPage)->bind('admin_page_create');
        $controllers->match('/page/create/idParent/{idParent}', function(Request $request, $idParent) use ($app, $processPage) {
            return $processPage($request, null, array('idParent' => $idParent));
        })->bind('admin_page_create_parented');

        $controllers->before(function (Request $request) use ($app) {
            /** @var \Twig_Environment $twig */
            $twig = $app['twig'];
            /** @var QueryBuilder $pagesQuery */
            $pagesQuery = $app['page.service']->getQuery();

            $pagesQuery->resetQueryPart('order');
            $pagesQuery->addOrderBy('p.path', 'ASC');

            $twig->addGlobal('_pages', $app['page.service']->fetchQuery($pagesQuery));
            $app->log('admin before');
        });

        return $controllers;
    }
}