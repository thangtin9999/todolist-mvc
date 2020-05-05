<h2>Task</h2>
<h3>
    <?php
    echo $data["alltask"][0] . " " . $data["alltask"][1];
    ?>
</h3>
<?php
while ($row = mysqli_fetch_array($data['SV'])) {
    echo $row['content'] . "|" . $row['category'] . "|" . $row['status'] . "<hr/>";
}
?>