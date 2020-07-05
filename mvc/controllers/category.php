<?php
class category extends controller
{
    public $category;
    function category()
    {
        $this->category = $this->model("taskmodel");
    }
    function read()
    {
        //Model
        //view
        $this->view("masterlayout", [
            "page" => "task",
            "tasks" => $this->category->show_task()
        ]);
    }
    function mytask()
    {
        //Model
        //View
        $this->view("masterlayout", ["page" => "my-task", "tasks" => $this->category->show_task()]);
    }
    function complete()
    {
        //Model
        //View
        $this->view("masterlayout", ["page" => "complete", "tasks" => $this->category->show_task()]);
    }
}