<h2 class="mb-4">Task</h2>
<div>
    <?php
    $rows = json_decode($data['tasks'], true);
    foreach ($rows as $key => $row) {
    ?>
    <div class="custom-control custom-checkbox">
        <input id="customCheck<?php echo $row['id']; ?> " type="checkbox" class="custom-control-input">
        <label class="custom-control-label" for="customCheck<?php echo $row['id']; ?> ">
            <span class="label-text" id="">
                <?php echo $row['content'];
                    ?></span>

        </label>
        <span class="badge pull-right">
            <button id="edit" class="btn btn-danger"><i class="fa fa-pencil" aria-hidden="true"></i>
            </button>
            <button id="delete" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
            </button>
        </span>
        <hr>
    </div>
    <?php
    }
    ?>
</div>