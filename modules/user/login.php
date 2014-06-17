<?php
	require($_SERVER['DOCUMENT_ROOT'].'/include/init.php');
	if (!empty($_POST))
	{
		$pswd = md5($_POST['pswd']);
		$sql=mysql_query("SELECT * FROM `users` WHERE `users`.`email` = '".$_POST['email']."' AND `users`.`password` = '".$pswd."'");
		if (mysql_num_rows($sql) == 0)
		{
			echo "unknown user";
		}
		else 
		{
			$result = mysql_fetch_assoc($sql);
			$_SESSION['id'] = $result['id'];
			header("Location: /admin.php");
		}
		
	}
?>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="/js/jquery-1.9.1.min.js"></script>
        <link rel="stylesheet" href="/js/extensions/bootstrap/css/bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="/js/extensions/bootstrap/js/bootstrap.min.js"></script>

        <style>
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #eee;
            }

            .form-signin {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin .checkbox {
                font-weight: normal;
            }
            .form-signin .form-control {
                position: relative;
                height: auto;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 10px;
                font-size: 16px;
            }
            .form-signin .form-control:focus {
                z-index: 2;
            }
            .form-signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
        </style>
	</head>
<body>
<div class="container">

    <form class="form-signin" role="form" method="POST">
        <h2 class="form-signin-heading">Вход</h2>
        <input type="email" name="email" class="form-control" placeholder="Email адрес" required="" autofocus="">
        <input type="password" name="pswd" class="form-control" placeholder="Пароль" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    </form>

</div>
</body>
</html>


