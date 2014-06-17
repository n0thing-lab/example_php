<?php
	include($_SERVER['DOCUMENT_ROOT'].'/include/init.php');
	if (isset($_GET['id']))
	{
		if(is_numeric($_GET['id']))
		{
			$query = mysql_query("SELECT * FROM pages WHERE id = '{$_GET['id']}' LIMIT 1");
			$myrow = mysql_fetch_assoc($query);
		}
	}
?>

<html>
<head>
    <title><?=$myrow['title']?></title>
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
        <?=$myrow['content']?>
    </div>

    <div class="col-md-3 sidebar">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/include/userSidebar.php') ?>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/include/userFooter.php'); ?>

</body>
</html>