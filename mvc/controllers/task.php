<?php
class task extends controller
{
    public $task;
    function task()
    {
        $this->task = $this->model("taskmodel");
    }
    function sayhi()
    {
        $teo = $this->model("taskmodel");
        echo $teo->gettask();
    }
    function create()
    {
        //Get Data
        if (isset($_POST['btn_addtask'])) {
            $content = $_POST['add_content'];
        }
        // Insert Data
        if (!empty($content)) {
            $this->task->add_task($content);
        }
        // View
        header("Location:../");
    }
    function read()
    {
        //Model
        //view
        $this->view("masterlayout", [
            "page" => "task",
            "tasks" => $this->task->show_task()
        ]);
    }
    function update()
    {
        echo "update task";
    }
    function delete()
    {
        echo "delete task";
    }
}