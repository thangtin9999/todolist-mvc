<h2 class="mb-4" id='test'>My Task</h2>
<div>
    <?php
    $rows = json_decode($data['tasks'], true);
    foreach ($rows as $key => $row) {
    ?>
    <?php if ($row['status'] == '1') { ?>
    <div class="custom-control custom-checkbox" id="div-task-<?php echo $row['id']; ?>">
        <input id="customCheck<?php echo $row['id']; ?> " type="checkbox" class="custom-control-input">
        <label class="custom-control-label" for="customCheck<?php echo $row['id']; ?> ">
            <span class="label-text" id="text<?php echo $row['id']; ?>">
                <?php echo $row['content'];
                        ?></span>

        </label>
        <span class="badge pull-right">
            <button id="edit" name="edit" class="btn btn-danger" value="<?php echo $row['id']; ?>" data-toggle="modal"
                data-target="#basicExampleModal"><i class="fa fa-pencil" aria-hidden="true"></i>
            </button>
            <button id="delete" name="delete" class="btn btn-danger" value="<?php echo $row['id']; ?>"><i
                    class="fa fa-trash-o" aria-hidden="true"></i>
            </button>
        </span>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Task Content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" id="content_edit" name="content" value=""></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" id="save_task" class="btn btn-success" value="">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }
    }
    ?>
</div>