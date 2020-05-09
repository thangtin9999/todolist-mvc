<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/todo/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/todo/public/css/main.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <h4><a href="#" id="sidebarCollapse" class="logo">TODO</a></h4>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="#"><span class="fa fa-tasks"></span> My task</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-check-square-o"></span> Complete</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-trash"></span> Trash</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-user"></span> About</a>
                </li>

            </ul>

            <div class="footer">
                <p>
                    Copyright &copy;
                    <script>
                    document.write(new Date().getFullYear());
                    </script> by ThangTin
                </p>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <div class="s003">
                <form>
                    <div class="inner-form">
                        <div class="input-field second-wrap">
                            <input id="search" type="text" placeholder="Enter Task...." />
                        </div>
                        <div class="input-field third-wrap">
                            <button class="btn-search" type="button">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <?php
                require_once "./mvc/views/pages/" . $data["page"] . ".php";
                ?>
            </div>
        </div>
    </div>

    <script src="http://localhost/todo/public/js/jquery.min.js"></script>
    <script src="http://localhost/todo/public/js/popper.js"></script>
    <script src="http://localhost/todo/public/js/bootstrap.min.js"></script>
    <script src="http://localhost/todo/public/js/main.js"></script>
    <script src="http://localhost/todo/public/js/choices.js"></script>
</body>

</html>