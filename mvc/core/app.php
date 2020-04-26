<?php
class app
{
    protected $controller;
    protected $action;
    protected $params;
    function __construct()
    {
        $arr = $this->urlprocess();
        var_dump($arr);
    }
    function urlprocess()
    {
        if (isset($_GET['url'])) {

            return explode('/', filter_var(trim($_GET['url'], '/')));
        }
    }
}