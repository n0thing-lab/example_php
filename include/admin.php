<?php

include("init.php");

if(isset($_SESSION['id']))
{
    $query = mysql_query("SELECT * FROM `users` WHERE id = '{$_SESSION['id']}'");
    $row = mysql_fetch_assoc($query);
    if ($row['admin'] != 1)
    {
        header("Location: /");
    }
}
else
{
    header("Location: /modules/user/login.php");
}