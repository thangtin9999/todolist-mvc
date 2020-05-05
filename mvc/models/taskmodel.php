<?php
class taskmodel extends db
{
    public function gettask()
    {
        return "gettask function";
    }
    public function tong($n, $m)
    {
        return $n + $m;
    }
    public function task()
    {
        $qr = "SELECT * FROM task";
        return mysqli_query($this->conn, $qr);
    }
}