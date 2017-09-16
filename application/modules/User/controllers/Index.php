<?php
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {
        $this->getView()->assign('content', 'Hello world, This is user index page!');
    }
}