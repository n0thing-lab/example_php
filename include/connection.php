<?php

$conf = include($_SERVER['DOCUMENT_ROOT'].'/config.php');

$link=@mysql_connect($conf['db_host'], $conf['db_user'], $conf['db_pass']) or die(mysql_error());
@mysql_select_db($conf['db_name'], $link) or die(mysql_error());
mysql_query("SET CHARSET UTF8");

unset($conf);