<?php

/**
 * @name IndexController
 * @author placeless
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
use App\Model\User;
class IndexController extends Yaf\Controller_Abstract
{

    /**
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/Sample/index/index/index/name/placeless 的时候, 你就会发现不同
     */
    public function indexAction($name = "Stranger")
    {
//        dd(User::all());
        $this->getView()->assign("name", $name);
        $this->getView()->display('index/index',['content'=>'Hello World!']);
        return false;
    }

    public function showAction()
    {
        echo $this->getRequest()->getRequestUri();



        return false;

    }
}
