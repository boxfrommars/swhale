<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

namespace Romanov;

use Doctrine\Common\Cache\FilesystemCache;
use Monolog\Logger;
use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\MonologServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\ValidatorServiceProvider;

class RomanovApplication extends Application {

    use Application\UrlGeneratorTrait;
    use Application\MonologTrait;

    public function __construct($values = array())
    {
        parent::__construct($values);

        $this['dgr.config'] = $values;
        $this->register(new MonologServiceProvider(), array(
            'monolog.logfile' => $this['tmp_path'] . '/dgr.log',
            'monolog.level' => $this['debug'] ? Logger::DEBUG : Logger::INFO,
        ));

        $this['cache'] = $this->share(function () {
            return new FilesystemCache($this['tmp_path'] . '/cache');
        });

        $this['logtime'] = $this->protect(
            function ($msg = null, $params = array()) {
                $this->log(
                    (int)((microtime(true) - $this['starttime']) * 1000) . 'ms ' . ($msg ? "[$msg]" : ''),
                    $params
                );
            }
        );
        $this->register(new SessionServiceProvider());
        $this->register(new UrlGeneratorServiceProvider());
        $this->register(new FormServiceProvider());
        $this->register(new TwigServiceProvider(), array(
            'twig.path' => $this['application_path'] . '/views',
            'twig.form.templates' => array('form_div_layout.html.twig', 'common/form_div_layout.html.twig'),
            'twig.options' => array(
                'cache' => $this['tmp_path'] . '/cache/twig',
                'debug' => $this['debug'],
            ),
        ));
        $this->register(new ValidatorServiceProvider());
        $this->register(new TranslationServiceProvider(), array( 'translator.messages' => array()));
        $this->register(new DoctrineServiceProvider(), $this['config']['db']);

        $this->before(
            function () {
                $this['logtime']('before controller');
            }
        );

        $this->after(
            function () {
                $this['logtime']('after controller');
            }
        );
    }

    /**
     * @param \Closure|object $callable
     * @return callable
     */
    public static function share($callable)
    {
        return parent::share($callable);
    }

    /**
     * @param \Closure|object $callable
     * @return callable
     */
    public static function protect($callable)
    {
        return parent::protect($callable);
    }
} 