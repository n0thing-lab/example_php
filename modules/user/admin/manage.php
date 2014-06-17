<?php
	include($_SERVER['DOCUMENT_ROOT'].'/include/admin.php');
?>

<html><head>
    <title>Панель управления</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="/js/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="/js/extensions/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="/js/extensions/bootstrap/js/bootstrap.min.js"></script>
    <style>
        body > .container > .col-md-3 {
            padding-left:0;
        }
    </style>
</head>
<body>
<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a href="/admin.php" class="navbar-brand">Полоцкое Райпо</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav pull-right nav-pills">
                <li>
                    <a href="/" style="padding:15px; border-radius: 0"><span>Вернуться на сайт</span></a>
                </li>
                <li>
                    <a href="/modules/user/logout.php" style="padding:15px; border-radius: 0"><i class="glyphicon glyphicon-log-out"></i> Выход</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-3"><?php include($_SERVER['DOCUMENT_ROOT'].'/include/adminSidebar.php') ?></div>
    <div class="col-md-9">
        <ul class="breadcrumbs breadcrumb">
            <li><a href="/admin.php">Панель управления</a><span class="divider"></span></li>
            <li><a href="/modules/user/admin/manage.php">Пользователи</a><span class="divider"></span></li>
        </ul>

        <div class="panel panel-default table-responsive"><table class="items table table-striped">
                <thead>
                <tr>
                    <th style="vertical-align:middle;" id="ajaxGridView_c0">#</th><th style="vertical-align:middle;" id="ajaxGridView_c1">Почтовый ящик</th><th class="col-lg-3" style="vertical-align:middle;" id="ajaxGridView_c2"></th></tr>
                </thead>
                <tbody>
                <?php
                $query = mysql_query("SELECT * FROM `users`");
                while($myrow = mysql_fetch_assoc($query))
                {	?>
                    <tr>
                        <td><?=$myrow['id']?></td>
                        <td><?=$myrow['email']?></td>
                        <td class="button-column">
                            <div class="btn-group btn-group-xs pull-right"><a class="modalForm refresh btn btn-default" title="Edit" rel="tooltip" href="update.php?id=<?=$myrow['id']?>"><i class="glyphicon glyphicon-pencil"></i></a></div>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
        </table></div>
    </div>
</div>



</body></html>