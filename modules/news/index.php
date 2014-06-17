<?php
include($_SERVER['DOCUMENT_ROOT']."/include/init.php");
?>

<html>
<head>
    <title>Новости</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="/js/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="/js/extensions/bootstrap/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="/js/extensions/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'].'/include/userHeader.php'); ?>

<div class="container">
    <div class="col-md-9">
        <?php
        $rows = mysql_query("SELECT * FROM `news` ") or die(mysql_error());

        if(mysql_num_rows($rows))
        {
            while($row=mysql_fetch_assoc($rows)):
                ?>
                <div class="well">
                    <h3><?=$row['title']?></h3>
                    <p><?=substr(strip_tags($row['content']),0,100)?></p>
                    <a href="/modules/news/view.php?id=<?=$row['id']?>">Подробнее</a>
                </div>
            <?php
            endwhile;
        }
        else
            echo '<p>Ничего не найдено</p>';
        ?>
    </div>

    <div class="col-md-3 sidebar">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/include/userSidebar.php') ?>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/include/userFooter.php'); ?>

</body>
</html>