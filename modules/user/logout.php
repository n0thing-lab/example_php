<?php
require($_SERVER['DOCUMENT_ROOT'].'/include/init.php');
session_destroy();
header("Location: /");