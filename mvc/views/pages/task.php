<h2 class="mb-4">Task</h2>
<div class="task">
    <?php
    $rows = json_decode($data['tasks'], true);
    foreach ($rows as $key => $row) {
    ?>
    <input id="task-item" type="checkbox" class="task-item">
    <label for="">
        <span class="label-text" id="">
            <?php echo $row['content'];
                ?></span>
    </label>
    <hr />
    <?php
    }
    ?>
</div>