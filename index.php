<?php
include($_SERVER['DOCUMENT_ROOT']."/include/init.php");

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
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'].'/include/userHeader.php'); ?>

<div class="container">
    <div class="col-md-9">
        <?=$row['content']?>
    </div>

    <div class="col-md-3 sidebar">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/include/userSidebar.php') ?>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/include/userFooter.php'); ?>



</body>
</html>