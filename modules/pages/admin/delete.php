<?php
	require($_SERVER['DOCUMENT_ROOT'].'/include/admin.php');
	
	if (isset($_GET['id'])) 
	{
		if (is_numeric($_GET['id']))
		{
			mysql_query("DELETE FROM `pages` WHERE `news`.`id` = '{$_GET['id']}' ");
		}
	}
	
	header('Location: manage.php');
?>