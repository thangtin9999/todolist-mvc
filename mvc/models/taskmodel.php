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
    // Delete Task
    public function delete_task($id)
    {
        // cho nay thieu kiem tra id co delete duoc hay ko ne
        // id 94 da xoa khoi db roi ma van con xoa duoc
        $qr = "DELETE FROM task WHERE id='$id'";
        mysqli_query($this->conn, $qr);
        // ko co row/task nao bi delete thi bao loi
        if (mysqli_affected_rows($this->conn) === 0) {
            throw new Exception('Cannot delete');
        }
    }

    // Edit Task - Get Content
    public function get_content($id)
    {
        $qr = "SELECT content FROM task WHERE id ='$id'";
        if (mysqli_query($this->conn, $qr)) {
            $content = mysqli_query($this->conn, $qr);
            $row = $content->fetch_assoc();
        }
        return $row['content'];
    }


    public function update($id, $content)
    {
        $qr = "UPDATE task SET content='$content', updatedate=now() WHERE id=$id";
        mysqli_query($this->conn, $qr);
    }

    public function check_task($content)
    {
        $qr = "SELECT id FROM task
        WHERE content='$content'";
        $rows = mysqli_query($this->conn, $qr);
        $result = false;
        if (mysqli_num_rows($rows) > 0) {
            $result = true;
        }
        return json_encode($result);
    }
}