<?php
class task extends controller
{
    function sayhi()
    {
        $teo = $this->model("taskmodel");
        echo $teo->gettask();
    }
    function create($content)
    {
        $add = $this->model("taskmodel");
        $add->add_task($content);
    }
    function read()
    {
        //Model
        $read = $this->model("taskmodel");
        //view
        $this->view("masterlayout", [
            "page" => "task",
            "SV" => $read->task()
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