<?php
class taskmodel extends db
{
    public function show_task()
    {
        $qr = "SELECT * FROM task ORDER BY createdate desc";
        $rows = mysqli_query($this->conn, $qr);
        // return $rows;
        $arr = array();
        while ($row = mysqli_fetch_array($rows)) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }
    public function add_task($content)
    {
        $qr = "INSERT INTO task(content,status,createdate) VALUE('$content',1,now())";
        $result = false;
        if (mysqli_query($this->conn, $qr)) {
            $result = true;
        }
        return json_encode($result);
    }
}