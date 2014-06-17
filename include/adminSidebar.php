<?php
$module = explode('/', $_SERVER['REQUEST_URI']);
?>
<ul class="nav nav-pills nav-stacked" id="yw0">
    <li <?=$_SERVER['REQUEST_URI']=='/admin.php'?'class="active"':''?>><a href="/admin.php">Панель управления</a></li>
    <li <?=(isset($module[2]) && $module[2]=='profiles')?'class="active"':''?>><a href="/modules/profiles/admin/manage.php">Анкеты</a></li>
    <li <?=(isset($module[2]) && $module[2]=='news')?'class="active"':''?>><a href="/modules/news/admin/manage.php">Новости</a></li>
    <li <?=(isset($module[2]) && $module[2]=='articles')?'class="active"':''?>><a href="/modules/articles/admin/manage.php">Статьи</a></li>
    <li <?=(isset($module[2]) && $module[2]=='pages')?'class="active"':''?>><a href="/modules/pages/admin/manage.php">Страницы</a></li>
    <li <?=(isset($module[2]) && $module[2]=='user')?'class="active"':''?>><a href="/modules/user/admin/manage.php">Пользователи</a></li>
</ul>