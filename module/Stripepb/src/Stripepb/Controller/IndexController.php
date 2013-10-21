<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Stripepb\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View;
use Stripe;
use Stripe_Charge;

//require_once 'vendor/ZendFramework/library/Zend/Loader/StandardAutoloader.php';
/*
$loader = new Zend\Loader\StandardAutoloader();
$loader->registerNamespace('Garvey', realpath('vendor/stripe1/lib/Stripe'));
$loader->register();*/

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        Stripe::setApiKey('sk_test_qBHocDAhVJ0FQDIieaT7D6w5');
        $myCard = array('number' => '4242424242424242', 'exp_month' => 5, 'exp_year' => 2015);
        $charge = Stripe_Charge::create(array('card' => $myCard, 'amount' => 1000, 'currency' => 'usd'));
        echo $charge;

        die('bu');

        return new ViewModel();
    }
    public function formAction()
    {
        return new ViewModel();
    }

    public function testAction()
    {
        return new ViewModel();
    }
}
