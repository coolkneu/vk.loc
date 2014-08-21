<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Регистрация</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="js/myscripts.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="registration.css" />
</head>

<body>
		<form method="POST" align="index.php" class="Registration" id="loginform">
			<h1>Регистрация</h1>
			<div class="polosa"></div>
			<div class="nazvanie">
				<p>Логин</p>
				<p>Электронная почта</p>
				<p>Дата рождения</p>
				<p>Пароль</p>
			</div>
		<ul class="field">
				<li><input type="text" name="login" placeholder="Логин"/></li>
				<li><input type="text" name="email" placeholder="Email"/></li>
				<li><input type="text" name="date" placeholder="Дата рождения"/></li>
				<li><input type="password" name="password" placeholder="Пароль"/></li>
		</ul>	
		<div class="button">
			<input type="submit" name="submit" value="Зарегистрироваться"/>
		</div>
		</form>
</body>
</html>
<?php
	if($_POST['login'] != "" && $_POST['email'] != "" && $_POST['date'] != "" && $_POST['password'] != "")
	{$db=new
	PDO('mysql:host=localhost;dbname=vk;charset=utf8', 'root', '');
	$db->query('insert into users (email, login, date, password) values ("' . $_POST['email'] . '", "' . $_POST['login'] . '","'. $_POST['date'] .'", "' . $_POST['password'] . '")');
}
?>