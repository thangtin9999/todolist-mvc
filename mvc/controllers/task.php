<?php
class task
{

    function creat($content, $category)
    {
        echo $content . " " . $category;
    }
    function read()
    {
        echo "read task";
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