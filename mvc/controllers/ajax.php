<?php class ajax extends controller
{
    public $taskmodel;
    public function ajax()
    {
        $this->taskmodel = $this->model('taskmodel');
    }
    public function check_task()
    {
        $content = $_POST["add_content"];
        echo $this->taskmodel->check_task($content);
    }
}