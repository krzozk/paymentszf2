<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Balancedpb;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

//require(__DIR__ . '/../../vendor/autoload.php');

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                    //'Stripe' => __DIR__ . '/../../vendor/stripe1/lib/',
                    'Stripe' => __DIR__ . '/../../vendor/stripe/stripe-php/lib/Stripe',
                    'Balanced' => __DIR__ . '/../../vendor/balanced/balanced/src/Balanced',
                ),
            ),
        );
    }

}
