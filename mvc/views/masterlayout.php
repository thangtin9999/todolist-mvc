<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Layout</title>
    <style>
    div {
        padding: 20px;
    }

    #header,
    #footer {
        background-color: yellow;
    }
    </style>
</head>

<body>
    <div id="header"></div>
    <div id="content">
        <?php
        require_once "./mvc/views/pages/" . $data["page"] . ".php";
        ?>

    </div>
    <div id="footer"></div>
</body>

</html>