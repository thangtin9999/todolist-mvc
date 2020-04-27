<?php
class app
{
    protected $controller = "home";
    protected $action = '';
    protected $params = [];
    function __construct()
    {
        $arr = $this->urlprocess();
        // Xử lý Controller
        if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/" . $this->controller . ".php";
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