<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/include/admin.php');
	if(!empty($_POST))
	{
		$add="INSERT INTO `news` (`title`, `content`, `time`)
		VALUES 
		('".mysql_real_escape_string($_POST['title'])."', '".mysql_real_escape_string($_POST['content'])."', ".time().")";
		mysql_query($add);

        header("Location: manage.php");
	}
	
?>

<html><head>
    <title>Панель управления</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="/js/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="/js/extensions/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="/js/extensions/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/extensions/ckeditor/ckeditor.js"></script>
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
            <li><a href="/modules/news/admin/manage.php">Новости</a><span class="divider"></span></li>
            <li><a href="/modules/news/admin/create.php">Создание новости</a><span class="divider"></span></li>
        </ul>

        <form role="form" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Название</label>
                <input type="text" name="title" class="form-control" placeholder="Введите название">
            </div>
            <div class="form-group">
                <textarea name="content" class="form-control ckeditor" placeholder="Введите содержание"  rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Сохранить</button>
        </form>

    </div>
</div>



</body></html>