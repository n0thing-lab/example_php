<?php
	include($_SERVER['DOCUMENT_ROOT'].'/include/admin.php');
	if (isset($_GET['id']))
	{
		if(!empty($_POST) && is_numeric($_GET['id']))
		{
            if(!empty($_POST['email']))
			    mysql_query ("UPDATE `users` SET `email` = '".$_POST['email']."' WHERE id = {$_GET['id']}") or die(mysql_error());

            if(!empty($_POST['password']))
                mysql_query ("UPDATE `users` SET `password` = '".md5($_POST['password'])."' WHERE id = {$_GET['id']}") or die(mysql_error());
            header("Location: manage.php");
		}
	}
	$query = mysql_query("SELECT * FROM `users` WHERE id = {$_GET['id']}");
	$myrow = mysql_fetch_assoc($query);
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
            <li><a href="/modules/user/admin/update.php?id=<?=$myrow['id']?>">Обновление пользователя #<?=$myrow['id']?></a><span class="divider"></span></li>
        </ul>

        <form role="form" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email адрес</label>
                <input type="email" name="email" class="form-control" placeholder="Введите email" value="<?=$myrow['email']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" name="password" class="form-control" placeholder="Пароль" value="">
            </div>
            <button type="submit" class="btn btn-default">Сохранить</button>
        </form>

    </div>
</div>



</body></html>