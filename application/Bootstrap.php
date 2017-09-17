<?php
class Bootstrap extends Yaf_Bootstrap_Abstract {
    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config', $config);
    }
    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        $objSamplePlugin = new SamplePlugin();
        $dispatcher->registerPlugin($objSamplePlugin);
    }
    public function _initRoute(Yaf_Dispatcher $dispatcher) {
        //这里注册自己的路由协议，默认使用简单路由
        $router = $dispatcher->getRouter();
        $router->addConfig(Yaf_Registry::get('config')->routes);
    }

    public function _initView(Yaf_Dispatcher $dispatcher) {
        // 这里注册自己的view控制器，比如smarty, firekylin
    }
}