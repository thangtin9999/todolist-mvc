<?php
class app
{
    protected $controller = "task";
    protected $action = 'read';
    protected $params = [];
    function app()
    {
        $arr = $this->urlprocess();
        // Xử lý Controller
        if (!empty($arr[0])) {
            if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
                $this->controller = $arr[0];
                unset($arr[0]);
            }
        }
        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;
        // Xử lý Action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
                unset($arr[1]);
            }
        }
        // Xử lý Params
        $this->params = $arr ? array_values($arr) : [];
        call_user_func_array([$this->controller, $this->action], $this->params);
    }
    function urlprocess()
    {
        if (isset($_GET['url'])) {

            return explode('/', filter_var(trim($_GET['url'], '/')));
        }
    }
}