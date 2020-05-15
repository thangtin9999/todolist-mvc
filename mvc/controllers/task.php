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
    function modal_edit()
    {
        $id = $_POST['id'];
        $content = $this->task->get_content($id);
        echo $content;
    }
    function update()
    {
        $id = $_POST['id'];
        $content = $_POST['content'];
        $this->task->update($id, $content);
        echo "Success";
    }
    function delete()
    {
        $id_del = $_POST['id'];
        $this->task->delete_task($id_del);
    }
}