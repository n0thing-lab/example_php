<?php
include("/include/init.php");

$query = mysql_query("select * from pages where id = 1");
$row = mysql_fetch_assoc($query);
?>

<html>
<head>
    <title><?=$row['title']?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="/js/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="/js/extensions/bootstrap/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="/js/extensions/bootstrap/js/bootstrap.min.js"></script>

    <style>
        body{
            background-color: #F7F7F7;
            color: #505459;
        }
        .navbar{
            background-color: #E6E6E6;
        }
        .navbar .brand, .navbar .nav>li>a {
            color: #64686D;
            text-transform: uppercase;
            font-weight: 500;
            font-size: 13px;
            padding: 20px 15px;
            line-height: 20px;
        }
        .navbar-brand{
            padding:0;
            display: inline-block;
        }
        .navbar-brand img{
            height:60px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/images/logo.jpg"> Полоцкое районное потребительское общество</a>
            <a></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php include($_SERVER['DOCUMENT_ROOT'].'/include/userMenu.php') ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="col-md-9">
        <?=$row['content']?>
    </div>

    <div class="col-md-3">
        <?php
        $rows = mysql_query("SELECT * FROM news ORDER BY time DESC LIMIT 5");

        if(mysql_num_rows($rows)):
        ?>
        <h4>Последние новости</h4>
        <div class="list-group">
            <?php while($row = mysql_fetch_assoc($rows)): ?>
            <a href="/modules/news/view.php?id=<?=$row['id']?>" class="list-group-item"><?=$row['title']?></a>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <?php
        $rows = mysql_query("SELECT * FROM articles ORDER BY time DESC LIMIT 5");

        if(mysql_num_rows($rows)):
            ?>
            <h4>Последние статьи</h4>
            <div class="list-group">
                <?php while($row = mysql_fetch_assoc($rows)): ?>
                    <a href="/modules/news/view.php?id=<?=$row['id']?>" class="list-group-item"><?=$row['title']?></a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>


</body>
</html>