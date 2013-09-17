<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

namespace Romanov\Admin;

use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
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
        /** @var \Romanov\RomanovApplication|\Doctrine\Common\Cache\Cache[]|\Whale\Page\PageService[]|\Symfony\Component\Form\FormFactory[]|\Twig_Environment[]|Session[] $app */

        /** @var ControllerCollection $controllers */
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function () use ($app) {
            return $app['twig']->render('admin/layout.twig', array(
                'content' => 'Hello!',
            ));
        });

        $controllers->match('/page/edit/{id}', function (Request $request, $id) use ($app) {
            $page = $app['page.service']->fetch($id);

            if (!$page) return $app->redirect($app->url('admin_page_create'));

            /** @var \Symfony\Component\Form\FormBuilder $formBuilder */
            $formBuilder = $app['form.factory']->createBuilder(new PageForm($app['page.service']), $page);
            $form = $formBuilder->getForm();
            $form->handleRequest($request);

            /** @var FlashBag $flashBag */
            $flashBag = $app['session']->getFlashBag();

            if ($form->isValid()) {
                $app['page.service']->save($page);
                $flashBag->add('success', 'запись изменена');
                return $app->redirect($app->url('admin_page_edit', array('id' => $id)));
            }

            return $app['twig']->render('admin/layout.twig', array(
                'page' => $page,
                'form' => $form->createView(),
                'flash' => $flashBag->all(),
            ));
        })->bind('admin_page_edit');

        $controllers->match('/page/create', function (Request $request) use ($app) {
            $page = new PageEntity();
            /** @var \Symfony\Component\Form\FormBuilder $formBuilder */
            $formBuilder = $app['form.factory']->createBuilder(new PageForm($app['page.service']), $page);
            $form = $formBuilder->getForm();
            $form->handleRequest($request);

//            $parentsBuilder = $app['page.service']->getPageQuery();

            /** @var FlashBag $flashBag */
            $flashBag = $app['session']->getFlashBag();

            if ($form->isValid()) {
                $app['page.service']->save($page);
                $flashBag->add('success', 'запись добавлена');
                return $app->redirect($app->url('admin_page_edit', array('id' => $page->getId())));
            }

            return $app['twig']->render('admin/layout.twig', array(
                'page' => $page,
                'form' => $form->createView(),
                'flash' => $flashBag->all(),
            ));
        })->bind('admin_page_create');

        return $controllers;
    }
}