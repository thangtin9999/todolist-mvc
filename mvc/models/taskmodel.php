<?php
class taskmodel extends db
{
    public function task()
    {
        $qr = "SELECT * FROM task";
        return mysqli_query($this->conn, $qr);
    }
    public function add_task($content)
    {
        $qr = "INSERT INTO task(content,status,createdate) VALUE($content,1,now())";
    }
}