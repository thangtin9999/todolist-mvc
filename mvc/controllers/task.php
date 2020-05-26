<?php
class task extends controller
{
    public $task;
    function task()
    {
        $this->task = $this->model("taskmodel");
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
        // try: thu delete xem co duoc ko
        try {
            $this->task->delete_task($id_del);
            // neu delete duoc thi httpcode 200, message success
            //header("HTTP/1.1 200"); => 200 thi ko can cung duoc, vi default la http code 200
            echo "success";
        } catch (\Exception $e) {
            header("HTTP/1.1 400");
            echo "fail";
        }

        //view
        // $this->view("masterlayout", [
        //     "page" => "task",
        //     "tasks" => $this->task->show_task()
        // ]);
        // neu delete thanh cong thi server chi return: success/http code 200
        // neu delete KO thanh cong thi server return: fail/http code 404

    }
    function task_complete()
    {
        $id = $_POST['id'];
        $this->task->task_complete($id);
    }
}