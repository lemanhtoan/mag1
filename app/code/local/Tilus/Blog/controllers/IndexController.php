<?php
class Tilus_Blog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo 'Index action';
        $this->loadLayout();
        $this->renderLayout();
        // url: http://127.0.0.1/mag1/index.php/blogs/index/index
    }

    public function newAction()
    {
        echo 'New action';

        // url: http://127.0.0.1/mag1/index.php/blogs/index/new
    }
}

?>