<?php
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $this->view->app = $this->container->get('config')->app->name;
        $this->view->dbhost = $this->config->db->host;
    }
}
