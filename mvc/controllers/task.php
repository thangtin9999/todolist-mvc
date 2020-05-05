<?php
class task extends controller
{
    function sayhi()
    {
        $teo = $this->model("taskmodel");
        echo $teo->gettask();
    }
    function creat($content, $category)
    {
        echo $content . " " . $category;
    }



    function read($content, $category)
    {
        //Model
        $teo = $this->model("taskmodel");
        $tong = $teo->tong($content, $category);
        //view
        $this->view("masterlayout", [
            "page" => "task",
            "Number" => $tong,
            "alltask" => ["content", $tong],
            "SV" => $teo->task()
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